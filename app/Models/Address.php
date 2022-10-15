<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_type',
        'careof',
        'district',
        'upzilla',
        'village',
        'post_office',
        'post_code',
    ];

    //Relations

    public function user() //:BelongsToMany
    {
        $this->belongsToMany(User::class);
    }
    
}
