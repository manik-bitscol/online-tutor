<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LectureSheet extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}