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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->float('t1');
            $table->float('t2');
            $table->float('t3');
            $table->float('t4');
            $table->float('t5');
            $table->float('t6');
            $table->float('h1');
            $table->float('h2');
            $table->float('h3');
            $table->float('h4');
            $table->float('h5');
            $table->float('h6');
            $table->float('sm1');
            $table->float('sm2');
            $table->float('sm3');
            $table->float('sm4');
            $table->float('sm5');
            $table->float('sm6');
            $table->float('sm7');
            $table->float('sm8');
            $table->float('sm9');
            $table->float('sm10');
            $table->float('sm11');
            $table->float('sm12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
