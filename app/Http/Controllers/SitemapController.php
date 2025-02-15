<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Article;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['loc' => url('/productos'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => url('/promociones'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => url('/blog'), 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['loc' => url('/nosotros'), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => url('/contacto'), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => url('/preguntas-frecuentes'), 'priority' => '0.5', 'changefreq' => 'monthly'],
        ];

        // Agregar productos dinámicos
        $products = Product::where('status', 1)->get();
        foreach ($products as $product) {
            $urls[] = [
                'loc' => route('productos.mostrar', $product->slug),
                'priority' => '0.7',
                'changefreq' => 'monthly'
            ];
        }

        // Agregar promociones dinámicas
        $promotions = Promotion::where('status', 1)->get();
        foreach ($promotions as $promotion) {
            $urls[] = [
                'loc' => route('promociones.mostrar', [
                    'catalogo' => $promotion->catalog->slug,
                    'slug' => $promotion->slug
                ]),
                'priority' => '0.8',
                'changefreq' => 'monthly'
            ];
        }

        // Agregar artículos del blog dinámicos
        $articles = Article::where('status', 1)->get();
        foreach ($articles as $article) {
            $urls[] = [
                'loc' => route('blog.articulos.mostrar', $article->slug),
                'priority' => '0.6',
                'changefreq' => 'monthly'
            ];
        }

        // Agregar departamentos y provincias dinámicamente
        $locations = config('locations.departamentos');
        foreach ($locations as $departamento) {
            $urls[] = [
                'loc' => route('location.departamento', ['slug' => $departamento['slug']]),
                'priority' => '0.8',
                'changefreq' => 'monthly'
            ];
        
        // Provincias dentro del departamento
        foreach ($departamento['provincias'] as $provincia) {
            $urls[] = [
                'loc' => route('location.provincia', [
                    'departamentoSlug' => $departamento['slug'],
                    'provinciaSlug' => $provincia['slug']
                ]),
                'priority' => '0.7',
                'changefreq' => 'monthly'
            ];
        }
    }       

        return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
    }
}
