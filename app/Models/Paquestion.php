<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquestion extends Model
{
    
    use HasFactory;
   public function comments()
    {
        return $this->belongsToMany(Paquestion::class, 'pacomments', 'paquestion_id', 'user_id')->withPivot(['comment','type']);
    }
    
}


