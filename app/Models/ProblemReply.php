<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class ProblemReply extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','problem_id','answer'];


    public function user():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function problem():BelongsToMany
    {
        return $this->belongsToMany(Problem::class);
    }
}
