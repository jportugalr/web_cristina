<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    public function getdiscountAttribute(){
        $highest = $this->promotions->max('discounted_price');
        $highest = intval($highest * 100);            
        return $highest;
    }

    //relación de uno a muchos
    public function promotions(){
        return $this->hasMany('App\Models\Promotion');
    }

    //relacion uno a muchos polimorfica
    public function images(){
    return $this->morphMany('App\Models\Image', 'imageable');
    }
    
}
