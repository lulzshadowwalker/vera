@extends('components.layouts.app')

@section('content')
    <div class="bg-background text-foreground min-h-screen">
        <!-- Breadcrumb -->
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-7xl px-6 py-4">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="separator">/</li>
                        <li><span aria-current="page">Suppliers</span></li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Header -->
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-7xl px-6 py-8">
                <h1 class="mb-2 text-3xl font-bold md:text-4xl">Browse Suppliers</h1>
                <p class="text-muted-foreground text-lg">Discover trusted industrial suppliers with verified reviews from
                    real businesses</p>
            </div>
        </div>

        <!-- Search Section -->
        <div class="bg-secondary/20 border-border border-b">
            <div class="mx-auto max-w-7xl px-6 py-6">
                <form x-target="js-results"
                      action="{{ route('suppliers.index') }}"
                      method="GET">
                    <div class="flex flex-col gap-3 md:flex-row">
                        <div class="relative flex-1">
                            <span class="text-muted-foreground absolute left-3 top-1/2 -translate-y-1/2">
                                <i class="hgi hgi-stroke hgi-search-01"></i>
                            </span>
                            <input type="search"
                                   role="search"
                                   name="search"
                                   class="input input-lg w-full pl-9"
                                   placeholder="Search by supplier name or domain..."
                                   value="{{ request('search') }}"
                                   aria-label="Search suppliers" />
                        </div>
                        <button type="submit"
                                class="btn btn-primary btn-lg">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div id="js-results"
             class="mx-auto max-w-7xl scroll-mt-20 px-6 py-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
                {{-- <!-- Filters Sidebar -->
            <aside class="lg:col-span-1">
                <div class="card p-6 sticky top-20">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <!-- TODO: ICON: settings -->
                        Filters
                    </h2>

                    <div class="space-y-6">
                        <!-- Country Filter -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Country</label>
                            <select class="select w-full">
                                <option>All Countries</option>
                                <option>United States</option>
                                <option>Germany</option>
                                <option>China</option>
                                <option>Japan</option>
                                <option>Jordan</option>
                            </select>
                        </div>

                        <!-- Rating Filter -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Minimum Rating</label>
                            <select class="select w-full">
                                <option>Any Rating</option>
                                <option>⭐ 4+ Stars</option>
                                <option>⭐ 3+ Stars</option>
                                <option>⭐ 2+ Stars</option>
                            </select>
                        </div>

                        <!-- Review Count -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Minimum Reviews</label>
                            <select class="select w-full">
                                <option>Any Amount</option>
                                <option>10+ Reviews</option>
                                <option>25+ Reviews</option>
                                <option>50+ Reviews</option>
                            </select>
                        </div>

                        <!-- Sort By -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Sort By</label>
                            <select class="select w-full">
                                <option>Relevance</option>
                                <option>Highest Rating</option>
                                <option>Most Reviews</option>
                                <option>Name (A-Z)</option>
                                <option>Name (Z-A)</option>
                            </select>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <button type="button" class="btn btn-secondary w-full">
                                <!-- TODO: ICON: refresh-ccw -->
                                Reset Filters
                            </button>
                        </div>
                    </div>
                </div>
            </aside> --}}

                <!-- Main Content -->
                {{-- <div class="lg:col-span-3"> --}}
                <div class="lg:col-span-4">
                    <!-- Results Summary -->
                    <div class="mb-6 flex flex-col items-start justify-between gap-4 md:flex-row md:items-center">
                        <p class="text-muted-foreground">
                            Showing <span
                                  class="text-foreground font-semibold">{{ $suppliers->firstItem() ?? 0 }}-{{ $suppliers->lastItem() ?? 0 }}</span>
                            of
                            <span class="text-foreground font-semibold">{{ $suppliers->total() ?? 0 }}</span> suppliers
                        </p>
                    </div>

                    <!-- Supplier Cards Grid -->
                    <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-3">
                        @forelse($suppliers ?? [] as $supplier)
                            <div class="card group p-6 transition-all hover:shadow-lg">
                                <div class="flex h-full flex-col">
                                    <!-- Header -->
                                    <div class="mb-4 flex items-start gap-4">
                                        <div
                                             class="bg-primary/10 group-hover:bg-primary/20 flex h-14 w-14 shrink-0 items-center justify-center rounded-xl transition-colors">
                                            <i class="hgi hgi-stroke hgi-building-03 text-2xl"></i>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <h3
                                                class="group-hover:text-primary mb-1 truncate text-lg font-bold transition-colors">
                                                {{ $supplier->name }}
                                            </h3>
                                            <a href="https://{{ $supplier->domain }}"
                                               target="_blank"
                                               class="text-muted-foreground hover:text-primary flex items-center gap-1 truncate text-sm">
                                                <i class="hgi hgi-stroke hgi-globe-02"></i>
                                                {{ $supplier->domain }}
                                            </a>
                                            @if ($supplier->country)
                                                <p class="text-muted-foreground mt-1 flex items-center gap-1 text-sm">
                                                    <i class="hgi hgi-stroke hgi-location-03"></i>
                                                    {{ $supplier->country }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Rating -->
                                    <div class="border-border mb-4 flex items-center gap-3 border-b pb-4">
                                        @php
                                            $rating = $supplier->average_rating ?? 0;
                                            $fullStars = floor($rating);
                                            $hasHalf = $rating - $fullStars >= 0.5;
                                            $reviewCount = $supplier->reviews()->count();
                                        @endphp
                                        <div class="flex items-center gap-1">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $fullStars)
                                                    {{-- TODO: Better star icons setup --}}
                                                    <i class="hgi hgi-stroke hgi-star"></i>
                                                @elseif($i == $fullStars + 1 && $hasHalf)
                                                    <i class="hgi hgi-stroke hgi-star"></i>
                                                @else
                                                    <i class="hgi hgi-stroke hgi-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <span class="text-lg font-bold">{{ number_format($rating, 1) }}</span>
                                        <span class="text-muted-foreground text-sm">({{ $reviewCount }}
                                            {{ Str::plural('review', $reviewCount) }})</span>
                                    </div>

                                    <!-- Description -->
                                    @if ($supplier->description)
                                        <p class="text-muted-foreground mb-4 flex-1 text-sm leading-relaxed">
                                            {{ Str::limit($supplier->description, 120) }}
                                        </p>
                                    @endif

                                    <!-- Action -->
                                    <div class="mt-auto">
                                        <a href="{{ route('suppliers.show', $supplier) }}"
                                           class="btn btn-primary btn-sm w-full transition-shadow group-hover:shadow-md">
                                            View Profile
                                            <i class="hgi hgi-stroke hgi-arrow-right-02"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full">
                                <div
                                     class="border-border flex min-w-0 flex-1 flex-col items-center justify-center gap-6 text-balance rounded-lg border border-dashed p-6 text-center md:p-12">
                                    <header class="flex max-w-sm flex-col items-center gap-2 text-center">
                                        <div
                                             class="bg-secondary/20 text-foreground mb-2 flex size-10 shrink-0 items-center justify-center rounded-lg">
                                            <i class="hgi hgi-stroke hgi-search-01 text-xl"></i>
                                        </div>
                                        <h3 class="text-lg font-medium tracking-tight">No Suppliers Found</h3>
                                        <p class="text-muted-foreground text-sm/relaxed">
                                            Try adjusting your search or filters to find what you're looking for.
                                        </p>
                                    </header>
                                    <section
                                             class="flex w-full min-w-0 max-w-sm flex-col items-center gap-4 text-balance text-sm">
                                        <div class="flex gap-2">
                                            <a href="{{ route('suppliers.index') }}"
                                               class="btn btn-primary">
                                                Clear Search
                                            </a>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    @if ($suppliers->hasPages())
                        <nav role="navigation"
                             aria-label="pagination"
                             class="mx-auto mt-8 flex w-full justify-center">
                            <ul class="flex flex-row items-center gap-1">
                                {{-- Previous Page Link --}}
                                <li>
                                    @if ($suppliers->onFirstPage())
                                        <span class="btn-ghost opacity-50"
                                              aria-disabled="true">
                                            <i class="hgi hgi-stroke hgi-arrow-left-01"></i>
                                            Previous
                                        </span>
                                    @else
                                        <a href="{{ $suppliers->previousPageUrl() }}"
                                           class="btn-ghost"
                                           x-target="js-results"
                                           @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })"
                                           rel="prev">
                                            <i class="hgi hgi-stroke hgi-arrow-left-01"></i>
                                            Previous
                                        </a>
                                    @endif
                                </li>

                                {{-- Pagination Elements --}}
                                @foreach (range(1, $suppliers->lastPage()) as $page)
                                    @if ($page == $suppliers->currentPage())
                                        <li>
                                            <span class="btn-icon-outline"
                                                  aria-current="page">{{ $page }}</span>
                                        </li>
                                    @elseif ($page == 1 || $page == $suppliers->lastPage() || abs($page - $suppliers->currentPage()) <= 2)
                                        <li>
                                            <a href="{{ $suppliers->url($page) }}"
                                               class="btn-icon-ghost"
                                               x-target="js-results"
                                               @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @elseif (abs($page - $suppliers->currentPage()) == 3)
                                        <li>
                                            <div class="flex size-9 items-center justify-center">
                                                <i class="hgi hgi-stroke hgi-more-horizontal text-muted-foreground"></i>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                <li>
                                    @if ($suppliers->hasMorePages())
                                        <a href="{{ $suppliers->nextPageUrl() }}"
                                           class="btn-ghost"
                                           x-target="js-results"
                                           @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })"
                                           rel="next">
                                            Next
                                            <i class="hgi hgi-stroke hgi-arrow-right-01"></i>
                                        </a>
                                    @else
                                        <span class="btn-ghost opacity-50"
                                              aria-disabled="true">
                                            Next
                                            <i class="hgi hgi-stroke hgi-arrow-right-01"></i>
                                        </span>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
