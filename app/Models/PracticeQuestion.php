<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PracticeQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'topic_id', 'question', 'answer'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
