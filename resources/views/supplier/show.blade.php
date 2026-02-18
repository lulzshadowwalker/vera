@extends('components.layouts.app')

@section('content')
    <div class="bg-background text-foreground min-h-screen">
        <div class="bg-card">
            <div class="mx-auto max-w-7xl px-6 py-4">
                <nav aria-label="Breadcrumb">
                    <ol class="text-muted-foreground wrap-break-word flex flex-wrap items-center gap-1.5 text-sm sm:gap-2.5">
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
                            @auth
                                <a href="{{ route('suppliers.index') }}"
                                   class="hover:text-foreground transition-colors">Vendors</a>
                            @else
                                <span>Vendors</span>
                            @endauth
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
                        <li class="inline-flex items-center gap-1.5"
                            aria-current="page">
                            <span class="font-medium">{{ $supplier->name }}</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        @php
            $assessmentsCount = $supplier->reviews()->count();
        @endphp

        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-7xl px-6 py-8">
                <div class="flex flex-col items-start justify-between gap-6 lg:flex-row lg:items-center">
                    <div class="flex items-start gap-6">
                        <div class="bg-primary/10 flex h-20 w-20 shrink-0 items-center justify-center rounded-2xl">
                            <i class="hgi hgi-stroke hgi-building-03 text-4xl"></i>
                        </div>
                        <div>
                            <h1 class="mb-2 text-3xl font-bold md:text-4xl">{{ $supplier->name }}</h1>
                            <div class="text-muted-foreground flex flex-wrap items-center gap-4">
                                <div class="flex items-center gap-1">
                                    <i class="hgi hgi-stroke hgi-globe-02 translate-y-0.5"></i>
                                    <span>{{ $supplier->domain }}</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="hgi hgi-stroke hgi-task-daily-01"></i>
                                    <span>{{ $assessmentsCount }} {{ Str::plural('assessment', $assessmentsCount) }}</span>
                                </div>
                                @auth
                                    @if ($supplier->country)
                                        <span class="flex items-center gap-1">
                                            <i class="hgi hgi-stroke hgi-location-03"></i>
                                            <span>{{ $supplier->country }}</span>
                                        </span>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                    @auth
                        <a href="{{ route('suppliers.reviews.create', ['supplier' => $supplier]) }}"
                           class="btn btn-primary btn-lg w-full lg:w-auto">
                            <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                            Assess a Vendor
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-7xl px-6 py-8">
            @auth
                <div class="card mb-8 p-6">
                    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                        <div class="border-border flex flex-col items-center justify-center text-center lg:border-r">
                            <div class="text-primary mb-3 text-6xl font-bold">{{ number_format($supplier->average_rating, 1) }}</div>
                            <div class="mb-2">
                                <x-star-rating :score="$supplier->average_rating" size="size-6" />
                            </div>
                            <p class="text-muted-foreground text-lg">Based on <span
                                      class="text-foreground font-semibold">{{ $assessmentsCount }}</span> assessments
                            </p>
                        </div>

                        <div class="flex flex-col justify-center">
                            <h3 class="mb-4 font-semibold">Rating Distribution</h3>
                            <div class="space-y-3">
                                @foreach ([5, 4, 3, 2, 1] as $stars)
                                    @php
                                        $percentage = $supplier->getRatingPercentage($stars);
                                    @endphp
                                    <div class="flex items-center gap-3">
                                        <div class="flex w-28 items-center gap-1">
                                            <x-star-rating :score="$stars" size="size-4" />
                                        </div>
                                        <div class="bg-muted h-2 flex-1 overflow-hidden rounded-full">
                                            <div class="bg-primary h-full rounded-full transition-all"
                                                 style="width: {{ $percentage }}%"></div>
                                        </div>
                                        <span class="text-muted-foreground w-12 text-right text-sm">{{ $percentage }}%</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="mb-6 flex flex-col items-start justify-between gap-4 md:flex-row md:items-center">
                        <h2 class="text-2xl font-bold">Assessments ({{ $assessmentsCount }})</h2>
                        <div class="flex flex-wrap gap-3">
                            <select class="select w-48">
                                <option>Sort by: Most Recent</option>
                                <option>Sort by: Highest Rating</option>
                                <option>Sort by: Lowest Rating</option>
                                <option>Sort by: Most Helpful</option>
                            </select>
                        </div>
                    </div>

                    <ul id="js-reviews"
                        x-merge="append"
                        class="space-y-4">
                        @foreach ($reviews ?? [] as $review)
                            <x-review-card :review="$review" />
                        @endforeach
                    </ul>

                    @if ($reviews->hasMorePages())
                        <div id="js-pagination"
                             class="py-8 text-center"
                             x-init
                             x-intersect="$ajax('{{ route('suppliers.show', ['supplier' => $supplier, 'page' => $reviews->currentPage() + 1]) }}', { target: 'js-reviews js-pagination' })">
                            <div class="border-primary mx-auto h-8 w-8 animate-spin rounded-full border-b-2"></div>
                            <p class="text-muted-foreground mt-2">Loading more assessments...</p>
                        </div>
                    @else
                        <div class="py-8 text-center">
                            <p class="text-muted-foreground">You've reached the end of the assessments</p>
                        </div>
                    @endif
                </div>
            @else
                <div class="card mx-auto max-w-2xl p-5 text-center">
                    <div class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-full">
                        <i class="hgi hgi-stroke hgi-square-lock-02 text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold leading-tight">Join our community to see more</h2>
                    <p class="text-muted-foreground text-pretty mx-auto max-w-xl leading-snug">
                        Create an account to unlock overall ratings, rating distribution, and full assessment details for this vendor.
                    </p>
                    <div class="flex flex-col justify-center gap-2 sm:flex-row">
                        <a href="{{ route('auth.login.index') }}"
                           class="btn btn-primary">
                            Log In
                        </a>
                        <a href="{{ route('auth.register.index') }}"
                           class="btn btn-secondary">
                            Create an Account
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function shareAssessment(url, supplierName) {
            const shareData = {
                title: `Assessment for ${supplierName}`,
                text: `Check out this assessment for ${supplierName} on our platform`,
                url: url
            };

            if (navigator.share) {
                navigator.share(shareData)
                    .catch(err => {
                        console.log('Share cancelled or failed:', err);
                    });
            } else {
                navigator.clipboard.writeText(url)
                    .then(() => {
                        alert('Link copied to clipboard!');
                    })
                    .catch(err => {
                        console.error('Failed to copy:', err);
                        alert('Failed to copy link');
                    });
            }
        }
    </script>
@endpush
