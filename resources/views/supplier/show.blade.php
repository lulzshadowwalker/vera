@extends('components.layouts.app')

@section('content')
<div class="bg-background text-foreground min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
                    <li><span aria-current="page">{{ $supplier->name }}</span></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Supplier Header -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="flex items-start gap-6">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <uk-icon icon="building" class="text-primary" width="40" height="40"></uk-icon>
                    </div>
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">{{ $supplier->name }}</h1>
                        <div class="flex flex-wrap items-center gap-4 text-muted-foreground">
                            <a href="https://{{ $supplier->domain }}" target="_blank" rel="noopener" class="hover:text-primary flex items-center gap-1 transition-colors">
                                <uk-icon icon="globe" width="16" height="16"></uk-icon>
                                <span>{{ $supplier->domain }}</span>
                            </a>
                            @if($supplier->country)
                            <span class="flex items-center gap-1">
                                <uk-icon icon="location" width="16" height="16"></uk-icon>
                                <span>{{ $supplier->country }}</span>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                @auth
                <a href="{{ route('reviews.create', ['supplier' => $supplier]) }}" class="uk-btn uk-btn-primary uk-btn-large w-full lg:w-auto">
                    <uk-icon icon="pencil"></uk-icon>
                    Write a Review
                </a>
                @else
                <a href="{{ route('auth.register.index') }}" class="uk-btn uk-btn-primary uk-btn-large w-full lg:w-auto">
                    <uk-icon icon="pencil"></uk-icon>
                    Sign Up to Review
                </a>
                @endauth
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Rating Summary -->
        <div class="uk-card uk-card-default uk-card-body mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Overall Rating -->
                <div class="flex flex-col items-center justify-center text-center lg:border-r border-border">
                    <div class="text-6xl font-bold text-primary mb-3">4.5</div>
                    <div class="flex items-center gap-1 mb-2">
                        <uk-icon icon="star" class="text-primary" width="24" height="24"></uk-icon>
                        <uk-icon icon="star" class="text-primary" width="24" height="24"></uk-icon>
                        <uk-icon icon="star" class="text-primary" width="24" height="24"></uk-icon>
                        <uk-icon icon="star" class="text-primary" width="24" height="24"></uk-icon>
                        <uk-icon icon="star-half" class="text-primary" width="24" height="24"></uk-icon>
                    </div>
                    <p class="text-muted-foreground text-lg">Based on <span class="font-semibold text-foreground">{{ $supplier->reviews()->count() }}</span> reviews</p>
                </div>

                <!-- Rating Distribution -->
                <div class="flex flex-col justify-center">
                    <h3 class="font-semibold mb-4">Rating Distribution</h3>
                    <div class="space-y-3">
                        @foreach([5, 4, 3, 2, 1] as $stars)
                        @php
                            $percentage = [5 => 40, 4 => 35, 3 => 15, 2 => 7, 1 => 3][$stars];
                        @endphp
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1 w-16">
                                <span class="text-sm font-medium">{{ $stars }}</span>
                                <uk-icon icon="star" class="text-primary" width="14" height="14"></uk-icon>
                            </div>
                            <div class="flex-1 bg-muted rounded-full h-2 overflow-hidden">
                                <div class="bg-primary h-full rounded-full transition-all" style="width: {{ $percentage }}%"></div>
                            </div>
                            <span class="text-sm text-muted-foreground w-12 text-right">{{ $percentage }}%</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
                <h2 class="text-2xl font-bold">Reviews ({{ $supplier->reviews()->count() }})</h2>
                <div class="flex flex-wrap gap-3">
                    <select class="uk-select uk-form-width-medium">
                        <option>Sort by: Most Recent</option>
                        <option>Sort by: Highest Rating</option>
                        <option>Sort by: Lowest Rating</option>
                        <option>Sort by: Most Helpful</option>
                    </select>
                </div>
            </div>

            <ul id="js-reviews" x-merge="append" class="space-y-4">
                @foreach($reviews ?? [] as $review)
                <li class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                        <!-- Left: Score & Metadata -->
                        <div class="lg:col-span-3 flex flex-col items-center lg:items-start gap-4 lg:border-r border-border lg:pr-6">
                            @php
                                $avgScore = ($review->cost + $review->speed + $review->communication + $review->reliability + $review->quality + $review->support + $review->flexibility + $review->innovation + $review->value + $review->timeliness) / 10;
                                $colorClass = $avgScore >= 8 ? 'bg-green-500 text-white' : ($avgScore >= 6 ? 'bg-yellow-500 text-white' : 'bg-red-500 text-white');
                            @endphp
                            <div class="w-20 h-20 {{ $colorClass }} rounded-2xl flex items-center justify-center shadow-lg">
                                <span class="text-3xl font-bold">{{ number_format($avgScore, 1) }}</span>
                            </div>

                            <div class="text-center lg:text-left">
                                <div class="flex items-center gap-2 justify-center lg:justify-start mb-2 {{ $review->deal_again ? 'text-green-600' : 'text-red-600' }}">
                                    <uk-icon icon="{{ $review->deal_again ? 'check-circle' : 'close-circle' }}" width="18" height="18"></uk-icon>
                                    <span class="text-sm font-medium">{{ $review->deal_again ? 'Would work again' : 'Would not work again' }}</span>
                                </div>
                                <p class="text-sm text-muted-foreground">{{ $review->created_at->diffForHumans() }}</p>
                                <p class="text-sm font-medium">
                                    {{ $review->is_anonymous ? 'Anonymous Reviewer' : ($review->user->reviewerSupplier->name ?? 'Anonymous') }}
                                </p>
                                @if($review->country)
                                <p class="text-sm text-muted-foreground flex items-center gap-1 justify-center lg:justify-start mt-1">
                                    <uk-icon icon="location" width="14" height="14"></uk-icon>
                                    {{ $review->country }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <!-- Right: Details -->
                        <div class="lg:col-span-9">
                            <!-- Comment -->
                            @if($review->comment)
                            <blockquote class="border-l-4 border-primary pl-4 mb-4 italic text-lg">
                                "{{ $review->comment }}"
                            </blockquote>
                            @endif

                            <!-- Metrics Grid -->
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mb-4">
                                @foreach([
                                    'cost' => 'Cost',
                                    'speed' => 'Speed',
                                    'communication' => 'Communication',
                                    'reliability' => 'Reliability',
                                    'quality' => 'Quality',
                                    'support' => 'Support',
                                    'flexibility' => 'Flexibility',
                                    'innovation' => 'Innovation',
                                    'value' => 'Value',
                                    'timeliness' => 'Timeliness'
                                ] as $key => $label)
                                @php
                                    $score = $review->$key;
                                    $badgeClass = $score >= 8 ? 'bg-green-100 text-green-800' : ($score >= 6 ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800');
                                @endphp
                                <div class="flex flex-col items-center p-2 rounded-lg bg-muted/50">
                                    <span class="text-xs text-muted-foreground mb-1">{{ $label }}</span>
                                    <span class="uk-badge {{ $badgeClass }} font-bold">{{ $score }}/10</span>
                                </div>
                                @endforeach
                            </div>

                            <!-- Actions -->
                            <div class="flex flex-wrap items-center gap-3 pt-4 border-t border-border">
                                <button
                                    onclick="shareReview('{{ route('reviews.show', $review) }}', '{{ $supplier->name }}')"
                                    class="uk-btn uk-btn-default uk-btn-small"
                                    title="Share this review"
                                >
                                    <uk-icon icon="share" width="16" height="16" class="mr-1"></uk-icon>
                                    Share
                                </button>
                                <a href="{{ route('reviews.show', $review) }}" class="uk-btn uk-btn-default uk-btn-small">
                                    <uk-icon icon="expand" width="16" height="16" class="mr-1"></uk-icon>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <!-- Infinite Scroll Trigger -->
            @if($reviews->hasMorePages())
            <div id="js-pagination" class="py-8 text-center" x-init x-intersect="$ajax('{{ route('suppliers.show', ['supplier' => $supplier, 'page' => $reviews->currentPage() + 1]) }}', { target: 'js-reviews js-pagination' })">
                <div class="uk-spinner" data-uk-spinner></div>
                <p class="text-muted-foreground mt-2">Loading more reviews...</p>
            </div>
            @else
            <div class="py-8 text-center">
                <p class="text-muted-foreground">You've reached the end of the reviews</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function shareReview(url, supplierName) {
    const shareData = {
        title: `Review for ${supplierName}`,
        text: `Check out this review for ${supplierName} on our platform`,
        url: url
    };

    // Try native Web Share API first
    if (navigator.share) {
        navigator.share(shareData)
            .catch(err => {
                // User cancelled or error occurred
                console.log('Share cancelled or failed:', err);
            });
    } else {
        // Fallback: Copy to clipboard
        navigator.clipboard.writeText(url)
            .then(() => {
                // Show success message
                UIkit.notification({
                    message: '<uk-icon icon="check"></uk-icon> Link copied to clipboard!',
                    status: 'success',
                    pos: 'top-right',
                    timeout: 3000
                });
            })
            .catch(err => {
                console.error('Failed to copy:', err);
                UIkit.notification({
                    message: 'Failed to copy link',
                    status: 'danger',
                    pos: 'top-right',
                    timeout: 3000
                });
            });
    }
}
</script>
@endpush
