@extends('components.layouts.app')

@section('content')
<div class="px-6 py-8 bg-background text-foreground">
    <!-- Page Header -->
    <div class="max-w-7xl mx-auto mb-8">
        <h1 class="text-3xl font-bold mb-4">Browse Suppliers</h1>
        <!-- Search Bar -->
        <form x-target="js-results" action="{{ route('suppliers.index') }}" method="GET" class="max-w-2xl">
            <div class="flex">
                <div class="uk-inline flex-1">
                    <span class="uk-form-icon">
                        <uk-icon icon="search"></uk-icon>
                    </span>
                    <input type="search" role="search" name="search" class="uk-input uk-form-large" placeholder="Search suppliers by name or domain..." value="{{ request('search') }}" />
                </div>
                <button type="submit" class="uk-btn uk-btn-primary uk-form-large ml-2">Search</button>
            </div>
        </form>
    </div>

    <div id="js-results" class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8 scroll-mt-20">
        <!-- Filters Sidebar -->
        <aside class="lg:col-span-1">
            <div class="bg-card text-card-foreground rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Filters</h2>
                <div class="space-y-4">
                    <!-- Country Filter -->
                    <div>
                        <label class="block text-sm font-medium text-neutral-500 dark:text-neutral-400 mb-2">Country</label>
                        <select class="uk-select w-full">
                            <option>All Countries</option>
                            <option>United States</option>
                            <option>Germany</option>
                            <option>China</option>
                            <option>Japan</option>
                        </select>
                    </div>
                    <!-- Rating Filter -->
                    <div>
                        <label class="block text-sm font-medium text-neutral-500 dark:text-neutral-400 mb-2">Minimum Rating</label>
                        <select class="uk-select w-full">
                            <option>Any Rating</option>
                            <option>4 Stars & Up</option>
                            <option>3 Stars & Up</option>
                            <option>2 Stars & Up</option>
                        </select>
                    </div>
                    <!-- Sort By -->
                    <div>
                        <label class="block text-sm font-medium text-neutral-500 dark:text-neutral-400 mb-2">Sort By</label>
                        <select class="uk-select w-full">
                            <option>Relevance</option>
                            <option>Highest Rating</option>
                            <option>Most Reviews</option>
                            <option>Name (A-Z)</option>
                        </select>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="lg:col-span-3">
            <!-- Results Summary -->
            <div class="flex justify-between items-center mb-6">
                <p class="text-muted-foreground">Showing {{ $suppliers->firstItem() }}-{{ $suppliers->lastItem() }} of {{ $suppliers->total() }} suppliers</p>
                <div class="flex items-center gap-2">
                    <label class="text-sm font-medium text-muted-foreground">Sort:</label>
                    <select class="uk-select">
                        <option>Relevance</option>
                        <option>Rating</option>
                        <option>Name</option>
                    </select>
                </div>
            </div>

            <!-- Supplier Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach($suppliers ?? [] as $supplier)
                <div class="uk-card uk-card-default uk-card-body flex flex-col">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                            <uk-icon icon="building" class="text-gray-500"></uk-icon>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-lg">{{ $supplier->name }}</h3>
                            <p class="text-sm text-gray-500 flex items-center gap-1">
                                <uk-icon icon="globe" class="text-gray-400"></uk-icon>
                                {{ $supplier->domain }}
                            </p>
                            <p class="text-sm text-gray-500 flex items-center gap-1">
                                <uk-icon icon="map-pin" class="text-gray-400"></uk-icon>
                                {{ $supplier->country }}
                            </p>
                            <p class="text-sm text-gray-600">{{ $supplier->description }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        @php
                            $rating = $supplier->average_rating;
                            $fullStars = floor($rating);
                            $hasHalf = ($rating - $fullStars) >= 0.5;
                        @endphp
                        <div class="flex">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $fullStars)
                                    <uk-icon icon="star" class="text-yellow-400"></uk-icon>
                                @elseif($i == $fullStars + 1 && $hasHalf)
                                    <uk-icon icon="star_half" class="text-yellow-400"></uk-icon>
                                @else
                                    <uk-icon icon="star" class="text-gray-300"></uk-icon>
                                @endif
                            @endfor
                        </div>
                        <span class="font-bold">{{ number_format($rating, 1) }}</span>
                        <span class="text-gray-500">({{ $supplier->reviews()->count() }} reviews)</span>
                    </div>
                    <a href="{{ route('suppliers.show', $supplier) }}" class="uk-btn uk-btn-primary uk-btn-small w-full">View Profile</a>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($suppliers->hasPages())
            <nav class="flex justify-center mt-8" aria-label="Pagination">
                <ul class="uk-pgn uk-pgn-default">
                    @if ($suppliers->onFirstPage())
                    <li class="uk-disabled">
                        <span data-uk-pgn-previous></span>
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
                    @else
                    <li>
                        <a x-target="js-results" @ajax:success="document.getElementById('js-results').scrollIntoView({ behavior: 'smooth', block: 'start' })" href="{{ $suppliers->url($page) }}">{{ $page }}</a>
                    </li>
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
                        <span data-uk-pgn-next></span>
                    </li>
                    @endif
                </ul>
            </nav>
            @endif
        </div>
    </div>
</div>
@endsection
