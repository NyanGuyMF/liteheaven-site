<?php

namespace App\VkBot\Commands;

abstract class Command
{
    private $name;
    private $executor;

    public function __construct(string $name, CommandExecutor $executor = null) {
        $this->name = $name;
        $this->executor = $executor;
    }

    public function set_executor(CommandExecutor $executor) {
        if ( $executor != null )
            $this->executor = $executor;
    }

    /**
     * Executes command.
     *
     * @param string|int    $group_id   Current group ID.
     * @param string|int    $user_id    The user who wants to run command.
     * @param string|int    $receiver   ID of user or conversation for output.
     * @param array         $args       Array of arguments for command.
     *
     * @return bool returns true if command executed successfully, false if
     *      executor doesn't exists or command wasn't executed.
     */
    public function execute(&$group_id, &$user_id, &$receiver, array &$args) {
        if ( $this->executor != null )
            return $this->executor->on_command($group_id, $user_id, $receiver, $args);
        else
            return false;
    }

    public function get_name() {
        return $this->name;
    }
}

?>
