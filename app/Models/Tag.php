<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //relación de uno a muchos
    public function tagProducts(){
        return $this->hasMany('App\Models\TagProduct');
    }
}
