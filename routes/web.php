<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Response;

Route::get("/", [RouteController::class, 'index'])->name('inicio');

Route::get("/buscar", SearchController::class)->name('buscar');
Route::get("/productos", [ProductController::class, 'index'])->name('productos.index');
Route::get("/productos/{slug}", [ProductController::class, 'show'])->name('productos.mostrar');
Route::get("/promociones/{slug}", [PromotionController::class, 'index'])->name('promociones.index');
Route::get("/promociones/{catalogo}/{slug}", [PromotionController::class, 'show'])->name('promociones.mostrar');
Route::get("/blog", [ArticleController::class, 'index'])->name('blog.index');
Route::get("/blog/articulos/{slug}", [ArticleController::class, 'show'])->name('blog.articulos.mostrar');
Route::get("/nosotros", [RouteController::class, 'about'])->name('nosotros');
Route::get("/preguntas-frecuentes", [RouteController::class, 'faq'])->name('faq');
Route::get("/contacto", [RouteController::class, 'contact'])->name('contacto');
Route::post("/contacto", [ContactController::class, 'store'])->name('contacto.enviar');


Route::get('/whatsapp/{id}/{producto?}', [RouteController::class, 'whatsapp'])->name('whatsapp');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
    

/* Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get("/", [RouteController::class, 'index'])->name('dashboard');
    Route::get("{any}", [RouteController::class, 'routes']);
}); */
