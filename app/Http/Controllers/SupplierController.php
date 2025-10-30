<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(Request $request): View
    {
        $suppliers = Supplier::all();

        return view('supplier.index', [
            'suppliers' => $suppliers,
        ]);
    }

    public function show(Request $request, Supplier $supplier): View
    {
        return view('supplier.show', [
            'supplier' => $supplier,
        ]);
    }
}
