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
        Schema::create('cv_resumes', function (Blueprint $table)
        {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name', 50)->nullable();
            $table->string('father_name', 50)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->string('date_of_birth', 20)->nullable();
            $table->string('birth_place', 50)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->string('religion', 20)->nullable();
            $table->string('national_id', 20)->nullable();
            $table->string('birth_registration', 20)->nullable();
            $table->string('passport_no', 20)->nullable();
            $table->string('marital_status', 20)->nullable();
            $table->string('spouse_name', 50)->nullable();
            $table->string('quota', 50)->nullable();
            $table->boolean('typing_speed', )->default(false);
            $table->boolean('satlipi_typing_speed', )->default(false);
            $table->string('profile_photo', 150)->nullable();
            $table->string('signature_photo', 150)->nullable();
            $table->string('candidate_for', 100)->nullable();
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
        Schema::dropIfExists('cv_resumes');
    }
};
