<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\AdmitCard::factory(20)->create();
        \App\Models\Address::factory(20)->create();
        \App\Models\CvResume::factory(10)->create();
        \App\Models\EducationQualification::factory(20)->create();
        \App\Models\HardCopy::factory(20)->create();
        \App\Models\JobCircular::factory(20)->create();
        \App\Models\SavePassword::factory(20)->create();
        \App\Models\Book::factory(5)->create();
        \App\Models\Circulars::factory(5)->create();
        \App\Models\CurrentGK::factory(10)->create();
        \App\Models\District::factory(10)->create();
        \App\Models\Upazila::factory(20)->create();
        \App\Models\LectureSheet::factory(10)->create();
        \App\Models\PracticeQuestion::factory(10)->create();
        \App\Models\Problem::factory(10)->create();
        \App\Models\ProblemReply::factory(10)->create();
        \App\Models\Subject::factory(10)->create();
        \App\Models\Topic::factory(20)->create();
        \App\Models\Exam::factory(10)->create();
        \App\Models\Question::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
