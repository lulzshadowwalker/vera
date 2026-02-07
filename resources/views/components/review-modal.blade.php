<dialog
    class="dialog w-full sm:max-w-[425px]"
    id="review-modal"
    onclick="if (event.target === this) this.close()"
    x-data="{
        domain: '',
        userDomain: '{{ auth()->user()?->supplier?->domain ?? '' }}',
        get isSelfReview() {
            if (!this.domain || !this.userDomain) return false;
            const cleanDomain = (d) => d.toLowerCase().replace(/^(https?:\/\/)?(www\.)?/, '');
            return cleanDomain(this.domain) === cleanDomain(this.userDomain);
        }
    }"
>
    <div>
        <header class="flex flex-row items-start justify-between">
            <h2 class="text-xl font-bold">Assess a Vendor</h2>
            <button
                class="text-muted-foreground hover:text-foreground cursor-pointer"
                type="button"
                onclick="this.closest('dialog').close()"
            >
                <i class="hgi hgi-stroke hgi-cancel-01"></i>
            </button>
        </header>
        <p class="text-muted-foreground mb-4">
            Enter the website domain of the vendor you want to assess. If they aren't in our system yet, we'll add
            them for you.
        </p>

        <form
            class="space-y-4"
            action="{{ route('reviews.initiate') }}"
            method="POST"
        >
            @csrf

            <div>
                <label
                    class="mb-2 block text-sm font-medium"
                    for="domain"
                >Vendor Domain</label>
                <div class="flex w-full items-stretch">
                    <span
                        class="bg-muted border-input text-muted-foreground flex items-center rounded-l-md border border-r-0 px-3 text-base font-black"
                    >
                        @
                    </span>
                    <input
                        class="input input-lg w-full rounded-l-none"
                        id="domain"
                        name="domain"
                        type="text"
                        x-model="domain"
                        placeholder="example.com"
                        required
                        autofocus
                    >
                </div>
                <p
                    class="text-destructive mt-1 text-sm"
                    x-show="isSelfReview"
                    x-cloak
                >
                    You cannot assess your own vendor.
                </p>
                @error('domain')
                    <p class="text-destructive mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <footer class="mt-6 flex justify-end gap-2">
                <button
                    class="btn-outline"
                    type="button"
                    onclick="this.closest('dialog').close()"
                >Cancel</button>
                <div
                    class="inline-block"
                    :title="isSelfReview ? 'You cannot assess your own vendor' : ''"
                >
                    <button
                        class="btn btn-primary disabled:cursor-not-allowed disabled:opacity-50"
                        type="submit"
                        :disabled="isSelfReview"
                    >
                        Continue
                    </button>
                </div>
            </footer>
        </form>
    </div>
</dialog>
