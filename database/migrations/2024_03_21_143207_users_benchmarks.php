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
        Schema::create('usersBenchmarks', function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->integer('exercise');
            $table->string('date');
            $table->integer('reps');
            $table->integer('weightDistance');
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersBenchmarks');
    }
};
