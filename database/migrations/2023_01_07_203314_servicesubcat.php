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
        Schema::create('ServiceSubcat', function (Blueprint $table) {
            $table->id();
            $table->integer('service_cat_id')->index();
            $table->foreign('service_cat_id')->references('id')->on('services');
            $table->string('subcat_name')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ServiceSubcat');
    }
};
