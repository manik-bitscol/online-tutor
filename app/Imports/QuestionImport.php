<?php

namespace App\Imports;

use App\Models\Exam;
use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;

class QuestionImport implements ToModel
{

    private $exams;
    public function __construct()
    {
        $this->exams = Exam::select('id', 'name')->get();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user = $this->exams->where('name', $row[0])->first();
        return new Question([
            'exam_id'  => $user->id ?? null,
            'question' => $row[1],
            'option_a' => $row[2],
            'option_b' => $row[3],
            'option_c' => $row[4],
            'option_d' => $row[5],
            'answer'   => $row[6],
        ]);
    }
}