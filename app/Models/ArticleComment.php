<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article');
    }
}
