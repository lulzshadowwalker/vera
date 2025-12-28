<div id="review-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        
        <h2 class="uk-modal-title font-bold text-xl mb-4">Write a Review</h2>
        
        <p class="text-muted-foreground mb-6">
            Enter the website domain of the supplier you want to review. If they aren't in our system yet, we'll add them for you.
        </p>

        <form action="{{ route('reviews.initiate') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="domain" class="block text-sm font-medium mb-2">Supplier Domain</label>
                <div class="relative">
                    <uk-icon icon="globe" class="absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground w-4 h-4"></uk-icon>
                    <input 
                        type="text" 
                        name="domain" 
                        id="domain" 
                        class="uk-input pl-10" 
                        placeholder="example.com" 
                        required
                        autofocus
                    >
                </div>
                @error('domain')
                    <p class="text-destructive text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-2 mt-6">
                <button class="uk-btn uk-btn-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-btn uk-btn-primary" type="submit">
                    Continue
                    <uk-icon icon="arrow-right" class="ml-2 w-4 h-4"></uk-icon>
                </button>
            </div>
        </form>
    </div>
</div>
