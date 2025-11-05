@extends('components.layouts.app')

@section('content')
<div class="bg-background text-foreground min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><span aria-current="page">Suppliers</span></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Page Header -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Browse Suppliers</h1>
            <p class="text-muted-foreground text-lg">Discover trusted industrial suppliers with verified reviews from real businesses</p>
        </div>
    </div>

    <!-- Search Section -->
    <div class="bg-secondary/20 border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <form x-target="js-results" action="{{ route('suppliers.index') }}" method="GET">
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="uk-inline flex-1">
                        <span class="uk-form-icon">
                            <uk-icon icon="search"></uk-icon>
                        </span>
                        <input
                            type="search"
                            role="search"
                            name="search"
                            class="uk-input uk-form-large w-full"
                            placeholder="Search by supplier name or domain..."
                            value="{{ request('search') }}"
                            aria-label="Search suppliers"
                        />
                    </div>
                    <button type="submit" class="uk-btn uk-btn-primary uk-btn-large">
                        <uk-icon icon="search"></uk-icon>
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="js-results" class="max-w-7xl mx-auto px-6 py-8 scroll-mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Filters Sidebar -->
            <aside class="lg:col-span-1">
                <div class="uk-card uk-card-default uk-card-body sticky top-20">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <uk-icon icon="settings"></uk-icon>
                        Filters
                    </h2>

                    <div class="space-y-6">
                        <!-- Country Filter -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Country</label>
                            <select class="uk-select w-full">
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
                            <select class="uk-select w-full">
                                <option>Any Rating</option>
                                <option>⭐ 4+ Stars</option>
                                <option>⭐ 3+ Stars</option>
                                <option>⭐ 2+ Stars</option>
                            </select>
                        </div>

                        <!-- Review Count -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Minimum Reviews</label>
                            <select class="uk-select w-full">
                                <option>Any Amount</option>
                                <option>10+ Reviews</option>
                                <option>25+ Reviews</option>
                                <option>50+ Reviews</option>
                            </select>
                        </div>

                        <!-- Sort By -->
                        <div>
                            <label class="block text-sm font-semibold mb-3">Sort By</label>
                            <select class="uk-select w-full">
                                <option>Relevance</option>
                                <option>Highest Rating</option>
                                <option>Most Reviews</option>
                                <option>Name (A-Z)</option>
                                <option>Name (Z-A)</option>
                            </select>
                        </div>

                        <div class="pt-4 border-t border-border">
                            <button type="button" class="uk-btn uk-btn-default uk-btn-small w-full">
                                <uk-icon icon="refresh-ccw"></uk-icon>
                                Reset Filters
                            </button>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Results Summary -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
                    <p class="text-muted-foreground">
                        Showing <span class="font-semibold text-foreground">{{ $suppliers->firstItem() ?? 0 }}-{{ $suppliers->lastItem() ?? 0 }}</span> of
                        <span class="font-semibold text-foreground">{{ $suppliers->total() ?? 0 }}</span> suppliers
                    </p>
                </div>

                <!-- Supplier Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    @forelse($suppliers ?? [] as $supplier)
                    <div class="uk-card uk-card-default uk-card-hover uk-card-body group transition-all">
                        <div class="flex flex-col h-full">
                            <!-- Header -->
                            <div class="flex items-start gap-4 mb-4">
                                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
                                    <uk-icon icon="building" class="text-primary" width="28" height="28"></uk-icon>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-bold text-lg mb-1 truncate group-hover:text-primary transition-colors">
                                        {{ $supplier->name }}
                                    </h3>
                                    <a href="https://{{ $supplier->domain }}" target="_blank" class="text-sm text-muted-foreground hover:text-primary flex items-center gap-1 truncate">
                                        <uk-icon icon="globe" width="14" height="14"></uk-icon>
                                        {{ $supplier->domain }}
                                    </a>
                                    @if($supplier->country)
                                    <p class="text-sm text-muted-foreground flex items-center gap-1 mt-1">
                                        <uk-icon icon="location" width="14" height="14"></uk-icon>
                                        {{ $supplier->country }}
                                    </p>
                                    @endif
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="flex items-center gap-3 mb-4 pb-4 border-b border-border">
                                @php
                                    $rating = $supplier->average_rating ?? 0;
                                    $fullStars = floor($rating);
                                    $hasHalf = ($rating - $fullStars) >= 0.5;
                                    $reviewCount = $supplier->reviews()->count();
                                @endphp
                                <div class="flex items-center gap-1">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $fullStars)
                                            <uk-icon icon="star" class="text-primary" width="18" height="18"></uk-icon>
                                        @elseif($i == $fullStars + 1 && $hasHalf)
                                            <uk-icon icon="star-half" class="text-primary" width="18" height="18"></uk-icon>
                                        @else
                                            <uk-icon icon="star" class="text-muted" width="18" height="18"></uk-icon>
                                        @endif
                                    @endfor
                                </div>
                                <span class="font-bold text-lg">{{ number_format($rating, 1) }}</span>
                                <span class="text-sm text-muted-foreground">({{ $reviewCount }} {{ Str::plural('review', $reviewCount) }})</span>
                            </div>

                            <!-- Description -->
                            @if($supplier->description)
                            <p class="text-sm text-muted-foreground leading-relaxed mb-4 flex-1">
                                {{ Str::limit($supplier->description, 120) }}
                            </p>
                            @endif

                            <!-- Action -->
                            <div class="mt-auto">
                                <a href="{{ route('suppliers.show', $supplier) }}" class="uk-btn uk-btn-primary uk-btn-small w-full group-hover:shadow-md transition-shadow">
                                    View Profile
                                    <uk-icon icon="arrow-right" class="ml-2" width="16" height="16"></uk-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full">
                        <div class="uk-card uk-card-default uk-card-body text-center py-12 flex flex-col items-center justify-center">
                            <uk-icon icon="search" class="text-muted-foreground mb-4" width="48" height="48"></uk-icon>
                            <h3 class="text-xl font-semibold mb-2">No Suppliers Found</h3>
                            <p class="text-muted-foreground mb-6">Try adjusting your search or filters to find what you're looking for.</p>
                            <a href="{{ route('suppliers.index') }}" class="uk-btn uk-btn-default">
                                Clear Search
                            </a>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if ($suppliers->hasPages())
                <nav class="mt-8" aria-label="Pagination">
                    <ul class="uk-pgn uk-pgn-default justify-center">
                        @if ($suppliers->onFirstPage())
                        <li class="uk-disabled">
                            <span>
                                <span data-uk-pgn-previous></span>
                            </span>
                        </li>
                        @else
                        <li>
                            <a x-target="js-results" @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })" href="{{ $suppliers->previousPageUrl() }}">
                                <span data-uk-pgn-previous></span>
                            </a>
                        </li>
                        @endif

                        @foreach (range(1, $suppliers->lastPage()) as $page)
                            @if ($page == $suppliers->currentPage())
                            <li>
                                <span class="uk-active" aria-current="page">{{ $page }}</span>
                            </li>
                            @elseif ($page == 1 || $page == $suppliers->lastPage() || abs($page - $suppliers->currentPage()) <= 2)
                            <li>
                                <a x-target="js-results" @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })" href="{{ $suppliers->url($page) }}">
                                    {{ $page }}
                                </a>
                            </li>
                            @elseif (abs($page - $suppliers->currentPage()) == 3)
                            <li class="uk-disabled"><span>...</span></li>
                            @endif
                        @endforeach

                        @if ($suppliers->hasMorePages())
                        <li>
                            <a x-target="js-results" @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })" href="{{ $suppliers->nextPageUrl() }}">
                                <span data-uk-pgn-next></span>
                            </a>
                        </li>
                        @else
                        <li class="uk-disabled">
                            <span>
                                <span data-uk-pgn-next></span>
                            </span>
                        </li>
                        @endif
                    </ul>
                </nav>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
