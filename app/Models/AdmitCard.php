<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdmitCard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'institute_name',
        'post_name',
        'admit_card_image',
    ];

    use HasFactory;

    // Relations

    public function user()
    {
        $this->belongsToMany(User::class);
    }
}
