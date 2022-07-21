<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'description',
        'body',
        'author_id',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_article', 'article_id', 'category_id')->select(['id', 'category_name', 'category_description']);
    }

    public function articleCategories() {
        return $this->hasMany(CategoryArticle::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'author_id')->select(['id', 'name']);
    }
}
