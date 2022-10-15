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
        Schema::create('questions', function (Blueprint $table)
        {
            $table->id();
            $table->foreignId('exam_id')->constrained()->cascadeOnDelete();
            $table->tinyText('question');
            $table->string('option_a', 150);
            $table->string('option_b', 150);
            $table->string('option_c', 150);
            $table->string('option_d', 150);
            $table->string('answer');
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
        Schema::dropIfExists('questions');
    }
};