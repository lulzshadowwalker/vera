<?php

namespace App\Http\Controllers;

use App\Contracts\ProfanityFilter;
use App\Http\Requests\ReviewStoreRequest;
use App\Http\Requests\ReviewUpdateRequest;
use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function __construct(private ProfanityFilter $profanityFilter)
    {
        //
    }

    public function create(Supplier $supplier): View|RedirectResponse
    {
        $response = Gate::inspect('create', [Review::class, $supplier]);

        if ($response->denied()) {
            return redirect()
                ->route('suppliers.show', $supplier)
                ->with('warning', $response->message());
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

        $supplier = Supplier::findOrFail($request->reviewed_supplier_id);

        $response = Gate::inspect('create', [Review::class, $supplier]);

        if ($response->denied()) {
            return redirect()
                ->route('suppliers.show', $supplier)
                ->with('error', $response->message());
        }

        Review::create($request->validated());

        return redirect()->route('suppliers.show', $supplier);
    }

    public function edit(Review $review): View
    {
        Gate::authorize('update', $review);

        $review->load(['reviewedSupplier']);

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

        return view('review.edit', ['review' => $review]);
    }

    public function update(
        ReviewUpdateRequest $request,
        Review $review,
    ): RedirectResponse {
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

        $review->update($request->validated());

        return redirect()->route('suppliers.show', $review->reviewedSupplier);
    }

    public function show(Request $request, Review $review): View
    {
        $review->load(['reviewedSupplier', 'user']);

        return view('review.show', [
            'review' => $review,
        ]);
    }
}
