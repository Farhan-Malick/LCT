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
        Schema::table('ticket_listings', function (Blueprint $table) {
            $table->string('type_cat')->default('null');
            $table->string('type_sec')->default('null');
            $table->string('type_row')->nullable();
            $table->string('ticket_benefits')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_listings', function (Blueprint $table) {
            //
        });
    }
};
