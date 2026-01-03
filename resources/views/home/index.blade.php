@extends('components.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="-mt-18 relative min-h-[90vh] bg-black py-20 md:py-28">
        <!-- Unicorn Studio Background -->
        <div class="absolute inset-0 h-full w-full overflow-hidden">
            <div data-us-project="KJT9Cc9mnGfTRbyIClhJ"
                 data-us-scale="1"
                 data-us-dpi="1.5"
                 data-us-lazyload="true"
                 class="h-full w-full"></div>
        </div>
        <div class="relative z-10 mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-4xl text-center">
                <h1 class="mb-6 text-balance text-4xl font-bold leading-tight text-white md:text-5xl lg:text-6xl">
                    Find Trusted Industrial Vendors, Fast
                </h1>
                <p class="mx-auto mb-10 max-w-2xl text-lg leading-relaxed text-white/70 md:text-xl">
                    Access authentic reviews from verified businesses. Make confident procurement decisions backed by real
                    experiences from your peers.
                </p>

                <!-- Primary Actions -->
                <div class="mb-12 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="{{ route('suppliers.index') }}"
                       class="btn btn-primary h-12 w-full px-6 sm:w-auto">
                        <i class="hgi hgi-stroke hgi-search-01"></i>
                        Seek Vendors
                    </a>
                    <a href="{{ route('auth.register.index') }}"
                       class="btn h-12 w-full border border-white/20 bg-white/10 px-6 text-white hover:bg-white/20 sm:w-auto">
                        <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                        Write a Review
                    </a>
                </div>

                <!-- Search Box -->
                <div class="mx-auto max-w-2xl">
                    <form action="{{ route('suppliers.index') }}"
                          method="GET">
                        <div class="relative w-full">
                            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-white/70">
                                <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                            </span>
                            <input type="search"
                                   role="search"
                                   class="input h-12 w-full rounded-lg border-white/20 bg-white/10 pl-4 pr-10 text-white shadow-lg placeholder:text-white/50"
                                   name="search"
                                   placeholder="Search by vendor name or domain..."
                                   aria-label="Search for vendors" />
                        </div>
                    </form>
                    <p class="mt-3 text-sm text-white/50">
                        Try searching for companies like "acme.com" or "ABC Manufacturing"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-card border-border border-y py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="text-center">
                    <div class="text-primary mb-2 text-5xl font-bold">{{ number_format($totalReviews ?? 1250) }}</div>
                    <p class="text-muted-foreground font-medium">Verified Reviews</p>
                </div>
                <div class="text-center">
                    <div class="text-primary mb-2 text-5xl font-bold">{{ number_format($totalSuppliers ?? 500) }}</div>
                    <p class="text-muted-foreground font-medium">Trusted Vendors</p>
                </div>
                <div class="text-center">
                    <div class="text-primary mb-2 text-5xl font-bold">{{ number_format($totalUsers ?? 2000) }}</div>
                    <p class="text-muted-foreground font-medium">Business Users</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-background py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-4xl">How It Works</h2>
                <p class="text-muted-foreground mx-auto max-w-2xl text-lg">
                    Getting started is simple. Join thousands of businesses making smarter procurement decisions.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-12 md:grid-cols-3">
                <!-- Step 1 -->
                <div class="relative">
                    <div class="flex flex-col items-center text-center">
                        <div
                             class="bg-primary text-primary-foreground mb-6 flex h-16 w-16 items-center justify-center rounded-full text-2xl font-bold shadow-lg">
                            1
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">Sign Up with Work Email</h3>
                        <p class="text-muted-foreground leading-relaxed">
                            Create your account using your business email. We verify your company automatically—no lengthy
                            forms.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative">
                    <div class="flex flex-col items-center text-center">
                        <div
                             class="bg-primary text-primary-foreground mb-6 flex h-16 w-16 items-center justify-center rounded-full text-2xl font-bold shadow-lg">
                            2
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">Seek & Review Vendors</h3>
                        <p class="text-muted-foreground leading-relaxed">
                            Search our directory, read authentic reviews, or share your own experience with vendors you've
                            worked with.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center">
                    <div
                         class="bg-primary text-primary-foreground mb-6 flex h-16 w-16 items-center justify-center rounded-full text-2xl font-bold shadow-lg">
                        3
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">Make Better Decisions</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Leverage detailed ratings on cost, quality, reliability, and more to choose the right vendor every
                        time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="bg-secondary/30 py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-4xl">Why Businesses Trust Us</h2>
                <p class="text-muted-foreground mx-auto max-w-2xl text-lg">
                    Built for B2B procurement teams who need reliable, data-driven insights.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-checkmark-badge-01 text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">100% Verified Reviews</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Every review comes from authenticated business users. No fake reviews, no spam—just honest feedback.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-search-01 text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">Smart Search</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Find vendors quickly with our powerful search. Filter by industry, location, and ratings to match
                        your needs.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-star text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">10-Point Ratings</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Detailed metrics covering cost, quality, reliability, communication, and more give you the full
                        picture.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-square-lock-02 text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">Secure & Private</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Your data is protected. Choose to review anonymously or publicly—you're always in control.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-earth text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">Global Coverage</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Connect with vendors worldwide. Reviews include country tags to help you find local or
                        international partners.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-user-multiple-02 text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">B2B Community</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Join a growing network of procurement professionals sharing insights and building transparency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq"
             class="bg-background py-20">
        <div class="mx-auto max-w-4xl px-6">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-4xl">Frequently Asked Questions</h2>
                <p class="text-muted-foreground text-lg">
                    Have questions? We've got answers. If you can't find what you're looking for, feel free to contact us.
                </p>
            </div>

            <div class="space-y-4">
                <section class="accordion">
                    <details class="group border-b last:border-b-0">
                        <summary
                                 class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                How do I leave a review for a vendor?
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Sign up with your work email, verify your account, and search for the vendor you want to
                                review. You'll rate them on 10 key metrics including cost, quality, reliability, and
                                communication. You can also add an optional comment.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                                 class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                Is the platform free to use?
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                            Yes! Basic access is completely free. You can seek reviews, search vendors, and leave
                                feedback at no cost. We'll be introducing premium plans in the future with advanced features
                                like team access and detailed analytics.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                                 class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                How are vendors verified?
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                All vendors are automatically identified by their domain when users submit reviews.
                                Reviews are tied to verified business email addresses, ensuring authenticity. We prevent
                                self-reviews by checking domain matches between reviewers and vendors.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                                 class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                Can I share vendor profiles?
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Absolutely! Each vendor has a public profile page with aggregated ratings and recent
                                reviews. Share the link with your team or network to help others make informed decisions.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                                 class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                Can I review anonymously?
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Yes. By default, all reviews are anonymous. If you choose to make your review public, it
                                will display your organization name and first initial (e.g., "ABC Corp - J."). You're always
                                in control of your privacy.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                                 class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                What metrics are included in reviews?
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Each review rates vendors on 10 key metrics: Cost, Speed, Communication, Reliability,
                                Quality, Support, Flexibility, Innovation, Value, and Timeliness. This comprehensive
                                approach gives you a complete picture of vendor performance.
                            </p>
                        </section>
                    </details>
                </section>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    @guest
        <section class="from-primary to-primary/80 text-primary-foreground bg-gradient-to-br py-20">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="mb-6 text-pretty text-3xl font-bold md:text-4xl">Ready to Make Better Procurement Decisions?
                    </h2>
                    <p class="text-primary-foreground/90 mb-10 text-xl leading-6 tracking-wide">
                        Join thousands of businesses finding trusted vendors through authentic, verified reviews.
                    </p>
                    <div class="flex flex-col justify-center gap-4 sm:flex-row">
                        <a href="{{ route('auth.register.index') }}"
                           class="btn-primary btn-lg">
                            <i class="hgi hgi-stroke hgi-user"></i>
                            Create Free Account
                        </a>
                        <a href="{{ route('suppliers.index') }}"
                           class="btn-lg btn-secondary">
                            <i class="hgi hgi-stroke hgi-search-01"></i>
                            Seek Vendors
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endguest

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (window.UnicornStudio) {
                    UnicornStudio.init().catch(console.error);
                }
            });
        </script>
        <script>
            (() => {
                const accordions = document.querySelectorAll(".accordion");
                accordions.forEach((accordion) => {
                    accordion.addEventListener("click", (event) => {
                        const summary = event.target.closest("summary");
                        if (!summary) return;
                        const details = summary.closest("details");
                        if (!details) return;
                        accordion.querySelectorAll("details").forEach((detailsEl) => {
                            if (detailsEl !== details) {
                                detailsEl.removeAttribute("open");
                            }
                        });
                    });
                });
            })();
        </script>
    @endpush
@endsection
