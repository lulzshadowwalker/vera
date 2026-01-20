@extends('components.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-background relative flex min-h-[90vh] items-center overflow-hidden py-20 md:py-28">
        <!-- Hero Background Illustration -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/hero.png') }}" alt=""
                class="h-full w-full object-cover scale-105 opacity-70 transition-transform duration-[20s] ease-linear hover:scale-110" />
            <div class="absolute inset-0 bg-gradient-to-t from-background/60 via-background/30 to-background/80"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-background via-transparent to-background"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-6 text-center">
            <div class="mx-auto max-w-4xl">
                <h1 class="text-foreground mb-6 text-balance text-4xl font-bold leading-tight md:text-5xl lg:text-6xl">
                    Assess Right Seek Smart
                </h1>
                <p class="text-muted-foreground mx-auto mb-10 max-w-3xl text-lg leading-relaxed md:text-xl font-medium">
                    A trusted platform for verified corporate assessments.
                    <span class="block mt-2">Real business experiences. Real accountability. Better decisions.</span>
                </p>

                <!-- Primary Actions -->
                <div class="mb-12 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    @auth
                        <button onclick="document.getElementById('review-modal').showModal()"
                            class="btn border-border bg-card/50 backdrop-blur-md text-foreground hover:bg-muted h-12 w-full border px-8 sm:w-auto">
                            <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                            Assess a Vendor
                        </button>
                    @endauth

                    @guest
                        <a href="{{ route('auth.login.index') }}"
                            class="btn border-border bg-card/50 backdrop-blur-md text-foreground hover:bg-muted h-12 w-full border px-8 sm:w-auto">
                            <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                            Assess a Vendor
                        </a>
                    @endguest

                    <a href="{{ route('suppliers.index') }}"
                        class="btn btn-primary h-12 w-full px-8 shadow-xl shadow-primary/20 sm:w-auto">
                        <i class="hgi hgi-stroke hgi-search-01"></i>
                        Seek Vendors
                    </a>
                </div>

                <!-- Search Box -->
                <div class="mx-auto max-w-2xl">
                    <form action="{{ route('suppliers.index') }}" method="GET">
                        <div class="relative w-full">
                            <span class="text-muted-foreground absolute right-4 top-1/2 -translate-y-1/2">
                                <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                            </span>
                            <input type="search" role="search"
                                class="input border-border bg-card/50 backdrop-blur-md text-foreground placeholder:text-muted-foreground h-14 w-full rounded-xl pl-6 pr-12 shadow-2xl transition-all focus:ring-2 focus:ring-primary/20"
                                name="search" placeholder="Search by vendor @domain" aria-label="Search for vendors" />
                        </div>
                    </form>
                    <p class="text-muted-foreground mt-4 text-sm">
                        Try searching for companies like <span class="text-primary font-medium">"acme.com"</span> or <span
                            class="text-primary font-medium">"ABC Manufacturing"</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-muted/20 overflow-hidden py-12">
        <style>
            @keyframes loop-scroll {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-100%);
                }
            }

            .animate-loop-scroll {
                animation: loop-scroll 30s linear infinite;
            }
        </style>
        <div class="mask-gradient flex w-full overflow-hidden">
            <!-- Original Set -->
            @foreach (range(0, 10) as $key)
                <div class="animate-loop-scroll flex items-center gap-8 pr-8">
                    <div class="card bg-card w-64 shrink-0 p-6 text-center transition-shadow hover:shadow-md">
                        <header class="flex flex-col items-center gap-3">
                            <div class="bg-primary/10 grid h-12 w-12 place-items-center rounded-full">
                                <i class="hgi hgi-stroke hgi-user-multiple-02 text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h2 class="text-primary mb-1 text-3xl font-bold">{{ number_format($suppliersCount) }}+
                                </h2>
                                <p class="text-muted-foreground text-sm font-medium">Registered</p>
                            </div>
                        </header>
                    </div>
                </div>

                <div class="animate-loop-scroll flex items-center gap-8 pr-8">
                    <div class="card bg-card w-64 shrink-0 p-6 text-center transition-shadow hover:shadow-md">
                        <header class="flex flex-col items-center gap-3">
                            <div class="bg-primary/10 grid h-12 w-12 place-items-center rounded-full">
                                <i class="hgi hgi-stroke hgi-star-circle text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h2 class="text-primary mb-1 text-3xl font-bold">{{ number_format($reviewsCount) }}+
                                </h2>
                                <p class="text-muted-foreground text-sm font-medium">Assessments</p>
                            </div>
                        </header>
                    </div>
                </div>

                <!-- Duplicate Set for Infinite Scroll -->
                <div class="animate-loop-scroll flex items-center gap-8 pr-8" aria-hidden="true">
                    <div class="card bg-card w-64 shrink-0 p-6 text-center transition-shadow hover:shadow-md">
                        <header class="flex flex-col items-center gap-3">
                            <div class="bg-primary/10 grid h-12 w-12 place-items-center rounded-full">
                                <i class="hgi hgi-stroke hgi-user-multiple-02 text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h2 class="text-primary mb-1 text-3xl font-bold">{{ number_format($suppliersCount) }}+
                                </h2>
                                <p class="text-muted-foreground text-sm font-medium">Registered Companies</p>
                            </div>
                        </header>
                    </div>
                </div>

                <div class="animate-loop-scroll flex items-center gap-8 pr-8" aria-hidden="true">
                    <div class="card bg-card w-64 shrink-0 p-6 text-center transition-shadow hover:shadow-md">
                        <header class="flex flex-col items-center gap-3">
                            <div class="bg-primary/10 grid h-12 w-12 place-items-center rounded-full">
                                <i class="hgi hgi-stroke hgi-star-circle text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h2 class="text-primary mb-1 text-3xl font-bold">{{ number_format($reviewsCount) }}+
                                </h2>
                                <p class="text-muted-foreground text-sm font-medium">Verified Assessments</p>
                            </div>
                        </header>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-card relative overflow-hidden border-y border-border py-24">
        <div class="pointer-events-none absolute left-1/2 top-0 h-full w-full max-w-4xl -translate-x-1/2 opacity-10">
            <div class="from-primary/20 absolute inset-0 rounded-full bg-gradient-to-b to-transparent blur-3xl"></div>
        </div>
        <div class="relative z-10 mx-auto max-w-4xl px-6 text-center">
            <div
                class="bg-primary/10 text-primary mb-8 inline-flex items-center gap-2 rounded-full px-4 py-1.5 text-sm font-bold uppercase tracking-wider">
                <i class="hgi hgi-stroke hgi-shield-user text-lg"></i>
                <span>Corporate Integrity</span>
            </div>
            <p class="text-foreground mb-8 text-2xl font-medium leading-relaxed md:text-3xl">
                Our platform enables businesses and institutions to assess companies and service providers based on <span
                    class="text-primary font-bold">real professional interactions.</span>
            </p>
            <p class="text-muted-foreground mb-10 text-lg leading-relaxed md:text-xl">
                All assessments are verified through corporate email domains, ensuring credibility and serious
                participation.
            </p>
            <div class="border-primary inline-block border-l-4 py-2 pl-6 text-left">
                <p class="text-foreground text-xl font-bold leading-tight md:text-2xl">
                    Here, businesses speak and real experience is the reference.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-background py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold md:text-4xl">How It Works</h2>
                <p class="text-muted-foreground mx-auto max-w-2xl text-lg">
                    Getting started is simple. Join thousands of businesses making smarter procurement decisions.
                </p>
            </div>

            <!-- Process Illustration -->
            <div class="mb-20 flex justify-center opacity-80">
                <img src="{{ asset('images/process.png') }}" alt="Our 3-Step Process" class="px-16 w-full select-none" />
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
                        <h3 class="mb-3 text-xl font-semibold">Assess & Seek Vendors</h3>
                        <p class="text-muted-foreground leading-relaxed">
                            Assess your own experience with vendors you've worked with or seek our directory and read authentic assessments.
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
                    <h3 class="mb-3 text-xl font-semibold">100% Verified Assessments</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Every assessment comes from authenticated business users. No fake assessments, no spam—just honest
                        feedback.
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
                        Your data is protected. Choose to assess anonymously or publicly—you're always in control.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="card p-6 transition-shadow hover:shadow-lg">
                    <div class="bg-primary/10 mb-4 flex h-12 w-12 items-center justify-center rounded-lg">
                        <i class="hgi hgi-stroke hgi-earth text-2xl"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold">Global Coverage</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Connect with vendors worldwide. Assessments include country tags to help you find local or
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
    <section id="faq" class="bg-background py-20">
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
                                How do I leave an assessment for a vendor?
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Sign up with your work email, verify your account, and search for the vendor you want to
                                assess. You'll rate them on 10 key metrics including cost, quality, reliability, and
                                communication. You can also add an optional comment.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                            class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                How much does it cost to use the platform?
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                We offer flexible pricing plans tailored for B2B procurement teams. Whether you're a small
                                business or a large enterprise, our platform provides the insights you need to make smarter
                                decisions. Contact our team for a personalized quote.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                            class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                How are vendors verified?
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                All vendors are automatically identified by their domain when users submit assessments.
                                Assessments are tied to verified business email addresses, ensuring authenticity. We prevent
                                self-assessments by checking domain matches between assessors and vendors.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                            class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                Can I share vendor profiles?
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Absolutely! Each vendor has a public profile page with aggregated ratings and recent
                                assessments. Share the link with your team or network to help others make informed
                                decisions.
                            </p>
                        </section>
                    </details>

                    <details class="group border-b last:border-b-0">
                        <summary
                            class="focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md outline-none transition-all focus-visible:ring-[3px]">
                            <h2
                                class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-lg font-semibold hover:underline">
                                Can I assess anonymously?
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Yes. By default, all assessments are anonymous. If you choose to make your assessment
                                public, it
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
                                What metrics are included in assessments?
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </h2>
                        </summary>
                        <section class="pb-4">
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                Each assessment rates vendors on 10 key metrics: Cost, Speed, Communication, Reliability,
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
        <section class="px-6 py-24">
            <div class="mx-auto max-w-7xl">
                <div
                    class="card bg-primary text-primary-foreground relative overflow-hidden rounded-3xl px-6 py-16 text-center shadow-2xl md:px-12 md:py-20">
                    <!-- Background Pattern -->
                    <div class="pointer-events-none absolute inset-0 opacity-10">
                        <div class="absolute -left-16 -top-16 h-64 w-64 rounded-full bg-white blur-3xl"></div>
                        <div class="absolute -bottom-16 -right-16 h-64 w-64 rounded-full bg-white blur-3xl"></div>
                    </div>

                    <div class="relative z-10 mx-auto max-w-3xl">
                        <h2 class="mb-6 text-3xl font-bold tracking-tight md:text-4xl lg:text-5xl">
                            Ready to Make Better Procurement Decisions?
                        </h2>
                        <p class="text-primary-foreground/90 mb-10 text-lg leading-relaxed md:text-xl">
                            Join thousands of businesses finding trusted vendors through authentic, verified assessments.
                        </p>
                        <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                            <a href="{{ route('auth.register.index') }}" class="btn-lg-secondary min-w-[200px]">
                                <i class="hgi hgi-stroke hgi-user-add-02 mr-2"></i>
                                Create Account
                            </a>
                            <a href="{{ route('suppliers.index') }}" class="btn-lg-secondary min-w-[200px]">
                                <i class="hgi hgi-stroke hgi-search-01 mr-2"></i>
                                Seek Vendors
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endguest

    @push('scripts')
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
