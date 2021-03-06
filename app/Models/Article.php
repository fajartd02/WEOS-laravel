<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    public function comments() {
        return $this->hasMany('App\Models\ArticleComment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    
}
