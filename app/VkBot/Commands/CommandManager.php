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
    public function run_command(
        mixed &$group_id, mixed &$user_id, mixed &$receiver,
        string &$name, array &$args
    ) {
        if ( !self::is_cmd_exists($name) )
            return false;

        $cmd = $commands[$name];
        $is_executed = $cmd->execute($group_id, $user_id, $receiver, $args);

        if ( !$is_executed ) {
            VkApi::send_message(
                $group_id, [
                    'peer_id' => $receiver,
                    'text' => config('locale.usage.'. $cmd->get_name()),
                ]
            );
        }

        return $is_executed;
    }

    /** @return bool Returns true if command added sucessfully, false otherwise */
    public function add_command(Command &$cmd)
    {
        if ( $cmd == null )
            return false;

        $this->command[$cmd->get_name()] = $cmd;
    }

    public function is_cmd_exists(string &$cmd_name) {
        if ( $cmd_name != null )
            return $this->commands[$cmd_name] != null;
        else
            return false;
    }
}

?>
