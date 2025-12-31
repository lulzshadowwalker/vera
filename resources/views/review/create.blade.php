@extends('components.layouts.app')

@section('content')
<div class="bg-background text-foreground min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-card border-b border-border">
        <div class="max-w-5xl mx-auto px-6 py-4">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="separator">/</li>
                    <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
                    <li class="separator">/</li>
                    <li><a href="{{ route('suppliers.show', $supplier) }}">{{ $supplier->name }}</a></li>
                    <li class="separator">/</li>
                    <li><span aria-current="page">Write Review</span></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Page Header -->
    <div class="bg-card border-b border-border">
        <div class="max-w-5xl mx-auto px-6 py-8">
            <div class="flex items-start gap-6">
                <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                    <!-- TODO: ICON: pencil -->
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">Write a Review</h1>
                    <p class="text-lg text-muted-foreground">Share your experience with <span class="font-semibold text-foreground">{{ $supplier->name }}</span></p>
                    <a href="{{ route('suppliers.show', $supplier) }}" class="text-primary hover:underline text-sm mt-2 inline-flex items-center gap-1">
                        <!-- TODO: ICON: arrow-left -->
                        Back to {{ $supplier->name }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 py-8" x-data="{
        anonymous: {{ old('anonymous', false) ? 'true' : 'false' }},
        comment: '{{ old('comment', '') }}',
        dealAgain: {{ old('deal_again', true) ? 'true' : 'false' }}
    }">
        <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6">
            @csrf

            <input type="hidden" name="reviewed_supplier_id" value="{{ $supplier->id }}">
            <input type="hidden" name="reviewer_supplier_id" value="{{ auth()->user()->supplier->id ?? '' }}">
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

            <!-- Deal Information -->
            <div class="card p-6">
                <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                    <!-- TODO: ICON: info -->
                    Deal Information
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Deal Date -->
                    <div>
                        <label class="block text-sm font-semibold mb-2" for="deal_date">
                            Deal Date <span class="text-destructive">*</span>
                        </label>
                        <input
                            class="input w-full @error('deal_date') border-destructive @enderror"
                            type="date"
                            name="deal_date"
                            id="deal_date"
                            value="{{ old('deal_date') }}"
                            max="{{ date('Y-m-d') }}"
                            required
                        >
                        <p class="text-xs text-muted-foreground mt-1">When did you last work with this supplier?</p>
                        @error('deal_date')
                            <p class="text-destructive text-sm mt-2 flex items-center gap-1">
                                <!-- TODO: ICON: warning -->
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Country -->
                    <div>
                        <label class="block text-sm font-semibold mb-2" for="country">
                            Country (ISO2 Code)
                        </label>
                        <input
                            class="input w-full @error('country') border-destructive @enderror"
                            type="text"
                            name="country"
                            id="country"
                            maxlength="2"
                            value="{{ old('country') }}"
                            placeholder="e.g., US, JO, DE"
                        >
                        <p class="text-xs text-muted-foreground mt-1">2-letter country code (optional)</p>
                        @error('country')
                            <p class="text-destructive text-sm mt-2 flex items-center gap-1">
                                <!-- TODO: ICON: warning -->
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Rating Metrics -->
            <div class="card p-6">
                <h2 class="text-xl font-bold mb-2 flex items-center gap-2">
                    <!-- TODO: ICON: star -->
                    Rate Your Experience
                </h2>
                <p class="text-muted-foreground mb-6">Rate each aspect from 1 (poor) to 10 (excellent)</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach([
                        'quality' => ['label' => 'Product quality or the service Provided', 'icon' => 'star', 'description' => 'Compliance with the advertisement or description'],
                        'accuracy' => ['label' => 'Credibility, clarity & accuracy of information', 'icon' => 'shield-check', 'description' => 'Integrity in dealing'],
                        'communication' => ['label' => 'Customer Service and efficiency of response', 'icon' => 'headset', 'description' => 'Effectiveness of support provided'],
                        'cost' => ['label' => 'Prices Suitability for the product or service', 'icon' => 'credit-card', 'description' => 'Price level compared to its equivalent'],
                        'compliance' => ['label' => 'Financial dealing', 'icon' => 'banknote', 'description' => 'Transparency + fulfilment of commitments'],
                        'timeliness' => ['label' => 'Adherence to delivery deadlines and timely completion', 'icon' => 'clock', 'description' => 'Compliance with the agreed schedule without delay'],
                        'support' => ['label' => 'After-sale Service', 'icon' => 'wrench', 'description' => 'Quality of support and follow up after sale']
                    ] as $metric => $data)
                    <div x-data="{ value: {{ old($metric, 5) }} }">
                        <label class="block mb-3" for="{{ $metric }}">
                            <div class="flex items-center gap-2 mb-1">
                                <!-- TODO: ICON: {{ $data['icon'] }} -->
                                <span class="font-semibold">{{ $data['label'] }}</span>
                                <span class="text-destructive">*</span>
                            </div>
                            <span class="text-xs text-muted-foreground">{{ $data['description'] }}</span>
                        </label>
                        <div class="flex items-center gap-4">
                            <input
                                type="range"
                                name="{{ $metric }}"
                                id="{{ $metric }}"
                                min="1"
                                max="10"
                                step="1"
                                x-model="value"
                                class="range w-full"
                                required
                            >
                            <span class="font-bold text-lg w-8 text-center" x-text="value"></span>
                        </div>
                        @error($metric)
                            <p class="text-destructive text-sm mt-2 flex items-center gap-1">
                                <!-- TODO: ICON: warning -->
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Would Deal Again -->
            <div class="card p-6">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h3 class="text-lg font-bold mb-2 flex items-center gap-2">
                            <!-- TODO: ICON: thumbs-up -->
                            Would you work with this supplier again?
                        </h3>
                        <p class="text-muted-foreground text-sm">
                            This helps others understand if you'd recommend this supplier for future business.
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input
                                type="checkbox"
                                name="deal_again"
                                id="deal_again"
                                x-model="dealAgain"
                                class="sr-only peer"
                                {{ old('deal_again', true) ? 'checked' : '' }}
                            >
                            <div class="w-11 h-6 bg-muted peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        </label>
                    </div>
                </div>
                <div class="mt-4 p-3 rounded-lg transition-colors" :class="dealAgain ? 'bg-primary/10 border border-primary/20' : 'bg-muted'">
                    <p class="text-sm font-medium" x-text="dealAgain ? 'Yes, I would work with them again' : 'No, I would not work with them again'"></p>
                </div>
            </div>

            <!-- Anonymous Review -->
            <div class="card p-6">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h3 class="text-lg font-bold mb-2 flex items-center gap-2">
                            <!-- TODO: ICON: lock -->
                            Post Anonymously
                        </h3>
                        <p class="text-muted-foreground text-sm">
                            Your review will be posted without your company name or personal details. Note: Anonymous reviews cannot include comments.
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input
                                type="checkbox"
                                name="anonymous"
                                id="anonymous"
                                x-model="anonymous"
                                class="sr-only peer"
                                {{ old('anonymous') ? 'checked' : '' }}
                            >
                            <div class="w-11 h-6 bg-muted peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        </label>
                    </div>
                </div>
                <div class="mt-4 p-3 rounded-lg bg-muted" x-show="anonymous">
                    <p class="text-sm flex items-center gap-2">
                        <!-- TODO: ICON: info -->
                        <span>Your review will be displayed as "Anonymous Reviewer"</span>
                    </p>
                </div>
            </div>

            <!-- Comment -->
            <div class="card p-6">
                <h3 class="text-lg font-bold mb-2 flex items-center gap-2">
                    <!-- TODO: ICON: file-text -->
                    Additional Comments
                    <span class="text-sm font-normal text-muted-foreground" x-show="anonymous">(disabled for anonymous reviews)</span>
                </h3>
                <p class="text-muted-foreground text-sm mb-4">
                    Share any additional thoughts about your experience (optional, max 160 characters)
                </p>
                <textarea
                    class="textarea w-full @error('comment') border-destructive @enderror"
                    name="comment"
                    id="comment"
                    rows="4"
                    maxlength="160"
                    :disabled="anonymous"
                    x-model="comment"
                    placeholder="Example: Great communication and fast delivery. Would recommend for urgent projects."
                >{{ old('comment') }}</textarea>
                <div class="flex justify-between items-center mt-2">
                    <p class="text-xs text-muted-foreground">
                        <span x-text="comment.length"></span>/160 characters
                    </p>
                    @error('comment')
                        <p class="text-destructive text-sm flex items-center gap-1">
                            <!-- TODO: ICON: warning -->
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Submit Section -->
            <div class="card p-6 bg-muted/50">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="text-center md:text-left">
                        <p class="font-semibold mb-1">Ready to submit your review?</p>
                        <p class="text-sm text-muted-foreground">Your feedback helps the community make better decisions</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                        <a href="{{ route('suppliers.show', $supplier) }}" class="btn btn-default btn-lg">
                            <!-- TODO: ICON: x -->
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg cursor-pointer">
                            <!-- TODO: ICON: check -->
                            Submit Review
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Help Section -->
        <div class="mt-8 p-6 bg-primary/5 border border-primary/20 rounded-xl">
            <h4 class="font-bold mb-3 flex items-center gap-2">
                Review Guidelines
            </h4>
            <ul class="space-y-2 text-sm text-muted-foreground">
                <li class="flex items-start gap-2">
                    <!-- TODO: ICON: check -->
                    <span>Be honest and objective about your experience</span>
                </li>
                <li class="flex items-start gap-2">
                    <!-- TODO: ICON: check -->
                    <span>Focus on specific aspects like delivery, quality, and communication</span>
                </li>
                <li class="flex items-start gap-2">
                    <!-- TODO: ICON: check -->
                    <span>Avoid offensive language or personal attacks</span>
                </li>
                <li class="flex items-start gap-2">
                    <!-- TODO: ICON: check -->
                    <span>Your review will be visible to all users once submitted</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
