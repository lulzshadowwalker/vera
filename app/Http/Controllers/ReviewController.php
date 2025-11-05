<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewStoreRequest;
use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function create(Supplier $supplier): View|RedirectResponse
    {
        $existingReview = Review::where('user_id', Auth::id())
            ->where('reviewed_supplier_id', $supplier->id)
            ->exists();

        if ($existingReview) {
            return redirect()
                ->route('suppliers.show', $supplier)
                ->with(
                    'warning',
                    'You have already submitted a review for this supplier.',
                );
        }

        return view('review.create', ['supplier' => $supplier]);
    }

    public function store(ReviewStoreRequest $request): RedirectResponse
    {
        $existingReview = Review::where('user_id', $request->user_id)
            ->where('reviewed_supplier_id', $request->reviewed_supplier_id)
            ->exists();

        if ($existingReview) {
            $supplier = Supplier::find($request->reviewed_supplier_id);

            return redirect()
                ->route('suppliers.show', $supplier)
                ->with(
                    'error',
                    'You have already submitted a review for this supplier.',
                );
        }

        Review::create($request->validated());

        $supplier = Supplier::find($request->reviewed_supplier_id);

        return redirect()->route('suppliers.show', $supplier);
    }

    public function show(Request $request, Review $review): View
    {
        $review->load(['reviewedSupplier', 'user']);

        return view('review.show', [
            'review' => $review,
        ]);
    }
}
