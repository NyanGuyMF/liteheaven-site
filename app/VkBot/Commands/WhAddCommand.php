<?php

namespace App\VkBot\Commands;

use App\VkBot\VkApi;

class WhAddCommand extends Command implements CommandExecutor
{
    public function __construct() {
        parent::__construct('whadd');
        parent::set_executor($this);
    }

    public function on_command(int &$group_id, int &$sender, int &$receiver, array &$args): bool {
        if ( count($args) == 0 )
            return false;

        VkApi::send_message(
            $group_id, [
                'peer_id' => $receiver,
                'message' => 'Hello!',
            ]
        );

        return true;
    }
}

?>
