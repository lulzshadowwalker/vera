@extends('components.layouts.app')

@section('content')
    <div class="bg-background text-foreground min-h-screen">
        <!-- Breadcrumb -->
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-5xl px-6 py-4">
                <nav aria-label="Breadcrumb">
                    <ol class="text-muted-foreground flex flex-wrap items-center gap-1.5 text-sm break-words sm:gap-2.5">
                        <li class="inline-flex items-center gap-1.5">
                            <a href="{{ route('home.index') }}" class="hover:text-foreground transition-colors">Home</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
                        </li>
                        <li class="inline-flex items-center gap-1.5">
                            <a href="{{ route('suppliers.index') }}" class="hover:text-foreground transition-colors">Vendors</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
                        </li>
                        <li class="inline-flex items-center gap-1.5">
                            <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}" class="hover:text-foreground transition-colors">{{ $review->reviewedSupplier->name }}</a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
                        </li>
                        <li class="inline-flex items-center gap-1.5">
                            <span aria-current="page">Edit Review</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Header -->
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-5xl px-6 py-8">
                <div class="flex items-start gap-6">
                    <div class="bg-primary/10 flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl">
                        <i class="hgi hgi-stroke hgi-pencil-edit-02 text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="mb-2 text-3xl font-bold md:text-4xl">Edit Review</h1>
                        <p class="text-muted-foreground text-lg">Update your experience with <span
                                  class="text-foreground font-semibold">{{ $review->reviewedSupplier->name }}</span></p>
                        <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}"
                           class="text-primary mt-2 inline-flex items-center gap-1 text-sm hover:underline">
                            <i class="hgi hgi-stroke hgi-arrow-left-02"></i>
                            Back to {{ $review->reviewedSupplier->name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-5xl px-6 py-8">
            <form action="{{ route('reviews.update', $review) }}" method="POST">
                @csrf
                @method('PUT')

                @include('review._form', ['review' => $review, 'supplier' => $review->reviewedSupplier])
            </form>

            <!-- Help Section -->
            <div class="bg-primary/5 border-primary/20 mt-8 rounded-xl border p-6">
                <h4 class="mb-3 flex items-center gap-2 font-bold">
                    Review Guidelines
                </h4>
                <ul class="text-muted-foreground space-y-2 text-sm">
                    <li class="flex items-start gap-2">
                        <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                        <span>Be honest and objective about your experience</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                        <span>Focus on specific aspects like delivery, quality, and communication</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                        <span>Avoid offensive language or personal attacks</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="hgi hgi-stroke hgi-checkmark-circle-02"></i>
                        <span>Your review will be visible to all users once submitted</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
