<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    //relacion uno a muchos polimorfica
    public function images(){
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
