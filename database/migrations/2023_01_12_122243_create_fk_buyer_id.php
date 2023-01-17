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
        Schema::table('responders', function (Blueprint $table) {
            $table->unsignedBigInteger('buyer_id')->after('responder_id')->index();
            $table->foreign('id')->references('id')->on('users');

            $table->unsignedBigInteger('request_id')->index();
            $table->foreign('id')->references('id')->on('service_requests');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('responders', function (Blueprint $table) {
            //
        });
    }
};
