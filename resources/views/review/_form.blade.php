@php
    $minDealDate = isset($review) ? $review->created_at->subYears(3) : now()->subYears(3);
    // Ensure we have a Y-m-d string for JS comparison or attribute
    $minDealDateString = $minDealDate->format('Y-m-d');
@endphp

<div
    class="space-y-6"
    x-data="{
        anonymous: {{ old('anonymous', $review->anonymous ?? false) ? 'true' : 'false' }},
        __comment: null,
        comment: '{{ old('comment', $review->comment ?? '') }}',
        dealAgain: '{{ old('deal_again', $review->deal_again ?? true) ? '1' : '0' }}',
        dealDate: '{{ old('deal_date', isset($review) ? $review->deal_date->format('Y-m-d') : '') }}',
        minDate: '{{ $minDealDateString }}',
        get isDealDateValid() {
            if (!this.dealDate) return true;
            const date = new Date(this.dealDate);
            const minDate = new Date(this.minDate);
            // Reset times to ensure pure date comparison
            date.setHours(0, 0, 0, 0);
            minDate.setHours(0, 0, 0, 0);
            return date >= minDate;
        }
    }"
    x-init="if (anonymous) {
        __comment = comment;
        comment = '';
    }
    
    $watch('anonymous', (value) => {
        if (value) {
            __comment = comment;
            comment = '';
            return;
        }
    
        if (!value && typeof __comment !== 'undefined') {
            comment = __comment;
            __comment = null;
        }
    })"
