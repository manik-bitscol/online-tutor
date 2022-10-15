<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['subject_id', 'name'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subjects::class);
    }
    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
    public function practiceQuestions(): HasMany
    {
        return $this->hasMany(PracticeQuestion::class);
    }
    public function sheets(): HasMany
    {
        return $this->hasMany(LectureSheet::class);
    }
}
