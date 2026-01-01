<?php

namespace App\Http\Controllers;

use App\Contracts\ProfanityFilter;
use App\Http\Requests\ReviewStoreRequest;
use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function __construct(private ProfanityFilter $profanityFilter)
    {
        //
    }

    public function create(Supplier $supplier): View|RedirectResponse
    {
        if (Auth::user()->supplier_id === $supplier->id) {
            return redirect()
                ->route('suppliers.show', $supplier)
                ->with(
                    'warning',
                    'You cannot review your own supplier.',
                );
        }

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

        // Check if we're returning to this page after validation failed
        $oldComment = old('comment');

        if ($oldComment) {
            // Blur offensive words using your profanity filter
            $blurredComment = $this->profanityFilter->filter($oldComment);

            // Replace the old input in the session (so Blade old('comment') works)
            session()->flashInput(
                array_merge(old(), ['comment' => $blurredComment]),
            );
        }

        return view('review.create', ['supplier' => $supplier]);
    }

    public function store(ReviewStoreRequest $request): RedirectResponse
    {
        $requestData = $request->all();

        // Check for profanity and restrict submission
        if (
            isset($requestData['comment']) &&
            $this->profanityFilter->hasProfanity($requestData['comment'])
        ) {
            $requestData['comment'] = $this->profanityFilter->filter(
                $requestData['comment'],
            );

            return redirect()
                ->back()
                ->withInput($requestData)
                ->withErrors([
                    'comment' => 'Your comment contains offensive language. Please review the masked words and modify accordingly.',
                ]);
        }

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
