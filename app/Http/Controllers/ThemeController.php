<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $currentTheme = session('theme', 'light');
        $newTheme = $currentTheme === 'dark' ? 'light' : 'dark';

        session(['theme' => $newTheme]);

        return response()->json(['theme' => $newTheme]);
    }
}
