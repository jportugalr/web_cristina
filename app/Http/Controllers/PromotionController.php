<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Promotion;
use App\Models\Tag;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
  public function index(string $slug)
  {    
    
    
    $promotions = Promotion::with('details','details.product.tags','catalog', 'images')
            ->where('status', 1)
            ->whereHas('catalog', function ($query) use ($slug) {
              $query->where('slug', 'like', $slug);
          })
          ->get();

    
    $catalogs = Catalog::with('promotions','images')
            ->where('status', 1)
            ->get();
        
    return view('promotions.index', ['promotions' => $promotions, 'catalogs' => $catalogs]);
  }

  public function show(string $catalog_slug, string $slug)  
  {
    $promotion = Promotion::with('details','details.product.tags','catalog', 'images')
                  ->where('slug',$slug)
                  ->first(); 

    $promotions = Promotion::with('details','details.product.tags','catalog', 'images')
                  ->where('status', 1)
                  ->inRandomOrder()                     
                  ->limit(8)
                  ->get();
           
    return view('promotions.show', ['promotion' => $promotion, 'promotions' => $promotions]);
  }
}
