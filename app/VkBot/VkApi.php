<?php

namespace App\VkBot;

class VkApi
{
    private static $message_keys = [ 'message', 'attachment', 'keyboard' ];

    private static $receiver_keys = [ 'user_ids', 'user_id', 'group_id', 'domain', 'peer_id' ];

    /**
     * @return bool true if successfully sent.
     */
    public static function send_message(int &$group_id, array $parameters = []): bool {
        $group_config = config('app.vkbot.groups')[$group_id];
        $has_receiver = self::array_keys_exists(self::$receiver_keys, $parameters, true); 
        $has_message = self::array_keys_exists(self::$message_keys, $parameters, true)
                || array_key_exists('sticker_id', $parameters);

        if ( !$has_receiver ) {
            \Log::info('Invalid message parameters: there are no receiver');
            \Log::info($parameters);
            return false;
        } else if ( !$has_message ) {
            \Log::info('Invalid message parameters: there are no message');
            \Log::info($parameters);
            return false;
        }

        $message_obj = [
            'random_id' => 0,
            'access_token' => $group_config['access_token'],
            'v' => $group_config['api_v'],
        ];

        self::parse_params($message_obj, $parameters);

        \Log::info('Sending request to VK:');
        \Log::info($message_obj);
        
        return self::send_message_request($message_obj);
    }

    /** @return bool Returns true if message sent successfully, false otherwise */
    private static function send_message_request(array &$message_obj): bool {
        $response = json_decode(file_get_contents(
            'https://api.vk.com/method/messages.send?'. http_build_query($message_obj)
        ), true);

        $is_sent = !array_key_exists('error', $response);

        if ( !$is_sent ) {
            \Log::error($response['error']);
        }

        return $is_sent;
    }

    /**
     * Adds known parameters from given array to given messaeg object.
     * 
     * Affects to given array.
     * 
     * @param array $message_obj — message object to add paramenters.
     * @param array $parameters — parameters to add.
     * 
     * @return void
     */
    private static function parse_params(array &$message_obj = [], array &$parameters = []): void {
        if ( empty($message_obj) || empty($parameters) )
            return;

        // add message to object
        if ( array_key_exists('sticker_id', $parameters) )
            // if it is sticker message just set sticker and nothing else
            $message_obj['sticker_id'] = $parameters['sticker_id'];
        else 
            // else add other message attachments
            foreach ( self::$message_keys as $message_key )
                if ( array_key_exists($message_key, $parameters) )
                    $message_obj[$message_key] = $parameters[$message_key];

        // add receivers to object
        foreach ( self::$receiver_keys as $receiver_key )
            if ( array_key_exists($receiver_key, $parameters) )
                $message_obj[$receiver_key] = $parameters[$receiver_key];
    }

    private static function array_keys_exists(array &$keys, array &$array, bool $at_least_one = false): bool {
        $is_exists = false;

        foreach ( $keys as $key ) {
            $is_exists = array_key_exists($key, $array);

            if ( $at_least_one && $is_exists )
                return $is_exists;
            else if ( !($at_least_one || $is_exists) )
                break;
        }

        return $is_exists;
    }
}

?>
