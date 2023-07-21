<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default("Guest");;
            $table->string('last_name')->default("User");
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('account_type')->default("buyer");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default("guest");
            $table->rememberToken();
            $table->timestamps();
            $table->string('fb_id')->nullable();
            $table->string('role')->default(0);
            $table->string('primary_phone')->default("Guest User");
            $table->string('country')->default("Guest User");
            $table->string('nationality')->default("Guest User");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
