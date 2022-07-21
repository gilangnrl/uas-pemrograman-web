<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category_name',
        'category_description',
    ];

    protected $hidden = [
        'pivot'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'category_article', 'article_id', 'category_id');
    }

    public function articleCategories() {
        return $this->hasMany(CategoryArticle::class);
    }
}
