<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::with(['category','images','tags'])
            ->where('status', 1)
            ->get();

            $catalogs = Catalog::with('promotions','images')
            ->where('status', 1)
            ->get();
                   
    return view('products.index', ['products' => $products, 'catalogs' => $catalogs]);
  }

  public function show(string $slug)  
  {
    
    $product = Product::with(['category','tags','images'])->where('slug',$slug)->first();
    
    
    $products =Product::with(['category','tags','images'])
              ->where('status',1)
              ->inRandomOrder()
              ->limit(8)
              ->get();
    
    return view('products.show', ['product' => $product, 'products' => $products]);
  }

}
