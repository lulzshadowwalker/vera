@extends('components.layouts.app')

@section('content')
<div class="bg-background text-foreground min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><span aria-current="page">My Profile</span></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- User Header -->
    <div class="bg-card border-b border-border">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="flex items-start gap-6">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <uk-icon icon="user" class="text-primary" width="40" height="40"></uk-icon>
                    </div>
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-2">{{ $user->name }}</h1>
                        <div class="flex flex-wrap items-center gap-4 text-muted-foreground">
                            <span class="flex items-center gap-1">
                                <uk-icon icon="mail" width="16" height="16"></uk-icon>
                                <span>{{ $user->email }}</span>
                            </span>
                            @if($user->supplier)
                            <a href="{{ route('suppliers.show', $user->supplier) }}" class="hover:text-primary flex items-center gap-1 transition-colors">
                                <uk-icon icon="building" width="16" height="16"></uk-icon>
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
            <div class="uk-card uk-card-default uk-card-body text-center py-12 flex flex-col items-center justify-center border border-dashed border-border shadow-none">
                <div class="w-16 h-16 bg-primary/5 rounded-full flex items-center justify-center mb-4">
                    <uk-icon icon="star" class="text-primary/60" width="32" height="32"></uk-icon>
                </div>
                <h3 class="text-lg font-medium mb-2">No reviews yet</h3>
                <p class="text-muted-foreground max-w-sm mx-auto mb-6">
                    You haven't written any reviews yet. Your insights help others make better decisions.
                </p>
                <a href="{{ route('home.index') }}" class="uk-btn uk-btn-primary">
                    Find Suppliers to Review
                </a>
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
                        <a href="{{ route('reviews.show', $review) }}" class="uk-btn uk-btn-default uk-btn-small">
                            <uk-icon icon="expand" width="16" height="16" class="mr-1"></uk-icon>
                            View Details
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
