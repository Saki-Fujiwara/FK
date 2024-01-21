<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exquestion extends Model
{
    
    use HasFactory;
   public function excomments()
    {
        return $this->belongsToMany(Exquestion::class, 'excomments', 'exquestion_id', 'user_id')->withPivot(['comment',]);
    }
    
}


