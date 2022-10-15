<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavePassword extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'institute_name',
        'post_name',
        'user',
        'password',
    ];
    public function user()//: BelongsToMany
    {
        $this->belongsToMany(User::class);
    }
}
