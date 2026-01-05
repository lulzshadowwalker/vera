@props(['review'])

<li class="card p-6 transition-shadow hover:shadow-md">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
        <!-- Left: Score & Metadata -->
        <div class="border-border flex flex-col items-center gap-4 lg:col-span-3 lg:items-start lg:border-r lg:pr-6">
            @php
                $avgScore = $review->average_score;
                $colorClass =
                    $avgScore >= 8
                        ? 'bg-green-500 text-white'
                        : ($avgScore >= 6
                            ? 'bg-yellow-500 text-white'
                            : 'bg-red-500 text-white');
            @endphp
            <div class="{{ $colorClass }} flex h-20 w-20 items-center justify-center rounded-2xl shadow-lg">
                <span class="text-3xl font-bold">{{ number_format($avgScore, 1) }}</span>
            </div>

            <div class="text-center lg:text-left">
                <div
                     class="{{ $review->deal_again ? 'text-green-600' : 'text-red-600' }} mb-2 flex items-center justify-center gap-2 lg:justify-start">
                    @if ($review->deal_again)
                        <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                    @else
                        <i class="hgi hgi-stroke hgi-cancel-circle"></i>
                    @endif
                    <span
                          class="text-sm font-medium">{{ $review->deal_again ? 'Would work again' : 'Would not work again' }}</span>
                </div>
                <p class="text-muted-foreground text-sm">{{ $review->created_at->diffForHumans() }}</p>

                @if (isset($identity))
                    {{ $identity }}
                @else
                    <p class="text-sm font-medium">
                        {{ $review->reviewer_display_name }}
                    </p>
                @endif
            </div>
        </div>

        <!-- Right: Details -->
        <div class="lg:col-span-9">
            <!-- Comment -->
            @if ($review->comment)
                <blockquote class="border-primary mb-4 border-l-4 pl-4 text-lg italic">
                    "{{ $review->comment }}"
                </blockquote>
            @endif

            <!-- Metrics Grid -->
            <div class="mb-4 grid grid-cols-2 gap-3 md:grid-cols-5">
                @foreach ([
        'quality' => 'Product quality',
        'accuracy' => 'Credibility & Accuracy',
        'communication' => 'Customer Service',
        'cost' => 'Price Suitability',
        'compliance' => 'Financial Dealing',
        'timeliness' => 'Timeliness',
        'support' => 'After-sale Service',
    ] as $key => $label)
                    @php
                        $score = $review->$key;
                        $badgeClass =
                            $score >= 8
                                ? 'bg-green-100 text-green-800'
                                : ($score >= 6
                                    ? 'bg-yellow-100 text-yellow-800'
                                    : 'bg-red-100 text-red-800');
                    @endphp
                    <div class="bg-muted/50 flex flex-col items-center rounded-lg p-2">
                        <span class="text-muted-foreground mb-1 text-xs">{{ $label }}</span>
                        <span class="badge {{ $badgeClass }} font-bold">{{ $score }}/10</span>
                    </div>
                @endforeach
            </div>

            <!-- Actions -->
            <div class="border-border flex flex-wrap items-center gap-3 border-t pt-4">
                @if (isset($actions))
                    {{ $actions }}
                @else
                    <button onclick="shareReview('{{ route('reviews.show', $review) }}', '{{ $review->reviewedSupplier->name }}')"
                            class="btn btn-secondary btn-sm"
                            title="Share this review">
                        Share
                        <i class="hgi hgi-stroke hgi-share-08"></i>
                    </button>
                    <a href="{{ route('reviews.show', $review) }}"
                       class="btn btn-secondary btn-sm">
                        View Details
                        <i class="hgi hgi-stroke hgi-arrow-right-02"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
</li>
