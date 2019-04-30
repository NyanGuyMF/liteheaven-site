<?php

namespace App\Http\Middleware;

use Closure;

class VkValidator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $vk_request       = json_decode(file_get_contents('php://input'), true);
        $groups_config    = config('vk.groups');
        $is_request_valid = array_key_exists('group_id', $vk_request) && array_key_exists('secret', $vk_request);

        if ( !$is_request_valid )
            return 'Malformed request';

        $group_id = $vk_request['group_id'];

        if ( !array_key_exists($group_id) )
            return 'Not registered group.';

        if ( $groups_config[$group_id]['secret'] != $vk_request['secret'] )
            return 'Invalid secret key.';

        return $next($request);
    }
}
