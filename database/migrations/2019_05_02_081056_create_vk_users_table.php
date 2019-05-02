<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVkUsersTable extends Migration
{
    public function up(): void {
        Schema::connection('vk_bot')->create('vk_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vk_id');
            $table->json('permissions')->nullable();
        });
    }

    public function down(): void {
        Schema::connection('vk_bot')->dropIfExists('vk_users');
    }
}
