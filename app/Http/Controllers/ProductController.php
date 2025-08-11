<?php

namespace App\Http\Controllers;

use App\Repositories\DataRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(DataRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->getActiveProducts(); // Desde caché
        $catalogs = $this->repository->getActiveCatalogs(); // Desde caché

        return view('products.index', [
            'products' => $products,
            'catalogs' => $catalogs
        ]);
    }

    public function show(string $slug)
    {
        $product = $this->repository->getActiveProducts()->firstWhere('slug', $slug);

        if (!$product) {
            return abort(404, 'Producto no encontrado');
        }

        $products = $this->repository->getActiveProducts(8)->shuffle();

        return view('products.show', [
            'product' => $product,
            'products' => $products
        ]);
    }
}
