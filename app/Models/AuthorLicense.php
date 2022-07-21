<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorLicense extends Model
{

    protected $table = 'author_licenses';

    protected $dates = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsTo('App\Model\User');
    }
}
