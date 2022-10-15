<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circulars extends Model
{
    use HasFactory;

    protected $fillable = [
        'circular_title',
        'application_fee',
        'circular_image',
        'exam_date',
        'exam_time',
        'circular_location',
        'circular_description',
    ];
}
