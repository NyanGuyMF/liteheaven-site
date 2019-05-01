<?php

namespace App\Http\Controllers\VkBot;

class MessageHandler
{
    /**
     * Handles message request from VK.
     * 
     * @param array $vk_request — request from VK.
     * @return 'ok' string if successfuly handled, error otherwise.
     */
    public function handle($vk_request) {
        return response('ok', 201);
    }

    private function handle_group_message($group_message) {

    }

    private function handle_private_message($private_message) {

    }
}

?>
