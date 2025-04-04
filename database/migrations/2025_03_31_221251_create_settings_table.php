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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->time('lighton');
            $table->time('lightoff');
            $table->time('sprinkleron');
            $table->time('sprinkleroff');
            $table->float('tempabove');
            $table->float('tempbelow');
            $table->integer('humiditybelow');
            $table->integer('humidityabove');
            $table->integer('lightstatus');
            $table->integer('sprinklerstatus');
            $table->integer('fanstatus');
            $table->integer('autolight');
            $table->integer('autofan');
            $table->integer('autosprinkler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
