@extends('components.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8 bg-background text-foreground">
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="mb-6">
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('suppliers.show', $review->reviewedSupplier) }}">{{ $review->reviewedSupplier->name }}</a></li>
            <li><span>Review</span></li>
        </ul>
    </nav>

    <!-- Supplier Header -->
    <div class="uk-card uk-card-default uk-card-body mb-8">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="flex items-center gap-6">
                <div class="w-20 h-20 bg-muted rounded-lg flex items-center justify-center">
                    <uk-icon icon="building" class="text-4xl text-muted-foreground"></uk-icon>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-foreground">{{ $review->reviewedSupplier->name }}</h1>
                    <a href="https://{{ $review->reviewedSupplier->domain }}" class="text-primary hover:underline flex items-center gap-1">
                        <uk-icon icon="globe" class="text-muted-foreground"></uk-icon>
                        {{ $review->reviewedSupplier->domain }}
                    </a>
                    <p class="text-muted-foreground flex items-center gap-1">
                        <uk-icon icon="map-pin" class="text-muted-foreground"></uk-icon>
                        {{ $review->reviewedSupplier->country }}
                    </p>
                </div>
            </div>
            <a href="{{ route('reviews.create', ['supplier' => $review->reviewedSupplier]) }}" class="uk-btn uk-btn-primary uk-btn-lg">Write a Review</a>
        </div>
    </div>

    <!-- Review Details -->
    <div class="uk-card uk-card-default uk-card-body">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="md:w-1/4 flex flex-col items-center gap-4">
                @php
                    $avgScore = ($review->cost + $review->speed + $review->communication + $review->reliability + $review->quality + $review->support + $review->flexibility + $review->innovation + $review->value + $review->timeliness) / 10;
                    $colorClass = $avgScore >= 8 ? 'bg-accent text-accent-foreground border-accent' : ($avgScore >= 6 ? 'bg-muted text-muted-foreground border-muted' : 'bg-destructive text-destructive-foreground border-destructive');
                @endphp
                <div class="w-24 h-24 {{ $colorClass }} border-4 rounded-full flex items-center justify-center shadow-lg">
                    <span class="text-4xl font-bold">{{ number_format($avgScore, 1) }}</span>
                </div>
                <div class="flex items-center gap-2 {{ $review->deal_again ? 'text-primary' : 'text-destructive' }}">
                    <uk-icon icon="{{ $review->deal_again ? 'thumbs-up' : 'thumbs-down' }}" class="text-lg"></uk-icon>
                    <span class="text-sm font-medium">{{ $review->deal_again ? 'Would deal again' : 'Would not deal again' }}</span>
                </div>
                <div class="text-center">
                    <p class="text-sm text-muted-foreground">{{ $review->created_at->diffForHumans() }}</p>
                    <p class="text-sm">{{ $review->anonymous ? 'Anonymous' : $review->user->first_name . ' ' . substr($review->user->first_name, 0, 1) . '.' }}</p>
                    <p class="text-sm text-muted-foreground">{{ $review->country }}</p>
                </div>
            </div>
            <div class="flex-1">
                <h2 class="text-2xl font-bold mb-6">Review Details</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-y-4 gap-x-8 md:gap-x-12 mb-6">
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
                    <div class="flex justify-between items-center">
                        <span>Flexibility</span>
                        <span class="uk-badge uk-badge-primary">{{ $review->flexibility }}/10</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Innovation</span>
                        <span class="uk-badge uk-badge-primary">{{ $review->innovation }}/10</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Value</span>
                        <span class="uk-badge uk-badge-primary">{{ $review->value }}/10</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Timeliness</span>
                        <span class="uk-badge uk-badge-primary">{{ $review->timeliness }}/10</span>
                    </div>
                </div>
                @if($review->comment)
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="text-lg font-semibold mb-4">Comment</h3>
                    <blockquote class="border-l-4 border-border pl-4 italic text-muted-foreground text-lg">
                        {{ $review->comment }}
                    </blockquote>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Share Section -->
    <div class="mt-8 p-4 bg-muted rounded-lg border border-border">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-base font-semibold">Share this Review</h3>
                <p class="text-sm text-muted-foreground">Help others discover this supplier</p>
            </div>
            <button class="uk-btn uk-btn-primary uk-btn-small" onclick="handleShare()">
                <uk-icon icon="share" class="mr-2"></uk-icon>
                Share
            </button>
        </div>
    </div>

    <!-- Related Reviews -->
    <div class="mt-8">
        <h3 class="text-xl font-bold mb-6">Other Reviews for {{ $review->reviewedSupplier->name }}</h3>
        <div class="grid gap-6 md:grid-cols-2">
            @foreach($review->reviewedSupplier->reviews()->where('id', '!=', $review->id)->limit(4)->get() as $otherReview)
            <div class="uk-card uk-card-default uk-card-body">
                <div class="flex items-start gap-4">
                    @php
                        $otherAvg = ($otherReview->cost + $otherReview->speed + $otherReview->communication + $otherReview->reliability + $otherReview->quality + $otherReview->support + $otherReview->flexibility + $otherReview->innovation + $otherReview->value + $otherReview->timeliness) / 10;
                        $otherColor = $otherAvg >= 8 ? 'bg-accent text-accent-foreground' : ($otherAvg >= 6 ? 'bg-muted text-muted-foreground' : 'bg-destructive text-destructive-foreground');
                    @endphp
                    <div class="w-12 h-12 {{ $otherColor }} rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-lg font-bold">{{ number_format($otherAvg, 1) }}</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-muted-foreground">{{ $otherReview->created_at->diffForHumans() }}</p>
                        <p class="text-sm">{{ $otherReview->anonymous ? 'Anonymous' : $otherReview->user->first_name . ' ' . substr($otherReview->user->first_name, 0, 1) . '.' }}</p>
                        @if($otherReview->comment)
                        <p class="mt-2">{{ Str::limit($otherReview->comment, 100) }}</p>
                        @endif
                        <a href="{{ route('reviews.show', $otherReview) }}" class="text-primary hover:underline text-sm mt-2 inline-block">Read full review</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-6 text-center">
            <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}" class="uk-btn uk-btn-primary">View All Reviews</a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function handleShare() {
    const shareText = 'I found this great review for {{ $review->reviewedSupplier->name }}. Check it out: {{ url()->current() }}';
    if (navigator.share) {
        navigator.share({ title: 'Review for {{ $review->reviewedSupplier->name }}', text: shareText, url: '{{ url()->current() }}' });
        return;
    }

    navigator.clipboard.writeText(shareText); alert('Link copied to clipboard!');
}
</script>
@endpush
