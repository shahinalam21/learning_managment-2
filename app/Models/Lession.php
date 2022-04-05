<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
    use HasFactory;
    protected $fillable = [
        'titile',
        'course_id',
        'description',
        'video_url'
    ];
}
