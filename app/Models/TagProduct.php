<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProduct extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa
    public function tag(){
        return $this->belongsTo('App\Models\Tag' ,'tag_id');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product' ,'product_id');
    }
}
