<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    protected $table = 'category_article';

    protected $fillabel = [
        'category_id',
        'article_id'
    ];

    public function articles() {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
