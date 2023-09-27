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
        Schema::create('weapon_fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('q_1');
            $table->integer('q_2');
            $table->integer('q_3');
            $table->integer('q_4');
            $table->integer('w_1');
            $table->integer('w_2');
            $table->integer('w_3');
            $table->integer('w_4');
            $table->integer('w_5');
            $table->integer('w_6');
            $table->integer('e');
            $table->integer('passive_1');
            $table->integer('passive_2');
            $table->integer('passive_3');
            $table->integer('passive_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapon_fighters');
    }
};
