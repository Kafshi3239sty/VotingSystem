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
        Schema::create('candidate', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->increments('CandidateID');
            $table->unsignedInteger('VoterID');
            $table->unsignedInteger('National_ID');
            $table->unsignedInteger('politicalPartyID');
            $table->string('FullNames');
            $table->string('position');
            $table->unsignedInteger('phone');
            $table->unsignedInteger('age');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('sc_id');
            $table->unsignedInteger('county_id');
            $table->unsignedInteger('ward_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('VoterID')->references('VoterID')->on('voter');
            $table->foreign('politicalPartyID')->references('politicalPartyID')->on('politicalparty');
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
        Schema::dropIfExists('candidate');
    }
};
