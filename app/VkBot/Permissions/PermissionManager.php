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

        $user_permissions = json_decode($vk_user->permissions);
        \Log::info($user_permissions);

        foreach ( $user_permissions as $perm ) {
            if ( ($perm == $permission) || ($perm == '*') ) {
                $is_permissioned = true;
                break;
            }
        }

        return $is_permissioned;
    }
}

?>
