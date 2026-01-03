@extends('components.layouts.app')

@section('content')
    <div class="bg-background text-foreground min-h-screen">
        <!-- Breadcrumb -->
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-7xl px-6 py-4">
                <nav aria-label="Breadcrumb">
                    <ol class="text-muted-foreground flex flex-wrap items-center gap-1.5 break-words text-sm sm:gap-2.5">
                        <li class="inline-flex items-center gap-1.5">
                            <a href="{{ route('home.index') }}"
                               class="hover:text-foreground transition-colors">Home</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="size-3.5">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </li>
                        <li class="inline-flex items-center gap-1.5">
                            <a href="{{ route('suppliers.index') }}"
                               class="hover:text-foreground transition-colors">Vendors</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="size-3.5">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </li>
                        <li class="inline-flex items-center gap-1.5">
                            <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}"
                               class="hover:text-foreground transition-colors">{{ $review->reviewedSupplier->name }}</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="size-3.5">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </li>
                        <li class="inline-flex items-center gap-1.5">
                            <span aria-current="page">Review</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="mx-auto max-w-7xl px-6 py-8">
            <!-- Supplier Info Banner -->
            <div class="card mb-8 p-6">
                <div class="flex flex-col items-start justify-between gap-6 lg:flex-row lg:items-center">
                    <div class="flex items-start gap-6">
                        <div class="bg-primary/10 flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl">
                            <i class="hgi hgi-stroke hgi-building-03 text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="mb-2 text-2xl font-bold md:text-3xl">Review for {{ $review->reviewedSupplier->name }}
                            </h1>
                            <div class="text-muted-foreground flex flex-wrap items-center gap-4">
                                <a href="https://{{ $review->reviewedSupplier->domain }}"
                                   target="_blank"
                                   rel="noopener"
                                   class="hover:text-primary flex items-center gap-1 transition-colors">
                                    <i class="hgi hgi-stroke hgi-globe-02"></i>
                                    <span>{{ $review->reviewedSupplier->domain }}</span>
                                </a>
                                @if ($review->reviewedSupplier->country)
                                    <span class="flex items-center gap-1">
                                        <i class="hgi hgi-stroke hgi-location-03"></i>
                                        <span>{{ $review->reviewedSupplier->country }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full flex-col gap-3 sm:flex-row lg:w-auto">
                        <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}"
                           class="btn btn-default">
                            <i class="hgi hgi-stroke hgi-arrow-left-02"></i>
                            All Reviews
                        </a>
                        @auth
                            <a href="{{ route('suppliers.reviews.create', ['supplier' => $review->reviewedSupplier]) }}"
                               class="btn btn-primary">
                                <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                                Write Review
                            </a>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Review Details Card -->
            <div class="card mb-8 p-6">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
                    <!-- Left Column: Score & Metadata -->
                    <div class="border-border flex flex-col items-center gap-6 lg:col-span-3 lg:border-r lg:pr-8">
                        @php
                            $avgScore = $review->average_score;
                        @endphp

                        <!-- Overall Score -->
                        <div class="text-center">
                            <div
                                 class="bg-primary/10 border-primary mb-4 flex h-32 w-32 items-center justify-center rounded-3xl border-4 shadow-lg">
                                <span class="text-primary text-5xl font-bold">{{ number_format($avgScore, 1) }}</span>
                            </div>
                            <p class="text-muted-foreground text-sm font-semibold">Overall Rating</p>
                        </div>

                        <!-- Would Deal Again -->
                        <div class="bg-muted/50 border-border w-full rounded-xl border-2 p-4 text-center">
                            @if ($review->deal_again)
                                <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                            @else
                                <i class="hgi hgi-stroke hgi-cancel-circle"></i>
                            @endif
                            <p class="mt-2 text-sm font-semibold">
                                {{ $review->deal_again ? 'Would Work Together Again' : 'Would Not Work Together Again' }}
                            </p>
                        </div>

                        <!-- Review Metadata -->
                        <div class="w-full space-y-3 text-center">
                            <div class="bg-muted/50 rounded-lg p-3">
                                <p class="text-muted-foreground mb-1 text-xs">Reviewed By</p>
                                <p class="font-semibold">
                                    {{ $review->is_anonymous ? 'Anonymous' : $review->user->reviewerSupplier->name ?? 'Anonymous' }}
                                </p>
                            </div>
                            <div class="bg-muted/50 rounded-lg p-3">
                                <p class="text-muted-foreground mb-1 text-xs">Review Date</p>
                                <p class="font-semibold">{{ $review->created_at->format('M d, Y') }}</p>
                                <p class="text-muted-foreground text-xs">{{ $review->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Review Content -->
                    <div class="lg:col-span-9">
                        <!-- Comment -->
                        @if ($review->comment)
                            <div class="mb-8">
                                <h2 class="mb-4 text-xl font-bold">Reviewer's Comment</h2>
                                <blockquote class="border-primary bg-primary/5 rounded-r-xl border-l-4 p-6">
                                    <p class="text-lg italic leading-relaxed">"{{ $review->comment }}"</p>
                                </blockquote>
                            </div>
                        @endif

                        <!-- Detailed Ratings -->
                        <div>
                            <h2 class="mb-6 text-xl font-bold">Detailed Ratings</h2>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                @foreach ([
            'quality' => ['label' => 'Product quality', 'icon' => 'hgi-stars'],
            'accuracy' => ['label' => 'Credibility & Accuracy', 'icon' => 'hgi-shield-energy'],
            'communication' => ['label' => 'Customer Service', 'icon' => 'hgi-headset'],
            'cost' => ['label' => 'Price Suitability', 'icon' => 'hgi-credit-card'],
            'compliance' => ['label' => 'Financial Dealing', 'icon' => 'hgi-bank'],
            'timeliness' => ['label' => 'Timeliness', 'icon' => 'hgi-timer-01'],
            'support' => ['label' => 'After-sale Service', 'icon' => 'hgi-wrench-01'],
        ] as $key => $data)
                                    @php
                                        $score = $review->$key;
                                        $percentage = ($score / 10) * 100;
                                    @endphp
                                    <div
                                         class="border-border bg-card rounded-xl border-2 p-4 transition-shadow hover:shadow-md">
                                        <div class="mb-3 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <i class="hgi hgi-stroke {{ $data['icon'] }}"></i>
                                                <span class="font-semibold">{{ $data['label'] }}</span>
                                            </div>
                                            <span class="text-2xl font-bold">{{ $score }}<span
                                                      class="text-muted-foreground text-sm">/10</span></span>
                                        </div>
                                        <div class="bg-muted h-2 w-full overflow-hidden rounded-full">
                                            <div class="bg-primary h-full rounded-full transition-all"
                                                 style="width: {{ $percentage }}%"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Share Section -->
            <div class="card mb-8 p-6">
                <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
                    <div>
                        <h3 class="mb-2 flex items-center gap-2 text-xl font-bold">
                            Share This Review
                        </h3>
                        <p class="text-muted-foreground">Help others make informed decisions about this supplier</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button onclick="shareReview()"
                                class="btn btn-primary btn-lg">
                            <i class="hgi hgi-stroke hgi-share-08"></i>
                            Share Review
                        </button>
                        <button onclick="copyLink()"
                                class="btn btn-default btn-lg">
                            <i class="hgi hgi-stroke hgi-link-04"></i>
                            Copy Link
                        </button>
                    </div>
                </div>
            </div>

            <!-- Related Reviews -->
            @if ($review->reviewedSupplier->reviews()->where('id', '!=', $review->id)->exists())
                <div>
                    <div class="mb-6 flex items-center justify-between">
                        <h3 class="text-2xl font-bold">More Reviews for {{ $review->reviewedSupplier->name }}</h3>
                        <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}"
                           class="btn btn-default">
                            View All
                            <i class="hgi hgi-stroke hgi-arrow-right-02"></i>
                        </a>
                    </div>

                    @auth
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ($review->reviewedSupplier->reviews()->where('id', '!=', $review->id)->limit(3)->get() as $otherReview)
                                @php
                                    $otherAvg = $otherReview->average_score;
                                @endphp
                                <div class="card p-6 transition-shadow hover:shadow-lg">
                                    <div class="mb-4 flex items-start gap-4">
                                        <div
                                             class="bg-primary/10 border-primary flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-2xl border-2">
                                            <span class="text-primary text-2xl font-bold">{{ number_format($otherAvg, 1) }}</span>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <p class="text-muted-foreground text-sm">{{ $otherReview->created_at->diffForHumans() }}
                                            </p>
                                            <p class="truncate text-sm font-medium">
                                                {{ $otherReview->is_anonymous ? 'Anonymous' : $otherReview->user->reviewerSupplier->name ?? 'Anonymous' }}
                                            </p>
                                            <div class="text-muted-foreground mt-1 flex items-center gap-1">
                                                @if ($review->deal_again)
                                                    <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                                                @else
                                                    <i class="hgi hgi-stroke hgi-cancel-circle"></i>
                                                @endif
                                                <span
                                                      class="text-xs">{{ $otherReview->deal_again ? 'Would work again' : 'Would not work again' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($otherReview->comment)
                                        <p class="text-muted-foreground mb-4 line-clamp-2 text-sm">
                                            {{ Str::limit($otherReview->comment, 100) }}</p>
                                    @endif
                                    <a href="{{ route('reviews.show', $otherReview) }}"
                                       class="btn btn-primary btn-sm w-full">
                                        Read Full Review
                                        <i class="hgi hgi-stroke hgi-arrow-right-02"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="relative overflow-hidden rounded-xl border border-border bg-card">
                            <!-- Blurred Background (Fake Content) -->
                            <div
                                 class="grid grid-cols-1 gap-6 p-6 opacity-50 blur-sm md:grid-cols-2 lg:grid-cols-3 select-none pointer-events-none">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="card p-6">
                                        <div class="mb-4 flex items-start gap-4">
                                            <div class="h-16 w-16 rounded-2xl bg-muted"></div>
                                            <div class="flex-1 space-y-2">
                                                <div class="h-4 w-24 rounded bg-muted"></div>
                                                <div class="h-4 w-32 rounded bg-muted"></div>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="h-4 w-full rounded bg-muted"></div>
                                            <div class="h-4 w-2/3 rounded bg-muted"></div>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <!-- Overlay -->
                            <div
                                 class="absolute inset-0 flex flex-col items-center justify-center bg-background/60 p-6 text-center backdrop-blur-[2px]">
                                <div class="max-w-md space-y-4">
                                    <div
                                         class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                                        <i class="hgi hgi-stroke hgi-square-lock-02 text-2xl"></i>
                                    </div>
                                    <h3 class="text-xl font-bold">Join our community to see more</h3>
                                    <p class="text-muted-foreground">
                                        Sign in to access detailed reviews and make better procurement decisions. It's free and takes
                                        less than a minute.
                                    </p>
                                    <div class="flex flex-col gap-3 sm:flex-row sm:justify-center">
                                        <a href="{{ route('auth.login.index') }}"
                                           class="btn-primary">
                                            Log In
                                        </a>
                                        <a href="{{ route('auth.register.index') }}"
                                           class="btn-outline">
                                            Create an Account
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
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
            // TODO: Use basecoat toast/alert instead of js alert api.
            navigator.clipboard.writeText('{{ url()->current() }}')
                .then(() => {
                    alert('Link copied to clipboard!');
                })
                .catch(err => {
                    console.error('Failed to copy:', err);
                    alert('Failed to copy link');
                });
        }
    </script>
@endpush)
