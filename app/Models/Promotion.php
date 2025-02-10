<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';  // En lugar de 'id'
    }
    
    public function getdiscountAttribute(){
        return $this->discounted_price * 100;
    }

    //uno a muchos
    public function details(){
        return $this->hasMany('App\Models\PromotionDetail');
    }

    //relación de uno a muchos inversa
    public function catalog(){
        return $this->belongsTo('App\Models\Catalog' , 'catalog_id');
    }

     //relacion uno a muchos polimorfica
     public function images(){
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}

