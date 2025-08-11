<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Promotion;
use App\Repositories\DataRepository;
use App\Services\ModelCacheService;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected $repository;

    public function __construct(DataRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(string $catalogo_slug)
    {
        // Cachear promociones filtradas por catálogo (clave única por slug)
        $promotions = $this->repository->getPromotionsByCatalogSlug($catalogo_slug);

        $catalogs = $this->repository->getActiveCatalogs();

        return view('promotions.index', [
            'promotions' => $promotions,
            'catalogs' => $catalogs
        ]);
    }

    public function show(string $catalogo_slug, string $slug)
    {
        // Cachear todas las promociones y buscar la que corresponde
        $promotion = $this->repository->getActivePromotionBySlug($slug);

        // Promociones aleatorias (puedes cachear todas y barajar en memoria)
        $promotions = $this->repository->getAllPromotions()->take(8);
        if (!$promotion) {
            return abort(404, 'Promoción no encontrada');
        }

        return view('promotions.show', [
            'promotion' => $promotion,
            'promotions' => $promotions
        ]);
    }
}
