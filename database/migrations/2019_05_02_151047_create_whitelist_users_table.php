<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhitelistUsersTable extends Migration
{
    public function up(): void {
        Schema::create('whitelist_users', function (Blueprint $table) {
            $table->string('name', 255)->primary();
            $table->boolean('is_whitelisted');
            $table->string('until', 50)->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('whitelist_users');
    }
}
