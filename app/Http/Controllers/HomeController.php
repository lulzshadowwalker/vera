<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $suppliersCount = Cache::remember('stats.suppliers_count', now()->addDay(), function () {
            return Supplier::count();
        });

        $reviewsCount = Cache::remember('stats.reviews_count', now()->addDay(), function () {
            return Review::count();
        });

        return view('home.index', [
            'suppliersCount' => 1000 + $suppliersCount,
            'reviewsCount' => 30000 + $reviewsCount,
        ]);
    }
}
