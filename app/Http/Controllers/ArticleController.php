<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Catalog;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() {
        $articles = Article::select(['id','title','intro','slug','created_at'])->where('status', 1)->get(); 
        $catalogs = Catalog::all()->where('status', 1);
            
        $tags = Tag::inRandomOrder()->get();      
        
        return view('blog', ['articles' => $articles, 'tags' => $tags, 'catalogs' => $catalogs]);
    }

    public function show(string $slug) {
        $article = Article::where('slug', $slug)->first();
        $articles = Article::select(['id','title','slug','created_at'])->where('status', 1)->orderByDesc('created_at')->get(3);
        $catalogs = Catalog::all()->where('status', 1);
        $tags = Tag::inRandomOrder()->get();
        
        return view('article', ['article' => $article, 'tags' => $tags, 'catalogs' => $catalogs, 'articles' => $articles]);
    }


}
