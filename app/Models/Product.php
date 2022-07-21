<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products' ;

    protected $fillable = [
        'product_code',
        'product_name',
        'product_description',
        'product_price',
        'product_supplier',
        'product_stock',
        'img_url',
        'responsible_person'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'responsible_person');
    }
}
