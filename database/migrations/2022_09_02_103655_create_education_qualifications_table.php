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
        Schema::create('education_qualifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('exam_name', 50)->nullable();
            $table->string('board_name', 50)->nullable();
            $table->string('roll_no', 15)->nullable();
            $table->string('reg_no', 20)->nullable();
            $table->string('result', 5)->nullable();
            $table->string('subject', 20)->nullable();
            $table->string('passing_year', 20)->nullable();
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
        Schema::dropIfExists('education_qualifications');
    }
};
