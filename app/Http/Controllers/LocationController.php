<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    protected $locations;

   /**
     * Muestra la página de un departamento con sus provincias.
     */

     public function departamento($slug)
     {
        $locations = config('locations.departamentos');

        $catalogs = Catalog::with('promotions','promotions.details','promotions.details.product.tags','promotions.details.product.images','images')
            ->where('status', 1)
            ->get();

        // Buscar el departamento por slug
        $departamentoEncontrado = collect($locations)->firstWhere('slug', $slug);
    
        if (!$departamentoEncontrado) {
            abort(404);
        }
    
        // Convertir en objetos
        $departamento = (object) [
            'nombre' => array_search($departamentoEncontrado, $locations),
            'slug' => $departamentoEncontrado['slug'],
            'provincias' => collect($departamentoEncontrado['provincias'])->map(function ($provincia) {
                return (object) $provincia;
            })
        ];
   
        return view('departamento', compact('departamento', 'catalogs'));
    }  

    /**
     * Muestra la página de una provincia dentro de un departamento.
     */
    public function provincia($departamentoSlug, $provinciaSlug)
    {
        //$products = Product::inRandomOrder()->limit(8)->get(); 
     

        $catalogs = Catalog::with('promotions','promotions.details','promotions.details.product.tags','promotions.details.product.images','images')
            ->where('status', 1)
            ->get();

        $locations = config('locations.departamentos');

        // Buscar el departamento por slug
        $departamentoEncontrado = collect($locations)->firstWhere('slug', $departamentoSlug);

        if (!$departamentoEncontrado) {
            abort(404);
        }
       
        // Convertir en objeto el departamento
        $departamento = (object) [
            'nombre' => array_search($departamentoEncontrado, $locations),
            'slug' => $departamentoEncontrado['slug'],
            'provincias' => collect($departamentoEncontrado['provincias'])->map(function ($provincia) {
                return (object) $provincia;
            })
        ];
        
        // Buscar la provincia dentro del departamento
        $provinciaEncontrada = $departamento->provincias->firstWhere('slug', $provinciaSlug);
        
        if (!$provinciaEncontrada) {
            abort(404);
        }

        // Convertir en objeto la provincia
        $provincia = (object) [
            'nombre' => $provinciaEncontrada->nombre,
            'slug' => $provinciaEncontrada->slug,
            'departamento' => $departamento
        ];

       
        return view('provincia', compact('provincia', 'catalogs'));
    }
}