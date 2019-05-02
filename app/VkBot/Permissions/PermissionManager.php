<?php

namespace App\VkBot\Permissions;

use App\VkUser;

class PermissionManager
{
    public static function has_permission(int &$user_id, string $permission): bool {
        $is_permissioned = false;

        $vk_user = VkUser::where('vk_id', $user_id)->first();

        if ( $vk_user === null )
            return false;

        \Log::info($vk_user->permissions);
            
        foreach ( $vk_user->permissions as $perm ) {
            if ( ($perm == $permission) || ($perm == '*') ) {
                $is_permissioned = true;
                break;
            }
        }

        return $is_permissioned;
    }
}

?>
