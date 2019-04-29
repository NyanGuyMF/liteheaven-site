<?php

namespace App\Http\Controllers\VkBot;

use App\Http\Controllers\Controller;

class VkRequestConsroller extends Controller {
    public function handle() {
        \Log::info($_POST);
    }
}

?>
