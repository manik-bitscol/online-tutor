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
        Schema::create('circulars', function (Blueprint $table) {
            $table->id();
            $table->string('circular_title')->nullable();
            $table->string('application_fee')->nullable();
            $table->string('circular_image')->nullable();
            $table->string('exam_date')->nullable();
            $table->string('exam_time')->nullable();
            $table->string('circular_location')->nullable();
            $table->longText('circular_description')->nullable();
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
        Schema::dropIfExists('circulars');
    }
};
