<?php

namespace App\Http\Controllers\VkBot;

class VkRequestConsroller extends Controller {
    public function handle() {
        \Log::info($_POST);
    }
}

?>
