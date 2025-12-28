@props(['review'])

<li class="uk-card uk-card-default uk-card-body uk-card-hover">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <!-- Left: Score & Metadata -->
        <div class="lg:col-span-3 flex flex-col items-center lg:items-start gap-4 lg:border-r border-border lg:pr-6">
            @php
                $avgScore = $review->average_score;
                $colorClass = $avgScore >= 8 ? 'bg-green-500 text-white' : ($avgScore >= 6 ? 'bg-yellow-500 text-white' : 'bg-red-500 text-white');
            @endphp
            <div class="w-20 h-20 {{ $colorClass }} rounded-2xl flex items-center justify-center shadow-lg">
                <span class="text-3xl font-bold">{{ number_format($avgScore, 1) }}</span>
            </div>

            <div class="text-center lg:text-left">
                <div class="flex items-center gap-2 justify-center lg:justify-start mb-2 {{ $review->deal_again ? 'text-green-600' : 'text-red-600' }}">
                    <uk-icon icon="{{ $review->deal_again ? 'check-circle' : 'circle-x' }}" width="18" height="18"></uk-icon>
                    <span class="text-sm font-medium">{{ $review->deal_again ? 'Would work again' : 'Would not work again' }}</span>
                </div>
                <p class="text-sm text-muted-foreground">{{ $review->created_at->diffForHumans() }}</p>
                
                @if(isset($identity))
                    {{ $identity }}
                @else
                    <p class="text-sm font-medium">
                        {{ $review->is_anonymous ? 'Anonymous Reviewer' : ($review->user->reviewerSupplier->name ?? 'Anonymous') }}
                    </p>
                    @if($review->country)
                    <p class="text-sm text-muted-foreground flex items-center gap-1 justify-center lg:justify-start mt-1">
                        <uk-icon icon="location" width="14" height="14"></uk-icon>
                        {{ $review->country }}
                    </p>
                    @endif
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
                    'quality' => 'Product quality',
                    'accuracy' => 'Credibility & Accuracy',
                    'communication' => 'Customer Service',
                    'cost' => 'Price Suitability',
                    'compliance' => 'Financial Dealing',
                    'timeliness' => 'Timeliness',
                    'support' => 'After-sale Service'
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
                @if(isset($actions))
                    {{ $actions }}
                @else
                    <button
                        onclick="shareReview('{{ route('reviews.show', $review) }}', '{{ $review->reviewedSupplier->name }}')"
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
                @endif
            </div>
        </div>
    </div>
</li>
