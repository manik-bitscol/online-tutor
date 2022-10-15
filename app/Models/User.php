<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',//
        'email',
        'phone',
        'profile_image',
        'role_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    // Relations 

    public function savePasswords():HasMany
    {
        return $this->hasMany(SavePassword::class);
    }
    
    public function admitCard():HasMany
    {
        return $this->hasMany(AdmitCard::class);
    }
    public function cvResume():HasMany
    {
        return $this->hasMany(CvResume::class);
    }

    public function hardCopy():HasMany
    {
        return $this->hasMany(HardCopy::class);
    }
    public function jobCircular():HasMany
    {
        return $this->hasMany(JobCircular::class);
    }
    public function address():HasMany
    {
        return $this->hasMany(Address::class);
    }
    public function educationQualification():HasMany
    {
        return $this->hasMany(EducationQualification::class);
    }

    public function problems():HasMany
    {
        return $this->hasMany(Problem::class);
    }
    public function problemRelies():HasMany
    {
        return $this->hasMany(ProblemReply::class);
    }
}
