<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquestion extends Model
{
    use HasFactory;
    
    public function comments() {
        return $this->hasMany('App\Pacomment');
    }
    
    protected $fillable = [
        'question',
        'answer',
        'user_id'
    ];

}

