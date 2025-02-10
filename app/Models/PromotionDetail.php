<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionDetail extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa
    public function promotion(){
        return $this->belongsTo('App\Models\Promotion' ,'promotion_id');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product' ,'product_id');
    }
}
