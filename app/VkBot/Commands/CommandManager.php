<?php

namespace App\VkBot\Commands;

use App\VkBot\VkApi;

class CommandManager
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];

        $whadd_cmd = new WhAddCommand();
        $this->commands[$whadd_cmd->get_name()] = $whadd_cmd;
    }

    /**
     * Runs command for given name.
     * 
     * If command with given name doesn't exists it will return false.
     * 
     * @param string|int    $group_id   Current group ID.
     * @param string|int    $user_id    The user who wants to run command.
     * @param string|int    $receiver   ID of user or conversation for output.
     * @param string        $name       Command name to run.
     * @param array         $args       Array of arguments for command.
     *
     * @return bool true if command executed, false otherwise.
     */
    public function run_command(array &$vk_request, string &$cmd_name, array &$args): bool {
        $group_id = $vk_request['group_id'];
        $sender = $vk_request['object']['from_id'];
        $receiver = $vk_request['object']['peer_id'];

        if ( !self::is_cmd_exists($cmd_name) )
            return false;

        $cmd = $this->commands[$cmd_name];
        $is_executed = $cmd->execute($group_id, $sender, $receiver, $args);

        if ( !$is_executed ) {
            VkApi::send_message(
                $group_id, [
                    'peer_id' => $receiver,
                    'message' => config('locale.usage.'. $cmd->get_name()),
                ]
            );
        }

        return $is_executed;
    }

    /** @return bool Returns true if command added sucessfully, false otherwise */
    public function add_command(Command &$cmd): bool {
        if ( $cmd == null )
            return false;

        $this->commands[$cmd->get_name()] = $cmd;

        return true;
    }

    public function is_cmd_exists(string &$cmd_name): bool {
        if ( $cmd_name != null )
            return array_key_exists($cmd_name, $this->commands);
        else
            return false;
    }
}

?>
