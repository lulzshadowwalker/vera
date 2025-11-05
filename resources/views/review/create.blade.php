@extends('components.layouts.app')

@section('content')
<div class="px-6 lg:px-8 bg-background text-foreground my-8" x-data="{ anonymous: {{ old('anonymous', false) ? 'true' : 'false' }}, comment: '{{ old('comment', '') }}' }">
    <header class="max-w-7xl mx-auto">
        <h1 class="uk-h1 mb-4">Create Review for {{ $supplier->name }}</h1>
        <p class="tracking-wide leading-6 text-muted-foreground max-w-prose mb-8">Share your experience working with {{ $supplier->name }} by filling out the form below. Your feedback helps others make informed decisions.</p>
    </header>

    <form action="{{ route('reviews.store') }}" method="POST" class="uk-form-stacked space-y-6 max-w-7xl mx-auto">
        @csrf

        <input type="hidden" name="reviewed_supplier_id" value="{{ $supplier->id }}">
        <input type="hidden" name="reviewer_supplier_id" value="{{ auth()->user()->supplier->id ?? '' }}">
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <div>
            <label class="uk-form-label" for="deal_date">Deal Date</label>
            <div class="uk-form-controls">
                <input class="uk-input @error('deal_date') uk-form-destructive @enderror" type="date" name="deal_date" id="deal_date" value="{{ old('deal_date') }}">
                @error('deal_date')
                    <p class="text-destructive mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label class="uk-form-label" for="country">Country</label>
            <div class="uk-form-controls">
                <input class="uk-input @error('country') uk-form-destructive @enderror" type="text" name="country" id="country" maxlength="2" value="{{ old('country') }}">
                @error('country')
                    <p class="text-destructive mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="uk-card uk-card-default">
            <div class="uk-card-body">
                <h2 class="uk-h4 mb-6">Ratings</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach(['cost', 'speed', 'communication', 'reliability', 'quality', 'support', 'flexibility', 'innovation', 'value', 'timeliness'] as $metric)
        <div>
            <label class="uk-form-label" for="{{ $metric }}">{{ ucfirst($metric) }}</label>
            <div class="uk-form-controls">
                <uk-input-range name="{{ $metric }}" id="{{ $metric }}" min="1" max="10" step="1" value="{{ old($metric, 3) }}" required></uk-input-range>
                @error($metric)
                    <p class="text-destructive mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>
        @endforeach
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default py-2 px-4">
            <div class="uk-card-body">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h3 class="uk-card-title font-semibold">Would you deal again?</h3>
                        <p class="text-muted-foreground mt-1 tracking-wide leading-6">Indicate if you would recommend or deal with this supplier again.</p>
                    </div>
                    <div>
                        <input class="uk-toggle-switch uk-toggle-switch-primary" type="checkbox" name="deal_again" id="deal_again" {{ old('deal_again') ? 'checked' : '' }}>
                        <label for="deal_again"></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default py-2 px-4">
            <div class="uk-card-body">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h3 class="uk-card-title font-semibold">Anonymous Review</h3>
                        <p class="text-muted-foreground mt-1 tracking-wide leading-6">Post this review anonymously. Note: Anonymous reviews cannot include comments.</p>
                    </div>
                    <div>
                        <input class="uk-toggle-switch uk-toggle-switch-primary" type="checkbox" name="anonymous" id="anonymous" x-model="anonymous" {{ old('anonymous') ? 'checked' : '' }}>
                        <label for="anonymous"></label>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <label class="uk-form-label" for="comment">Comment <span x-show="anonymous" class="text-muted-foreground">(disabled for anonymous reviews)</span></label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea @error('comment') uk-form-destructive @enderror" name="comment" id="comment" rows="5" maxlength="160" :disabled="anonymous" x-model="comment">{{ old('comment') }}</textarea>
                @error('comment')
                    <p class="text-destructive mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="uk-btn uk-btn-primary">Submit Review</button>
        </div>
    </form>
</div>
@endsection
