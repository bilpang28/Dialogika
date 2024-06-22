<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function writer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'users');
    }

    public function writers()
    {
        return $this->belongsToMany(User::class, 'user_articles');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_categories');
    }
}