>

    @if (!isset($review))
        <input
            name="reviewed_supplier_id"
            type="hidden"
            value="{{ $supplier->id }}"
        >
        <input
            name="reviewer_supplier_id"
            type="hidden"
            value="{{ auth()->user()->supplier->id ?? '' }}"
        >
        <input
            name="user_id"
            type="hidden"
            value="{{ auth()->id() }}"
        >
    @endif

    <!-- Deal Information -->
    <div class="card p-6">
        <h2 class="sr-only">Deal Information</h2>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Deal Date -->
            <div>
                <label
                    class="mb-2 block text-sm font-semibold"
                    for="deal_date"
                >
                    Deal Date with {{ $supplier->name }} <span class="text-destructive">*</span>
                </label>
                <div class="relative">
                    <input
                        class="input @error('deal_date') border-destructive @enderror w-full pl-9"
                        id="deal_date"
                        name="deal_date"
                        type="date"
                        x-model="dealDate"
                        max="{{ date('Y-m-d') }}"
                        {{-- required --}}
                    >
                    <div class="text-muted-foreground pointer-events-none absolute left-3 top-1/2 -translate-y-1/2">
                        <i class="hgi hgi-stroke hgi-calendar-03"></i>
                    </div>
                </div>
                <p class="text-muted-foreground mt-1 text-xs">When did you last work with this vendor?</p>
                <p
                    class="text-destructive mt-2 flex items-start gap-1 text-sm"
                    x-show="!isDealDateValid"
                    x-cloak
                >
                    <i class="hgi hgi-stroke hgi-alert-square"></i>
                    Deal date cannot be more than 3 years
                    old{{ isset($review) ? ' relative to the review date' : '' }}.
                </p>
                @error('deal_date')
                    <p class="text-destructive mt-2 flex items-center gap-1 text-sm">
                        <i class="hgi hgi-stroke hgi-alert-square"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Review Date (Today/Created At) -->
            <div>
                <label class="mb-2 block text-sm font-semibold">
                    Review Date
                </label>
                <div class="relative">
                    <input
                        class="input bg-muted text-muted-foreground w-full cursor-not-allowed pl-9"
                        type="text"
                        value="{{ isset($review) ? $review->created_at->format('F j, Y') : now()->format('F j, Y') }}"
                        disabled
                        readonly
                    >
                    <div class="text-muted-foreground pointer-events-none absolute left-3 top-1/2 -translate-y-1/2">
                        <i class="hgi hgi-stroke hgi-calendar-03"></i>
                    </div>
                </div>
                <p class="text-muted-foreground mt-1 text-xs">Reviews are dated automatically.</p>
            </div>
        </div>
    </div>

    <!-- Rating Metrics -->
    <div class="card p-6">
        <div>
            <h2 class="mb-2 flex items-center gap-2 text-xl font-bold">
                <i class="hgi hgi-stroke hgi-star font-normal"></i>
                We assess our Experience with the above business partner based on
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
                <div x-data="{ value: {{ old($metric, $review->$metric ?? 5) }} }">
                    <label
                        class="min-h-19 mb-3 block"
                        for="{{ $metric }}"
                    >
                        <div class="mb-1 flex items-center gap-2">
                            <i class="hgi hgi-stroke {{ $data['icon'] }}"></i>
                            <span class="font-semibold">{{ $data['label'] }}</span>
                            <span class="text-destructive">*</span>
                        </div>
                        <span class="text-muted-foreground text-xs">{{ $data['description'] }}</span>
                    </label>
                    <div class="flex items-center gap-4">
                        <input
                            class="input w-full"
                            id="{{ $metric }}"
                            name="{{ $metric }}"
                            type="range"
                            min="1"
                            max="10"
                            step="1"
                            x-model="value"
                            required
                        >
                        <span
                            class="w-8 text-center text-lg font-bold"
                            x-text="value"
                        ></span>
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

    <!-- Will Deal Again -->
    <div class="card p-6">
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="mb-2 flex items-center gap-2 text-lg font-bold">
                    <i class="hgi hgi-stroke hgi-thumbs-up font-normal"></i>
                    Will you work with this vendor again?
                </h3>
                <p class="text-muted-foreground text-sm">
                    This helps others understand if you'd recommend this vendor for future business.
                </p>
            </div>

            <div class="flex gap-4">
                <label class="flex-1 cursor-pointer">
                    <input
                        class="peer sr-only"
                        name="deal_again"
                        type="radio"
                        value="1"
                        x-model="dealAgain"
                    >
                    <div
                        class="border-muted bg-card text-muted-foreground hover:bg-muted/50 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary flex flex-col items-center justify-center gap-2 rounded-lg border-2 p-4 transition-all">
                        <i class="hgi hgi-stroke hgi-thumbs-up text-2xl"></i>
                        <span class="font-semibold">Yes</span>
                    </div>
                </label>

                <label class="flex-1 cursor-pointer">
                    <input
                        class="peer sr-only"
                        name="deal_again"
                        type="radio"
                        value="0"
                        x-model="dealAgain"
                    >
                    <div
                        class="border-muted bg-card text-muted-foreground hover:bg-muted/50 peer-checked:border-destructive peer-checked:bg-destructive/5 peer-checked:text-destructive flex flex-col items-center justify-center gap-2 rounded-lg border-2 p-4 transition-all">
                        <i class="hgi hgi-stroke hgi-thumbs-down text-2xl"></i>
                        <span class="font-semibold">No</span>
                    </div>
                </label>
            </div>
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
                    <input
                        class="peer sr-only"
                        id="anonymous"
                        name="anonymous"
                        type="checkbox"
                        x-model="anonymous"
                    >
                    <div
                        class="bg-muted peer-focus:ring-primary/30 peer-checked:bg-primary peer h-6 w-11 rounded-full after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4">
                    </div>
                </label>
            </div>
        </div>
        <div
            class="bg-muted mt-4 rounded-lg p-3"
            x-show="anonymous"
        >
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
                <span
                    class="text-muted-foreground text-sm font-normal"
                    x-show="anonymous"
                >(disabled for anonymous reviews)</span>
            </h3>
            <p class="text-muted-foreground mb-4 text-sm">
                Share any additional thoughts about your experience (optional, max 160 characters)
            </p>
        </div>
        <div>
            <textarea
                class="textarea @error('comment') border-destructive @enderror w-full"
                id="comment"
                name="comment"
                rows="4"
                maxlength="160"
                :disabled="anonymous"
                x-model="comment"
                placeholder="Example: Great communication and fast delivery. Will recommend for urgent projects."
            ></textarea>
            <div class="flex items-center justify-between">
                <p class="text-muted-foreground mt-2 text-xs">
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
                <p class="text-muted-foreground text-sm">Your feedback helps the community make better decisions</p>
            </div>
            <div class="flex w-full flex-col gap-3 sm:flex-row md:w-auto">
                <a
                    class="btn-lg-outline"
                    href="{{ route('suppliers.show', isset($review) ? $review->reviewedSupplier : $supplier) }}"
                >
                    <i class="hgi hgi-stroke hgi-cancel-01"></i>
                    Cancel
                </a>
                <div
                    class="inline-block"
                    data-side="bottom"
                    :data-tooltip="!isDealDateValid ? 'Deal date must be less than 3 years old' : null"
                >
                    <button
                        class="btn-primary btn-lg w-full cursor-pointer disabled:cursor-not-allowed disabled:opacity-50"
                        type="submit"
                        :disabled="!isDealDateValid"
                    >
                        <i class="hgi hgi-stroke hgi-sent"></i>
                        {{ isset($review) ? 'Update Review' : 'Submit Review' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
