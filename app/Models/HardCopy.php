<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardCopy extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'institute_name',
        'post_name',
        'hard_copy_image',
    ];

    public function user() //:BelongsToMany 
    {
        $this->belongsToMany(User::class);
    }
}
