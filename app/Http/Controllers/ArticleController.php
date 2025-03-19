<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Catalog;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() {
        $articles = Article::select(['id','title','intro','slug','created_at'])->where('status', 1)->orderByDesc('created_at')->get(); 
        $catalogs = Catalog::all()->where('status', 1);
                    
        return view('blog', ['articles' => $articles, 'catalogs' => $catalogs]);
    }

    public function show(string $slug) {
        $article = Article::where('slug', $slug)->first();
        $articles = Article::select(['id','title','slug','created_at'])->where('status', 1)->orderByDesc('created_at')->take(4)->get();
        $catalogs = Catalog::all()->where('status', 1);
              
        return view('article', ['article' => $article, 'catalogs' => $catalogs, 'articles' => $articles]);
    }


}
