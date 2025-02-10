<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';  // En lugar de 'id'
    }

    //relación de uno a muchos
    public function promotionDetail(){
        return $this->hasMany('App\Models\PromotionDetail');
    }

    public function tags(){
        return $this->hasMany('App\Models\TagProduct');
    }

    //relación de uno a muchos inversa
    public function category(){
        return $this->belongsTo('App\Models\Category' , 'category_id');
    }

    //relacion uno a muchos polimorfica
    public function images(){
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
