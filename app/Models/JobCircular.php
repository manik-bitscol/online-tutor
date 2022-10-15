<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'institute_name',
        'post_name',
        'job_circular_image',
    ];

    public function user()
    {
        $this->belongsToMany(User::class);
    }
}
