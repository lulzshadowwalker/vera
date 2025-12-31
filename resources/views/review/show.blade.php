@extends('components.layouts.app')

@section('content')
<div class="bg-background text-foreground min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="separator">/</li>
                    <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
                    <li class="separator">/</li>
                    <li><a href="{{ route('suppliers.show', $review->reviewedSupplier) }}">{{ $review->reviewedSupplier->name }}</a></li>
                    <li class="separator">/</li>
                    <li><span aria-current="page">Review</span></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Supplier Info Banner -->
        <div class="card p-6 mb-8">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="flex items-start gap-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <!-- TODO: ICON: building -->
                    </div>
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">Review for {{ $review->reviewedSupplier->name }}</h1>
                        <div class="flex flex-wrap items-center gap-4 text-muted-foreground">
                            <a href="https://{{ $review->reviewedSupplier->domain }}" target="_blank" rel="noopener" class="hover:text-primary flex items-center gap-1 transition-colors">
                                <!-- TODO: ICON: globe -->
                                <span>{{ $review->reviewedSupplier->domain }}</span>
                            </a>
                            @if($review->reviewedSupplier->country)
                            <span class="flex items-center gap-1">
                                <!-- TODO: ICON: location -->
                                <span>{{ $review->reviewedSupplier->country }}</span>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                    <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}" class="btn btn-default">
                        <!-- TODO: ICON: arrow-left -->
                        All Reviews
                    </a>
                    @auth
                    <a href="{{ route('suppliers.reviews.create', ['supplier' => $review->reviewedSupplier]) }}" class="btn btn-primary">
                        <!-- TODO: ICON: pencil -->
                        Write Review
                    </a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Review Details Card -->
        <div class="card p-6 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column: Score & Metadata -->
                <div class="lg:col-span-3 flex flex-col items-center gap-6 lg:border-r border-border lg:pr-8">
                    @php
                        $avgScore = $review->average_score;
                    @endphp

                    <!-- Overall Score -->
                    <div class="text-center">
                        <div class="w-32 h-32 bg-primary/10 border-4 border-primary rounded-3xl flex items-center justify-center shadow-lg mb-4">
                            <span class="text-5xl font-bold text-primary">{{ number_format($avgScore, 1) }}</span>
                        </div>
                        <p class="text-sm font-semibold text-muted-foreground">Overall Rating</p>
                    </div>

                    <!-- Would Deal Again -->
                    <div class="text-center p-4 rounded-xl bg-muted/50 border-2 border-border w-full">
                        <!-- TODO: ICON: {{ $review->deal_again ? 'check-circle' : 'close-circle' }} -->
                        <p class="text-sm font-semibold mt-2">
                            {{ $review->deal_again ? 'Would Work Together Again' : 'Would Not Work Together Again' }}
                        </p>
                    </div>

                    <!-- Review Metadata -->
                    <div class="w-full space-y-3 text-center">
                        <div class="p-3 bg-muted/50 rounded-lg">
                            <p class="text-xs text-muted-foreground mb-1">Reviewed By</p>
                            <p class="font-semibold">
                                {{ $review->is_anonymous ? 'Anonymous' : ($review->user->reviewerSupplier->name ?? 'Anonymous') }}
                            </p>
                        </div>
                        <div class="p-3 bg-muted/50 rounded-lg">
                            <p class="text-xs text-muted-foreground mb-1">Review Date</p>
                            <p class="font-semibold">{{ $review->created_at->format('M d, Y') }}</p>
                            <p class="text-xs text-muted-foreground">{{ $review->created_at->diffForHumans() }}</p>
                        </div>
                        @if($review->country)
                        <div class="p-3 bg-muted/50 rounded-lg">
                            <p class="text-xs text-muted-foreground mb-1">Location</p>
                            <p class="font-semibold flex items-center justify-center gap-1">
                                <!-- TODO: ICON: location -->
                                {{ $review->country }}
                            </p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Right Column: Review Content -->
                <div class="lg:col-span-9">
                    <!-- Comment -->
                    @if($review->comment)
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-4">Reviewer's Comment</h2>
                        <blockquote class="border-l-4 border-primary bg-primary/5 p-6 rounded-r-xl">
                            <p class="text-lg italic leading-relaxed">"{{ $review->comment }}"</p>
                        </blockquote>
                    </div>
                    @endif

                    <!-- Detailed Ratings -->
                    <div>
                        <h2 class="text-xl font-bold mb-6">Detailed Ratings</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach([
                                'quality' => ['label' => 'Product quality', 'icon' => 'star'],
                                'accuracy' => ['label' => 'Credibility & Accuracy', 'icon' => 'shield-check'],
                                'communication' => ['label' => 'Customer Service', 'icon' => 'headset'],
                                'cost' => ['label' => 'Price Suitability', 'icon' => 'credit-card'],
                                'compliance' => ['label' => 'Financial Dealing', 'icon' => 'banknote'],
                                'timeliness' => ['label' => 'Timeliness', 'icon' => 'clock'],
                                'support' => ['label' => 'After-sale Service', 'icon' => 'wrench']
                            ] as $key => $data)
                            @php
                                $score = $review->$key;
                                $percentage = ($score / 10) * 100;
                            @endphp
                            <div class="p-4 rounded-xl border-2 border-border bg-card hover:shadow-md transition-shadow">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <!-- TODO: ICON: {{ $data['icon'] }} -->
                                        <span class="font-semibold">{{ $data['label'] }}</span>
                                    </div>
                                    <span class="text-2xl font-bold">{{ $score }}<span class="text-sm text-muted-foreground">/10</span></span>
                                </div>
                                <div class="w-full bg-muted rounded-full h-2 overflow-hidden">
                                    <div class="bg-primary h-full rounded-full transition-all" style="width: {{ $percentage }}%"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Section -->
        <div class="card p-6 mb-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl font-bold mb-2 flex items-center gap-2">
                        <!-- TODO: ICON: share -->
                        Share This Review
                    </h3>
                    <p class="text-muted-foreground">Help others make informed decisions about this supplier</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button onclick="shareReview()" class="btn btn-primary btn-lg">
                        <!-- TODO: ICON: share -->
                        Share Review
                    </button>
                    <button onclick="copyLink()" class="btn btn-default btn-lg">
                        <!-- TODO: ICON: link -->
                        Copy Link
                    </button>
                </div>
            </div>
        </div>

        <!-- Related Reviews -->
        @if($review->reviewedSupplier->reviews()->where('id', '!=', $review->id)->exists())
        <div>
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold">More Reviews for {{ $review->reviewedSupplier->name }}</h3>
                <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}" class="btn btn-default">
                    View All
                    <!-- TODO: ICON: arrow-right -->
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($review->reviewedSupplier->reviews()->where('id', '!=', $review->id)->limit(3)->get() as $otherReview)
                @php
                    $otherAvg = $otherReview->average_score;
                @endphp
                <div class="card p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 bg-primary/10 border-2 border-primary rounded-2xl flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl font-bold text-primary">{{ number_format($otherAvg, 1) }}</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-muted-foreground">{{ $otherReview->created_at->diffForHumans() }}</p>
                            <p class="text-sm font-medium truncate">
                                {{ $otherReview->is_anonymous ? 'Anonymous' : ($otherReview->user->reviewerSupplier->name ?? 'Anonymous') }}
                            </p>
                            <div class="flex items-center gap-1 mt-1 text-muted-foreground">
                                <!-- TODO: ICON: {{ $otherReview->deal_again ? 'check-circle' : 'circle-x' }} -->
                                <span class="text-xs">{{ $otherReview->deal_again ? 'Would work again' : 'Would not work again' }}</span>
                            </div>
                        </div>
                    </div>
                    @if($otherReview->comment)
                    <p class="text-sm text-muted-foreground mb-4 line-clamp-2">{{ Str::limit($otherReview->comment, 100) }}</p>
                    @endif
                    <a href="{{ route('reviews.show', $otherReview) }}" class="btn btn-primary btn-sm w-full">
                        Read Full Review
                        <!-- TODO: ICON: arrow-right -->
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
function shareReview() {
    const shareData = {
        title: 'Review for {{ $review->reviewedSupplier->name }}',
        text: 'Check out this review for {{ $review->reviewedSupplier->name }}',
        url: '{{ url()->current() }}'
    };

    // Try native Web Share API first
    if (navigator.share) {
        navigator.share(shareData)
            .catch(err => {
                console.log('Share cancelled or failed:', err);
            });
    } else {
        // Fallback to copy link
        copyLink();
    }
}

function copyLink() {
    const url = '{{ url()->current() }}';
    navigator.clipboard.writeText(url)
        .then(() => {
            alert('Link copied to clipboard!');
        })
        .catch(err => {
            console.error('Failed to copy:', err);
            alert('Failed to copy link');
        });
}
</script>
@endpush
