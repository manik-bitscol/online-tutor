<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvResume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'birth_place',
        'gender',
        'nationality',
        'religion',
        'national_id',
        'birth_registration',
        'passport_no',
        'marital_status',
        'spouse_name',
        'quota',
        'typing_speed',
        'profile_photo',
        'signature_photo',
        'candidate_for',
    ];

    public function user()//:BelongsToMany
    {
        $this->belongsToMany(User::class);
    }
}
