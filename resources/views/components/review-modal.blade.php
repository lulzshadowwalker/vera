<dialog id="review-modal"
        class="dialog w-full sm:max-w-[425px]"
        onclick="if (event.target === this) this.close()"
        x-data="{
            domain: '',
            userDomain: '{{ auth()->user()?->supplier?->domain ?? '' }}',
            get isSelfReview() {
                if (!this.domain || !this.userDomain) return false;
                const cleanDomain = (d) => d.toLowerCase().replace(/^(https?:\/\/)?(www\.)?/, '');
                return cleanDomain(this.domain) === cleanDomain(this.userDomain);
            }
        }">
    <div>
        <header class="flex flex-row items-start justify-between">
            <h2 class="text-xl font-bold">Assess a Vendor</h2>
            <button type="button"
                    onclick="this.closest('dialog').close()"
                    class="text-muted-foreground hover:text-foreground cursor-pointer">
                <i class="hgi hgi-stroke hgi-cancel-01"></i>
            </button>
        </header>
        <p class="text-muted-foreground mb-4">
            Enter the website domain of the vendor you want to assess. If they aren't in our system yet, we'll add
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
                    <span
                          class="bg-muted border-input text-muted-foreground flex items-center rounded-l-md border border-r-0 px-3 text-sm">
                        @
                    </span>
                    <input type="text"
                           name="domain"
                           id="domain"
                           x-model="domain"
                           class="input input-lg w-full rounded-l-none"
                           placeholder="example.com"
                           required
                           autofocus>
                </div>
                <p x-show="isSelfReview"
                   x-cloak
                   class="text-destructive mt-1 text-sm">
                    You cannot assess your own vendor.
                </p>
                @error('domain')
                    <p class="text-destructive mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <footer class="mt-6 flex justify-end gap-2">
                <button class="btn-outline"
                        type="button"
                        onclick="this.closest('dialog').close()">Cancel</button>
                <div class="inline-block"
                     :title="isSelfReview ? 'You cannot assess your own vendor' : ''">
                    <button class="btn btn-primary disabled:cursor-not-allowed disabled:opacity-50"
                            type="submit"
                            :disabled="isSelfReview">
                        Continue
                    </button>
                </div>
            </footer>
        </form>
    </div>
</dialog>
