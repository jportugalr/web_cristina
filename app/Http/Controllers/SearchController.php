<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promotion;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __invoke()
    {
        $searchTerm = request('q');

        $products = Product::with(['category','images','tags'])
                    ->where('products.status','=','1')
                    ->where('name', 'LIKE', '%' . $searchTerm . '%')
                     ->orWhereHas('category', function ($query) use ($searchTerm) {
                            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                            })
                    ->get();

        $promotions = Promotion::with(['details','details.product.tags','catalog', 'images'])
                        ->where('promotions.status','=','1')                        
                        ->where('name', 'like', '%' . $searchTerm . '%')                        
                        ->get();

        $promotions = Promotion::with(['details', 'details.product.tags', 'catalog', 'images'])
        ->where('promotions.status', '1')
        ->where(function ($query) use ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%') // Buscar en el nombre de la promoción                    
                    ->orWhereHas('details.product.category', function ($query) use ($searchTerm) {
                        $query->where('name', 'LIKE', '%' . $searchTerm . '%'); // Buscar en el nombre de la categoría de los productos dentro de la promoción
                    });
        })
        ->get();
        
        return view('search',['products'=>$products, 'promotions'=>$promotions]);
    }
}
