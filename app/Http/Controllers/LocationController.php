<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Repositories\DataRepository;

class LocationController extends Controller
{
    //
    protected $locations;
    protected $repository;

    public function __construct(DataRepository $repository)
    {
        $this->repository = $repository;
    }

   /**
     * Muestra la página de un departamento con sus provincias.
     */

     private function getDepartamento($slug)
     {
        $locations = config('locations.departamentos');
        $departamentoEncontrado = collect($locations)->firstWhere('slug', $slug);
    
        if (!$departamentoEncontrado) {
            abort(404);
        }
    
        return (object) [
            'nombre' => array_search($departamentoEncontrado, $locations),
            'slug' => $departamentoEncontrado['slug'],
            'provincias' => collect($departamentoEncontrado['provincias'])->map(function ($provincia) {
                return (object) $provincia;
            })
        ];
     }

     public function departamento($slug)
     {
        $catalogs = $this->repository->getActiveCatalogs();
        $departamento = $this->getDepartamento($slug);
    
        return view('departamento', compact('departamento', 'catalogs'));
    }  

    /**
     * Muestra la página de una provincia dentro de un departamento.
     */
    public function provincia($departamentoSlug, $provinciaSlug)
    {
        $catalogs = $this->repository->getActiveCatalogs();
        $departamento = $this->getDepartamento($departamentoSlug);
    
        $provinciaEncontrada = $departamento->provincias->firstWhere('slug', $provinciaSlug);
    
        if (!$provinciaEncontrada) {
            abort(404);
        }
    
        $provincia = (object) [
            'nombre' => $provinciaEncontrada->nombre,
            'slug' => $provinciaEncontrada->slug,
            'departamento' => $departamento
        ];
    
        return view('provincia', compact('provincia', 'catalogs'));
    }
}