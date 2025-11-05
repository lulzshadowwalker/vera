@extends('components.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8 bg-background text-foreground">
    <!-- Supplier Header -->
    <div class="uk-card uk-card-default uk-card-body mb-8">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="flex items-center gap-6">
                <div class="w-20 h-20 bg-muted rounded-lg flex items-center justify-center">
                    <uk-icon icon="building" class="text-4xl text-muted-foreground"></uk-icon>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-foreground">{{ $supplier->name }}</h1>
                    <a href="https://{{ $supplier->domain }}" class="text-primary hover:underline flex items-center gap-1">
                        <uk-icon icon="globe" class="text-muted-foreground"></uk-icon>
                        {{ $supplier->domain }}
                    </a>
                    <p class="text-muted-foreground flex items-center gap-1">
                        <uk-icon icon="map-pin" class="text-muted-foreground"></uk-icon>
                        {{ $supplier->country }}
                    </p>
                </div>
            </div>
            <a href="{{ route('reviews.create', ['supplier' => $supplier]) }}" class="uk-btn uk-btn-primary uk-btn-lg">Write a Review</a>
        </div>
    </div>

    <!-- Rating Summary -->
    <div class="uk-card uk-card-default uk-card-body mb-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-center md:text-left">
                <div class="text-5xl font-bold text-primary mb-2">4.5</div>
                <div class="flex justify-center md:justify-start mb-2">
                    <uk-icon icon="star" class="text-primary"></uk-icon>
                    <uk-icon icon="star" class="text-primary"></uk-icon>
                    <uk-icon icon="star" class="text-primary"></uk-icon>
                    <uk-icon icon="star" class="text-primary"></uk-icon>
                    <uk-icon icon="star_half" class="text-primary"></uk-icon>
                </div>
                <p class="text-muted-foreground">Based on {{ $supplier->reviews()->count() }} reviews</p>
            </div>
            <div class="flex-1 max-w-md">
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <span class="text-sm w-8">5</span>
                        <div class="flex-1 bg-muted rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <span class="text-sm">40%</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm w-8">4</span>
                        <div class="flex-1 bg-muted rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 35%"></div>
                        </div>
                        <span class="text-sm">35%</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm w-8">3</span>
                        <div class="flex-1 bg-muted rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 15%"></div>
                        </div>
                        <span class="text-sm">15%</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm w-8">2</span>
                        <div class="flex-1 bg-muted rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 7%"></div>
                        </div>
                        <span class="text-sm">7%</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm w-8">1</span>
                        <div class="flex-1 bg-muted rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 3%"></div>
                        </div>
                        <span class="text-sm">3%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div>
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Reviews</h2>
            <div class="flex gap-2">
                <select class="uk-select">
                    <option>Sort by: Newest</option>
                    <option>Sort by: Highest Rating</option>
                    <option>Sort by: Lowest Rating</option>
                </select>
            </div>
        </div>

        <ul id="js-reviews" x-merge="append" class="space-y-6">
            @foreach($reviews ?? [] as $review)
            <li class="uk-card uk-card-default uk-card-body">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/4 flex flex-col items-center gap-4">
                        @php
                            $avgScore = ($review->cost + $review->speed + $review->communication + $review->reliability + $review->quality + $review->support + $review->flexibility + $review->innovation + $review->value + $review->timeliness) / 10;
                            $colorClass = $avgScore >= 8 ? 'bg-accent text-accent-foreground border-accent' : ($avgScore >= 6 ? 'bg-muted text-muted-foreground border-muted' : 'bg-destructive text-destructive-foreground border-destructive');
                        @endphp
                        <div class="w-20 h-20 {{ $colorClass }} border-4 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-3xl font-bold">{{ number_format($avgScore, 1) }}</span>
                        </div>
                        <div class="flex items-center gap-2 {{ $review->deal_again ? 'text-primary' : 'text-destructive' }}">
                            <uk-icon icon="{{ $review->deal_again ? 'thumbs-up' : 'thumbs-down' }}" class="text-lg"></uk-icon>
                            <span class="text-sm font-medium">{{ $review->deal_again ? 'Would deal again' : 'Would not deal again' }}</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-semibold text-lg">{{ $review->comment ? Str::limit($review->comment, 50) : 'Review' }}</h3>
                                <p class="text-sm text-muted-foreground">{{ $review->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-sm">{{ $review->anonymous ? 'Anonymous' : $review->user->first_name . ' ' . substr($review->user->first_name, 0, 1) . '.' }}</span>
                                <span class="text-sm text-muted-foreground">{{ $review->country }}</span>
                                <a href="{{ route('reviews.show', $review) }}" class="uk-btn uk-btn-primary uk-btn-small" title="Share this review">
                                    <uk-icon icon="share" class="text-sm"></uk-icon>
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-8 md:gap-x-12 mb-4 text-sm">
                            <div class="flex justify-between items-center">
                                <span>Cost</span>
                                <span class="uk-badge uk-badge-primary">{{ $review->cost }}/10</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Speed</span>
                                <span class="uk-badge uk-badge-primary">{{ $review->speed }}/10</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Communication</span>
                                <span class="uk-badge uk-badge-primary">{{ $review->communication }}/10</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Reliability</span>
                                <span class="uk-badge uk-badge-primary">{{ $review->reliability }}/10</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Quality</span>
                                <span class="uk-badge uk-badge-primary">{{ $review->quality }}/10</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Support</span>
                                <span class="uk-badge uk-badge-primary">{{ $review->support }}/10</span>
                            </div>
                        </div>
                        @if($review->comment)
                        <blockquote class="border-l-4 border-border pl-4 italic text-muted-foreground">
                            {{ $review->comment }}
                        </blockquote>
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        <div id="js-pagination" x-init x-intersect="$ajax('{{ route("suppliers.show", [ 'supplier' => request()->supplier, 'page' => (int) request()->input('page', 0) + 1 ]) }}', { target: 'js-reviews js-pagination' })">
        </div>
    </div>
</div>
@endsection
