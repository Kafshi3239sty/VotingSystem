<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pollingstation', function (Blueprint $table) {
            $table->increments('pollingStationID');
            $table->string('pollingStationName');
            $table->timestamps();
            $table->unsignedInteger('sc_id');
            $table->unsignedInteger('county_id');
            $table->unsignedInteger('ward_id');

            $table->foreign('ward_id')->references('id')->on('towns');
            $table->foreign('sc_id')->references('id')->on('subcounty');
            $table->foreign('county_id')->references('id')->on('county');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pollingstation');
    }
};
