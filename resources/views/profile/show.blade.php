@extends('components.layouts.app')

@section('content')
<div class="bg-background text-foreground min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <nav aria-label="Breadcrumb">
                <ol class="text-muted-foreground flex flex-wrap items-center gap-1.5 text-sm break-words sm:gap-2.5">
                    <li class="inline-flex items-center gap-1.5">
                        <a href="{{ route('home.index') }}" class="hover:text-foreground transition-colors">Home</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
                    </li>
                    <li class="inline-flex items-center gap-1.5">
                        <span aria-current="page">My Profile</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- User Header -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="flex items-start gap-6">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center shrink-0">
                        <i class="hgi hgi-stroke hgi-user text-3xl"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">{{ $user->name }}</h1>
                        <div class="flex flex-wrap items-center gap-4 text-muted-foreground">
                            <span class="flex items-center gap-1">
                                <i class="hgi hgi-stroke hgi-mail-02 translate-y-[1.5px]"></i>
                                <span>{{ $user->email }}</span>
                            </span>
                            @if($user->supplier)
                            <a href="{{ route('suppliers.show', $user->supplier) }}" class="hover:text-primary flex items-center gap-1 transition-colors">
                                <i class="hgi hgi-stroke hgi-building-03"></i>
                                <span>{{ $user->supplier->name }}</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Reviews Section -->
        <div>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
                <h2 class="text-2xl font-bold">My Reviews ({{ $reviews->total() }})</h2>
            </div>

            @if($reviews->isEmpty())
            <div class="col-span-full">
                <div class="border-border flex min-w-0 flex-1 flex-col items-center justify-center gap-6 text-balance rounded-lg border border-dashed p-6 text-center md:p-12">
                    <header class="flex max-w-sm flex-col items-center gap-2 text-center">
                        <div class="bg-secondary/20 text-foreground mb-2 flex size-10 shrink-0 items-center justify-center rounded-lg">
                            <i class="hgi hgi-stroke hgi-star text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium tracking-tight">No reviews yet</h3>
                        <p class="text-muted-foreground text-sm/relaxed">
                            You haven't written any reviews yet. Your insights help others make better decisions.
                        </p>
                    </header>
                    <section class="flex w-full min-w-0 max-w-sm flex-col items-center gap-4 text-balance text-sm">
                        <div class="flex gap-2">
                            <a href="{{ route('suppliers.index') }}" class="btn btn-primary">
                                Find Suppliers to Review
                            </a>
                        </div>
                    </section>
                </div>
            </div>
            @else
            <ul id="js-reviews" class="space-y-4">
                @foreach($reviews as $review)
                <x-review-card :review="$review">
                    <x-slot:identity>
                        <p class="text-sm font-medium mt-1">
                            Reviewed: <a href="{{ route('suppliers.show', $review->reviewedSupplier) }}" class="text-primary hover:underline">{{ $review->reviewedSupplier->name }}</a>
                        </p>
                    </x-slot:identity>
                    <x-slot:actions>
                        <a href="{{ route('reviews.show', $review) }}" class="btn btn-primary btn-sm">
                            View Details
                            <i class="hgi hgi-stroke hgi-arrow-right-02"></i>
                        </a>
                    </x-slot:actions>
                </x-review-card>
                @endforeach
            </ul>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $reviews->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
