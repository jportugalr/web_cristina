<?php

namespace App\Http\Controllers;

use App\Repositories\DataRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $repository;

    public function __construct(DataRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index() {
        $articles = $this->repository->getArticles(); // Desde caché, ordenados por fecha
        $catalogs = $this->repository->getActiveCatalogs(); // Desde caché

        return view('blog', [
            'articles' => $articles,
            'catalogs' => $catalogs
        ]);
    }

    public function show(string $slug) {
        $article = $this->repository->getArticles()->firstWhere('slug', $slug);

        if (!$article) {
            return abort(404, 'Artículo no encontrado');
        }

        $articles = $this->repository->getArticles(4); // 4 artículos recientes
        $catalogs = $this->repository->getActiveCatalogs();

        return view('article', [
            'article' => $article,
            'catalogs' => $catalogs,
            'articles' => $articles
        ]);
    }
}
