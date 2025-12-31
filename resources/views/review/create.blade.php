@extends('components.layouts.app')

@section('content')
    <div class="bg-background text-foreground min-h-screen">
        <!-- Breadcrumb -->
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-5xl px-6 py-4">
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
        <div class="bg-card border-border border-b">
            <div class="mx-auto max-w-5xl px-6 py-8">
                <div class="flex items-start gap-6">
                    <div class="bg-primary/10 flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl">
                        <i class="hgi hgi-stroke hgi-quill-write-01 text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="mb-2 text-3xl font-bold md:text-4xl">Write a Review</h1>
                        <p class="text-muted-foreground text-lg">Share your experience with <span
                                  class="text-foreground font-semibold">{{ $supplier->name }}</span></p>
                        <a href="{{ route('suppliers.show', $supplier) }}"
                           class="text-primary mt-2 inline-flex items-center gap-1 text-sm hover:underline">
                            <i class="hgi hgi-stroke hgi-arrow-left-02"></i>
                            Back to {{ $supplier->name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-5xl px-6 py-8"
             x-data="{
                 anonymous: {{ old('anonymous', false) ? 'true' : 'false' }},
                 comment: '{{ old('comment', '') }}',
                 dealAgain: {{ old('deal_again', true) ? 'true' : 'false' }}
             }">
            <form action="{{ route('reviews.store') }}"
                  method="POST"
                  class="space-y-6">
                @csrf

                <input type="hidden"
                       name="reviewed_supplier_id"
                       value="{{ $supplier->id }}">
                <input type="hidden"
                       name="reviewer_supplier_id"
                       value="{{ auth()->user()->supplier->id ?? '' }}">
                <input type="hidden"
                       name="user_id"
                       value="{{ auth()->id() }}">

                <!-- Deal Information -->
                <div class="card p-6">
                    <h2 class="mb-6 flex items-center gap-2 text-xl font-bold">
                        <i class="hgi hgi-stroke hgi-information-circle font-normal"></i>
                        Deal Information
                    </h2>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Deal Date -->
                        <div>
                            <label class="mb-2 block text-sm font-semibold"
                                   for="deal_date">
                                Deal Date <span class="text-destructive">*</span>
                            </label>
                            <input class="input @error('deal_date') border-destructive @enderror w-full"
                                   type="date"
                                   name="deal_date"
                                   id="deal_date"
                                   value="{{ old('deal_date') }}"
                                   max="{{ date('Y-m-d') }}"
                                   required>
                            <p class="text-muted-foreground mt-1 text-xs">When did you last work with this supplier?</p>
                            @error('deal_date')
                                <p class="text-destructive mt-2 flex items-center gap-1 text-sm">
                                    <i class="hgi hgi-stroke hgi-alert-square"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Country -->
                        <div>
                            <label class="mb-2 block text-sm font-semibold"
                                   for="country">
                                Country (ISO2 Code)
                            </label>
                            <input class="input @error('country') border-destructive @enderror w-full"
                                   type="text"
                                   name="country"
                                   id="country"
                                   maxlength="2"
                                   value="{{ old('country') }}"
                                   placeholder="e.g., US, JO, DE">
                            <p class="text-muted-foreground mt-1 text-xs">2-letter country code (optional)</p>
                            @error('country')
                                <p class="text-destructive mt-2 flex items-center gap-1 text-sm">
                                    <i class="hgi hgi-stroke hgi-alert-square"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Rating Metrics -->
                <div class="card p-6">
                    <div>
                        <h2 class="mb-2 flex items-center gap-2 text-xl font-bold">
                            <i class="hgi hgi-stroke hgi-star font-normal"></i>
                            Rate Your Experience
                        </h2>
                        <p class="text-muted-foreground mb-6">Rate each aspect from 1 (poor) to 10 (excellent)</p>

                    </div>
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        @foreach ([
            'quality' => ['label' => 'Product quality or the service Provided', 'icon' => 'hgi-stars', 'description' => 'Compliance with the advertisement or description'],
            'accuracy' => ['label' => 'Credibility, clarity & accuracy of information', 'icon' => 'hgi-shield-energy', 'description' => 'Integrity in dealing'],
            'communication' => ['label' => 'Customer Service and efficiency of response', 'icon' => 'hgi-headset', 'description' => 'Effectiveness of support provided'],
            'cost' => ['label' => 'Prices Suitability for the product or service', 'icon' => 'hgi-credit-card', 'description' => 'Price level compared to its equivalent'],
            'compliance' => ['label' => 'Financial dealing', 'icon' => 'hgi-bank', 'description' => 'Transparency + fulfilment of commitments'],
            'timeliness' => ['label' => 'Adherence to delivery deadlines and timely completion', 'icon' => 'hgi-timer-01', 'description' => 'Compliance with the agreed schedule without delay'],
            'support' => ['label' => 'After-sale Service', 'icon' => 'hgi-wrench-01', 'description' => 'Quality of support and follow up after sale'],
        ] as $metric => $data)
                            <div x-data="{ value: {{ old($metric, 5) }} }">
                                <label class="mb-3 block"
                                       for="{{ $metric }}">
                                    <div class="mb-1 flex items-center gap-2">
                                        <i class="hgi hgi-stroke {{ $data['icon'] }}"></i>
                                        <span class="font-semibold">{{ $data['label'] }}</span>
                                        <span class="text-destructive">*</span>
                                    </div>
                                    <span class="text-muted-foreground text-xs">{{ $data['description'] }}</span>
                                </label>
                                <div class="flex items-center gap-4">
                                    <input type="range"
                                           name="{{ $metric }}"
                                           id="{{ $metric }}"
                                           min="1"
                                           max="10"
                                           step="1"
                                           x-model="value"
                                           class="input w-full"
                                           required>
                                    <span class="w-8 text-center text-lg font-bold"
                                          x-text="value"></span>
                                </div>
                                @error($metric)
                                    <p class="text-destructive mt-2 flex items-center gap-1 text-sm">
                                        <i class="hgi hgi-stroke hgi-alert-square"></i>
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
                        <div>
                            <h3 class="mb-2 flex items-center gap-2 text-lg font-bold">
                                <i class="hgi hgi-stroke hgi-thumbs-up font-normal"></i>
                                Would you work with this supplier again?
                            </h3>
                            <p class="text-muted-foreground text-sm">
                                This helps others understand if you'd recommend this supplier for future business.
                            </p>
                        </div>
                        <div class="shrink-0">
                            <label class="relative inline-flex cursor-pointer items-center">
                                <input type="checkbox"
                                       name="deal_again"
                                       id="deal_again"
                                       x-model="dealAgain"
                                       class="peer sr-only"
                                       {{ old('deal_again', true) ? 'checked' : '' }}>
                                <div
                                     class="bg-muted peer-focus:ring-primary/30 peer-checked:bg-primary peer h-6 w-11 rounded-full after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 rounded-lg p-3 transition-colors"
                         :class="dealAgain ? 'bg-primary/10 border border-primary/20' : 'bg-muted'">
                        <p class="text-sm font-medium"
                           x-text="dealAgain ? 'Yes, I would work with them again' : 'No, I would not work with them again'">
                        </p>
                    </div>
                </div>

                <!-- Anonymous Review -->
                <div class="card p-6">
                    <div class="flex items-start gap-6">
                        <div>
                            <h3 class="mb-2 flex items-center gap-2 text-lg font-bold">
                                <i class="hgi hgi-stroke hgi-square-lock-02 font-normal"></i>
                                Post Anonymously
                            </h3>
                            <p class="text-muted-foreground text-sm">
                                Your review will be posted without your company name or personal details. Note: Anonymous
                                reviews cannot include comments.
                            </p>
                        </div>
                        <div class="shrink-0">
                            <label class="relative inline-flex cursor-pointer items-center">
                                <input type="checkbox"
                                       name="anonymous"
                                       id="anonymous"
                                       x-model="anonymous"
                                       class="peer sr-only"
                                       {{ old('anonymous') ? 'checked' : '' }}>
                                <div
                                     class="bg-muted peer-focus:ring-primary/30 peer-checked:bg-primary peer h-6 w-11 rounded-full after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="bg-muted mt-4 rounded-lg p-3"
                         x-show="anonymous">
                        <p class="flex items-center gap-2 text-sm">
                            <i class="hgi hgi-stroke hgi-information-circle font-normal"></i>
                            <span>Your review will be displayed as "Anonymous Reviewer"</span>
                        </p>
                    </div>
                </div>

                <!-- Comment -->
                <div class="card p-6">
                    <div>
                        <h3 class="mb-2 flex items-center gap-2 text-lg font-bold">
                            <i class="hgi hgi-stroke hgi-note-04 font-normal"></i>
                            Additional Comments
                            <span class="text-muted-foreground text-sm font-normal"
                                  x-show="anonymous">(disabled for anonymous reviews)</span>
                        </h3>
                        <p class="text-muted-foreground mb-4 text-sm">
                            Share any additional thoughts about your experience (optional, max 160 characters)
                        </p>
                    </div>
                    <div>

                    <textarea class="textarea @error('comment') border-destructive @enderror w-full"
                              name="comment"
                              id="comment"
                              rows="4"
                              maxlength="160"
                              :disabled="anonymous"
                              x-model="comment"
                              placeholder="Example: Great communication and fast delivery. Would recommend for urgent projects.">{{ old('comment') }}</textarea>
                    <div class="flex items-center justify-between">
                        <p class="mt-2 text-muted-foreground text-xs">
                            <span x-text="comment.length"></span>/160 characters
                        </p>
                        @error('comment')
                            <p class="text-destructive flex items-center gap-1 text-sm">
                                <i class="hgi hgi-stroke hgi-alert-square"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    </div>
                </div>

                <!-- Submit Section -->
                <div class="card bg-muted/50 p-6">
                    <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                        <div class="text-center md:text-left">
                            <p class="mb-1 font-semibold">Ready to submit your review?</p>
                            <p class="text-muted-foreground text-sm">Your feedback helps the community make better
                                decisions</p>
                        </div>
                        <div class="flex w-full flex-col gap-3 sm:flex-row md:w-auto">
                            <a href="{{ route('suppliers.show', $supplier) }}"
                               class="btn btn-lg">
                                <i class="hgi hgi-stroke hgi-cancel-01"></i>
                                Cancel
                            </a>
                            <button type="submit"
                                    class="btn btn-primary btn-lg cursor-pointer">
                                <i class="hgi hgi-stroke hgi-sent"></i>
                                Submit Review
                            </button>
                        </div>
                    </div>
                </div>
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
