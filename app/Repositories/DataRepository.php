<?php
namespace App\Repositories;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Testimonial;
use App\Models\Leader;
use App\Models\Faq;
use App\Models\Tag;
use App\Models\Article;
use App\Services\ModelCacheService;

class DataRepository
{
    protected $cacheService;

    public function __construct(ModelCacheService $cacheService)
    {
        $this->cacheService = $cacheService;
    }

    // Catálogos
    public function getActiveCatalogs()
    {
        return $this->cacheService->getCached(
            Catalog::class,
            [
                'promotions',
                'promotions.details',
                'promotions.details.product.tags',
                'promotions.details.product.images',
                'images'
            ],
            [['status', 1]],
            'catalogs',
            60*24*7
        );
    }

    public function getCatalogBySlug($slug)
    {
        return $this->getActiveCatalogs()->firstWhere('slug', $slug);
    }

    // Promociones
    public function getPromotionsByCatalogSlug($slug)
    {
        $catalog = $this->getCatalogBySlug($slug);
        return $catalog ? $catalog->promotions : collect();
    }

    // Productos
    public function getActiveProducts($limit = null)
    {
        $products = $this->cacheService->getCached(
            Product::class,
            ['category', 'tags', 'images'],
            [['status', 1]],
            'products',
            60*24*7
        );
        return $limit ? $products->take($limit) : $products;
    }

    // Testimonios
    public function getActiveTestimonials($cacheKey = 'testimonials', $minutes = 60*24*7)
    {
        return $this->cacheService->getCached(
            Testimonial::class,
            [],
            [['status', 1]],
            $cacheKey,
            $minutes
        );
    }

    // Líderes
    public function getActiveLeaders()
    {
        return $this->cacheService->getCached(
            Leader::class,
            [],
            [['status', 1]],
            'leaders',
            60*24*7
        );
    }

    // FAQs
    public function getFaqs($ids = null)
    {
        $faqs = $this->cacheService->getCached(
            Faq::class,
            [],
            [],
            'faqs',
            60*24*7
        );
        return $ids ? $faqs->whereIn('id', $ids) : $faqs;
    }

    // Tags
    public function getTags($shuffle = false)
    {
        $tags = $this->cacheService->getCached(
            Tag::class,
            [],
            [],
            'tags',
            60*24*7
        );
        return $shuffle ? $tags->shuffle() : $tags;
    }

    // Artículos
    public function getArticles($limit = null)
    {
        $articles = $this->cacheService->getCached(
            Article::class,
            ['images'],
            [['status', 1]],
            'articles',
            60*24*2
        )->sortByDesc('created_at')->values();
        return $limit ? $articles->take($limit) : $articles;
    }

    // Obtiene una promoción activa por su slug
    public function getActivePromotionBySlug($slug)
    {
        return $this->cacheService->getCached(
            Promotion::class,
            ['details', 'details.product.tags', 'catalog', 'images'],
            [['status', 1]],
            [['slug', $slug]],
            'promotion.$slug',
            60*24 // 1 día
        )->first();
    }

    // Obtiene todas las promociones a partir de los catálogos cacheados
    public function getAllPromotions()
    {
        $catalogs = $this->getActiveCatalogs();
        
        // Extrae todas las promociones de todos los catálogos y las aplana en una sola colección
        $promotions = $catalogs->pluck('promotions')->flatten(1);

        // Opcional: elimina duplicados por id, en caso de que una promoción esté en varios catálogos
        $promotions = $promotions->unique('id')->values();

        return $promotions;
    }
}