<?php

namespace App\VkBot\Commands;

use App\VkBot\VkApi;
use App\VkBot\Permissions\PermissionManager;
use App\WhitelistUser;

class WhAddCommand extends Command implements CommandExecutor
{
    public function __construct() {
        parent::__construct('whadd');
        parent::set_executor($this);
    }

    public function on_command(int &$group_id, int &$sender, int &$receiver, array &$args): bool {
        if ( count($args) < 2 )
            return false;

        $username = $args[1];

        if ( !PermissionManager::has_permission($sender, 'wh.add') ) {
            VkApi::send_message($group_id, [
                'peer_id' => $receiver,
                'message' => str_replace(
                    '{cmd}', '/'. parent::get_name(), config('locale.commands.error.no-permission')
                ),
            ]);
            return true;
        }

        $whitelisted = WhitelistUser::where('name', $username)->first();

        if ( $whitelisted === null ) {
            $whitelisted = new WhitelistUser;
            $whitelisted->name = $username;
        }

        $whitelisted->is_whitelisted = true;
        $whitelisted->save();

        VkApi::send_message($group_id, [
            'peer_id' => $receiver,
            'message' => str_replace('{nick}', $username, config('locale.commands.info.whadded')),
        ]);

        return true;
    }
}

?>
