<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Services\DomainNormalizationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewInitiationController extends Controller
{
    public function __construct(
        private readonly DomainNormalizationService $domainNormalizationService
    ) {}

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'domain' => ['required', 'string'],
        ]);

        $domain = $this->domainNormalizationService->normalize($request->input('domain'));

        if (! $domain) {
            return back()->withErrors(['domain' => 'Please enter a valid domain name.']);
        }

        $supplier = Supplier::firstOrCreate(
            ['domain' => $domain],
            ['name' => $domain] // Default name to domain if creating new
        );

        return redirect()->route('suppliers.reviews.create', $supplier);
    }
}
