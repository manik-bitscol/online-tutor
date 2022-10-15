<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentGK extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];
}
