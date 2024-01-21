<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Excomment extends Model
{
    protected $fillable = [
        'comment',
        'exquestion_id',
        'user_id'
    ];

    public function article()
    {
        return $this->belongsTo('App\Article', 'article_id');
    }

    public function user()
    {
        return $this->BelongsTo('App\User', 'user_id');
    }
}
