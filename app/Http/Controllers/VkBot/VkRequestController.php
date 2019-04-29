<?php

namespace App\Http\Controllers\VkBot;

use App\Http\Controllers\Controller;

class VkRequestController extends Controller {
    private $groups = [
        '174017128' => [
            'confirm' => '0ce90217',
            'secret_key'  => 'tZQLjd4ay94P9BWphedT',
        ],
    ];

    public function handle() {
        $request = json_decode(file_get_contents('php://input'), true);

        if (!(array_key_exists('type', $request) && array_key_exists('group_id', $request))) {
            return 'Malformed JSON request';
        }

        $group_id = $request['group_id'];

        switch (strtolower($request['type'])) {
            case 'confirmation':
                return self::handleConfirmation($group_id);

            default:
                \Log::info('Unknown vk request type: '. $request['type']);
                return 'Unknown type';
        }
    }

    private function handleConfirmation($group_id) {
        if (!array_key_exists($group_id, $$this->groups)) {
            \Log::info('Unknown vk group: '. $group_id);
            return 'Unknown group';
        }

        echo $$this->groups[$group_id]['confirm'];
        return 'ok';
    }
}

?>
