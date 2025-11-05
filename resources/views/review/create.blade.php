@extends('components.layouts.app')

@section('content')
<div class="px-6 lg:px-8 bg-background text-foreground my-8">
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
                <uk-input-date name="deal_date" id="deal_date" cls-custom="uk-input-fake" required></uk-input-date>
            </div>
        </div>

        <div>
            <label class="uk-form-label" for="country">Country</label>
            <div class="uk-form-controls">
                <input class="uk-input" type="text" name="country" id="country" maxlength="2">
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
                <uk-input-range name="{{ $metric }}" id="{{ $metric }}" min="1" max="10" step="1" value="3" required></uk-input-range>
            </div>
        </div>
        @endforeach
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default">
            <div class="uk-card-body">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h3 class="uk-card-title">Would you deal again?</h3>
                        <p class="uk-text-muted">Indicate if you would recommend or deal with this supplier again.</p>
                    </div>
                    <div>
                        <input class="uk-toggle-switch uk-toggle-switch-primary" type="checkbox" name="deal_again" id="deal_again" checked>
                        <label for="deal_again"></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default">
            <div class="uk-card-body">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h3 class="uk-card-title">Anonymous Review</h3>
                        <p class="uk-text-muted">Post this review anonymously.</p>
                    </div>
                    <div>
                        <input class="uk-toggle-switch uk-toggle-switch-primary" type="checkbox" name="anonymous" id="anonymous">
                        <label for="anonymous"></label>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <label class="uk-form-label" for="comment">Comment</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" name="comment" id="comment" rows="5" maxlength="160"></textarea>
            </div>
        </div>

        <div>
            <button type="submit" class="uk-btn uk-btn-primary">Submit Review</button>
        </div>
    </form>
</div>
@endsection
