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
        Schema::create('presidingofficer', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('WorkerID')->primary();
            $table->unsignedInteger('pollingStationID');
            $table->string('FullNames');
            $table->unsignedInteger('phone');
            $table->unsignedInteger('age');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pollingStationID')->references('pollingStationID')->on('pollingstation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presidingofficer');
    }
};
