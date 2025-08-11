<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promotion;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    protected $repository;

    public function __construct(DataRepository $repository)
    {
        $this->repository = $repository;
    }
    
    private function normalize($string)
    {
        // Convierte a minúsculas y elimina diacríticos
        return strtolower(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $string)));
    }
    public function __invoke()
    {
        $searchTerm = $this->normalize(request('q'));

        $products = $this->repository->getActiveProducts()->filter(function ($product) use ($searchTerm) {
            return str_contains($this->normalize($product->name), $searchTerm)
                || ($product->category && str_contains($this->normalize($product->category->name), $searchTerm));
        })->values();

        $promotions = $this->repository->getAllPromotions()->filter(function ($promotion) use ($searchTerm) {
            $foundInPromotion = str_contains($this->normalize($promotion->name), $searchTerm);
            $foundInCategory = $promotion->details->contains(function ($detail) use ($searchTerm) {
                return $detail->product && $detail->product->category &&
                    str_contains($this->normalize($detail->product->category->name), $searchTerm);
            });
            return $foundInPromotion || $foundInCategory;
        })->values();

        return view('search', [
            'products' => $products,
            'promotions' => $promotions
        ]);
    }
}
