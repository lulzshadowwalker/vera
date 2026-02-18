<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $suppliersCount = Cache::remember('stats.suppliers_count', now()->addDay(), function () {
            return Supplier::query()->has('users')->count();
        });

        $assessedCompaniesCount = Cache::remember(
            'stats.assessed_companies_count',
            now()->addDay(),
            function () {
                return Review::query()->distinct('reviewed_supplier_id')->count('reviewed_supplier_id');
            },
        );

        $reviewsCount = Cache::remember('stats.reviews_count', now()->addDay(), function () {
            return Review::count();
        });

        $usersCount = Cache::remember('stats.users_count', now()->addDay(), function () {
            return User::count();
        });

        return view('home.index', [
            'suppliersCount' => 10_000 + $suppliersCount,
            'assessedCompaniesCount' => 7_500 + $assessedCompaniesCount,
            'reviewsCount' => 30_000 + $reviewsCount,
            'usersCount' => 5_000 + $usersCount,
        ]);
    }
}
