<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }
    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
    public function practiceQuestions(): HasMany
    {
        return $this->hasMany(PracticeQuestion::class);
    }
}