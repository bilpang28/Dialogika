<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'header_pic',
        'title',
        'body',
        'source',
        'profile_pic',
        'rating',
    ];
}
