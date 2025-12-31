<dialog id="review-modal" class="dialog w-full sm:max-w-[425px]" onclick="if (event.target === this) this.close()">
    <div>
        <header class="flex justify-between items-start mb-4">
            <h2 class="font-bold text-xl">Write a Review</h2>
            <button type="button" onclick="this.closest('dialog').close()" class="text-muted-foreground hover:text-foreground cursor-pointer">
                <!-- TODO: ICON: x -->
                ✕
            </button>
        </header>
        
        <p class="text-muted-foreground mb-6">
            Enter the website domain of the supplier you want to review. If they aren't in our system yet, we'll add them for you.
        </p>

        <form action="{{ route('reviews.initiate') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="domain" class="block text-sm font-medium mb-2">Supplier Domain</label>
                <div class="relative">
                    <!-- TODO: ICON: globe -->
                    <input 
                        type="text" 
                        name="domain" 
                        id="domain" 
                        class="input pl-10 w-full" 
                        placeholder="example.com" 
                        required
                        autofocus
                    >
                </div>
                @error('domain')
                    <p class="text-destructive text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <footer class="flex justify-end gap-2 mt-6">
                <button class="btn btn-outline" type="button" onclick="this.closest('dialog').close()">Cancel</button>
                <button class="btn btn-primary" type="submit">
                    Continue
                    <!-- TODO: ICON: arrow-right -->
                </button>
            </footer>
        </form>
    </div>
</dialog>
