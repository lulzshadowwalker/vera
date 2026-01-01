<dialog id="review-modal"
        class="dialog w-full sm:max-w-[425px]"
        onclick="if (event.target === this) this.close()">
    <div>
        <header class="flex flex-row items-start justify-between">
            <h2 class="text-xl font-bold">Write a Review</h2>
            <button type="button"
                    onclick="this.closest('dialog').close()"
                    class="text-muted-foreground hover:text-foreground cursor-pointer">
                <i class="hgi hgi-stroke hgi-cancel-01"></i>
            </button>
        </header>
        <p class="text-muted-foreground mb-4">
            Enter the website domain of the vendor you want to review. If they aren't in our system yet, we'll add
            them for you.
        </p>

        <form action="{{ route('reviews.initiate') }}"
              method="POST"
              class="space-y-4">
            @csrf

            <div>
                <label for="domain"
                       class="mb-2 block text-sm font-medium">Vendor Domain</label>
                <div class="flex w-full items-stretch">
                    <span class="flex items-center bg-muted border border-input border-r-0 px-3 rounded-l-md text-muted-foreground text-sm">https://</span>
                    <input type="text"
                           name="domain"
                           id="domain"
                           class="input input-lg w-full rounded-l-none"
                           placeholder="example.com"
                           required
                           autofocus>
                </div>
                @error('domain')
                    <p class="text-destructive mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <footer class="mt-6 flex justify-end gap-2">
                <button class="btn btn-outline"
                        type="button"
                        onclick="this.closest('dialog').close()">Cancel</button>
                <button class="btn btn-primary"
                        type="submit">
                    Continue
                    <i class="hgi hgi-stroke hgi-arrow-right-02"></i>
                </button>
            </footer>
        </form>
    </div>
</dialog>
