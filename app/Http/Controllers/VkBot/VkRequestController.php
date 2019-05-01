<?php

namespace App\Http\Controllers\VkBot;

use App\Http\Controllers\Controller;

class VkRequestController extends Controller {
    private static $message_handler;

    public function __construct() {
        $message_handler = new MessageHandler();
    }
    
    public function handle() {
        $request = json_decode(file_get_contents('php://input'), true);

        $group_id = $request['group_id'];

        switch ( strtolower($request['type']) ) {
            case 'confirmation':
                return self::handleConfirmation($group_id);
            case 'message_new':
                return $message_handler->handle($request);

            default:
                \Log::info('Unknown vk request type: '. $request['type']);
                return 'Unknown type';
        }
    }

    private function handleConfirmation($group_id) {
        return config('app.vkbot.groups')[$group_id]['confirm'];
    }
}

?>
