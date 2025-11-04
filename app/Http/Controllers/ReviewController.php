<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewStoreRequest;
use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function create(Supplier $supplier): View
    {
        return view('review.create', ['supplier' => $supplier]);
    }

    public function store(ReviewStoreRequest $request): RedirectResponse
    {
        Review::create($request->validated());

        return redirect()->route('reviews.index');
    }

    public function show(Request $request, Review $review): View
    {
        return view('review.show', [
            'review' => $review,
        ]);
    }
}
