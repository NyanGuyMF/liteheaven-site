<?php

namespace App\VkBot;

use App\VkBot\Commands\CommandManager;

class MessageHandler
{
    /**
     * Handles message request from VK.
     * 
     * @param array $vk_request Request from VK.
     * @return 'ok' string if successfuly handled, error otherwise.
     */
    public static function handle(array &$vk_request) {
        $message_text = $vk_request['object']['text'];

        if ( substr($message_text, 0, 1) == '/' ) {
            $args = preg_split('/(\/\w+)?\s/u', $message_text);
            preg_match('/^\/(\w+)/u', $message_text, $cmd_name);

            return MessageHandler::handle_command($vk_request, $cmd_name[1], $args);
        }

        return 'ok';
    }

    private static function handle_command(array &$vk_request, string &$cmd_name, array &$args) {
        $command_manager = new CommandManager();
        $receiver = $vk_request['object']['peer_id'];

        if ( !$command_manager->is_cmd_exists($cmd_name) ) {
            VkApi::send_message(
                $vk_request['group_id'], [
                    'peer_id' => $receiver,
                    'text' => str_replace('{cmd}', $cmd_name, config('locale.error.cmd-doesnt-exists')),
                ]
            );
            return 'ok';
        }

        if ( !$command_manager->run_command($vk_request, $cmd_name, $args) ) {
            \Log::error("Fail to execute $cmd_name command");
        }

        return 'ok';
    }
}

?>
