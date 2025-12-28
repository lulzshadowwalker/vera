<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        $reviews = $user->reviews()
            ->with(['reviewedSupplier', 'reviewerSupplier'])
            ->latest()
            ->paginate(10);

        return view('profile.show', compact('user', 'reviews'));
    }
}
