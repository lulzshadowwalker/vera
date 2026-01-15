<?php

namespace App\Observers;

use App\Models\Supplier;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SupplierObserver
{
    public function creating(Supplier $supplier)
    {
        $baseSlug = Str::slug(str_replace('.', '-', $supplier->domain));
        $slug = $baseSlug;
        $count = 1;
        while (Supplier::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$count;
            $count++;
        }
        $supplier->slug = $slug;
    }

    public function created(Supplier $supplier): void
    {
        Cache::forget('stats.suppliers_count');
    }

    public function deleted(Supplier $supplier): void
    {
        Cache::forget('stats.suppliers_count');
    }
}
