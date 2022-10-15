<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationQualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_name',
        'board_name',
        'roll_no',
        'reg_no',
        'result',
        'subject',
        'passing_year',
    ];

    //Relations

    public function user() //:BelongsToMany
    {
        $this->belongsToMany(User::class);
    }
}
