<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $fillable =['user_id','problem'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    
}
