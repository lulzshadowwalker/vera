<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(Request $request): View
    {
        $query = $request->get('search');

        if ($query) {
            $suppliers = Supplier::search($query)->paginate(12);
        } else {
            $suppliers = Supplier::paginate(12);
        }

        return view('supplier.index', [
            'suppliers' => $suppliers,
        ]);
    }

    public function show(Request $request, Supplier $supplier): View
    {
        // TODO: We need to handle infinite scroll pagination
        $reviews = $supplier->reviews()->get();

        return view('supplier.show', [
            'supplier' => $supplier,
            'reviews' => $reviews,
        ]);
    }
}
