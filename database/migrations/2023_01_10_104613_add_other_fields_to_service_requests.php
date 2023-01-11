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
        Schema::table('service_requests', function (Blueprint $table) {
           $table->string('mission_type')->nullable();
           $table->string('territory')->nullable();
           $table->double('assignment_value')->nullable()->index();
           $table->integer('requester_type')->index(); //At the, Private person, Business, Builder/Contractor,
           //Housing Cooperative, Villa  Association, Non-profit Association, Municipality/Authority
           $table->string('when')->nullable()->index(); //As soon as possible, Within 1 month, Within 3 months, Within 6 months, Within 12 months, Timing less important
            $table->date('date_from')->index()->nullable();
            $table->date('date_to')->index()->nullable();
            $table->boolean('project_status')->index()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_requests', function (Blueprint $table) {
            //
        });
    }
};
