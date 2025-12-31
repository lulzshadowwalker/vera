@extends('components.layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 md:py-28 bg-black min-h-[90vh]">
    <!-- Unicorn Studio Background -->
    <div class="absolute inset-0 w-full h-full overflow-hidden">
        <div data-us-project="KJT9Cc9mnGfTRbyIClhJ" data-us-scale="1" data-us-dpi="1.5" data-us-lazyload="true" class="w-full h-full"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="font-bold text-4xl md:text-5xl lg:text-6xl leading-tight text-balance mb-6 text-white">
                Find Trusted Industrial Suppliers, Fast
            </h1>
            <p class="text-lg md:text-xl text-white/70 mb-10 max-w-2xl mx-auto leading-relaxed">
                Access authentic reviews from verified businesses. Make confident procurement decisions backed by real experiences from your peers.
            </p>

            <!-- Primary Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="{{ route('suppliers.index') }}" class="btn btn-primary h-12 px-6 w-full sm:w-auto">
                    <i class="hgi hgi-stroke hgi-search-01"></i>
                    Browse Suppliers
                </a>
                <a href="{{ route('auth.register.index') }}" class="btn h-12 px-6 w-full sm:w-auto bg-white/10 text-white border border-white/20 hover:bg-white/20">
                    <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                    Write a Review
                </a>
            </div>

            <!-- Search Box -->
            <div class="max-w-2xl mx-auto">
                <form action="{{ route('suppliers.index') }}" method="GET">
                    <div class="relative w-full">
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 text-white/70">
                            <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                        </span>
                        <input
                            type="search"
                            role="search"
                            class="input h-12 w-full rounded-lg shadow-lg bg-white/10 border-white/20 text-white placeholder:text-white/50 pl-4 pr-10"
                            name="search"
                            placeholder="Search by supplier name or domain..."
                            aria-label="Search for suppliers"
                        />
                    </div>
                </form>
                <p class="text-sm text-white/50 mt-3">
                    Try searching for companies like "acme.com" or "ABC Manufacturing"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-card border-y border-border">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-primary mb-2">{{ number_format($totalReviews ?? 1250) }}</div>
                <p class="text-muted-foreground font-medium">Verified Reviews</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-primary mb-2">{{ number_format($totalSuppliers ?? 500) }}</div>
                <p class="text-muted-foreground font-medium">Trusted Suppliers</p>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-primary mb-2">{{ number_format($totalUsers ?? 2000) }}</div>
                <p class="text-muted-foreground font-medium">Business Users</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-background">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">How It Works</h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                Getting started is simple. Join thousands of businesses making smarter procurement decisions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Step 1 -->
            <div class="relative">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-2xl font-bold mb-6 shadow-lg">
                        1
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Sign Up with Work Email</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Create your account using your business email. We verify your company automatically—no lengthy forms.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-2xl font-bold mb-6 shadow-lg">
                        2
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Browse & Review Suppliers</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Search our directory, read authentic reviews, or share your own experience with suppliers you've worked with.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-2xl font-bold mb-6 shadow-lg">
                    3
                </div>
                <h3 class="text-xl font-semibold mb-3">Make Better Decisions</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Leverage detailed ratings on cost, quality, reliability, and more to choose the right supplier every time.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-20 bg-secondary/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Businesses Trust Us</h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                Built for B2B procurement teams who need reliable, data-driven insights.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="card p-6 hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
<i class="hgi hgi-stroke hgi-checkmark-badge-01 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">100% Verified Reviews</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Every review comes from authenticated business users. No fake reviews, no spam—just honest feedback.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="card p-6 hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <i class="hgi hgi-stroke hgi-search-01 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Smart Search</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Find suppliers quickly with our powerful search. Filter by industry, location, and ratings to match your needs.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="card p-6 hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
<i class="hgi hgi-stroke hgi-star text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">10-Point Ratings</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Detailed metrics covering cost, quality, reliability, communication, and more give you the full picture.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="card p-6 hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <i class="hgi hgi-stroke hgi-square-lock-02 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Secure & Private</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Your data is protected. Choose to review anonymously or publicly—you're always in control.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="card p-6 hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
<i class="hgi hgi-stroke hgi-earth text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Global Coverage</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Connect with suppliers worldwide. Reviews include country tags to help you find local or international partners.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="card p-6 hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
<i class="hgi hgi-stroke hgi-user-multiple-02 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">B2B Community</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Join a growing network of procurement professionals sharing insights and building transparency.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-background">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-muted-foreground">
                Have questions? We've got answers. If you can't find what you're looking for, feel free to contact us.
            </p>
        </div>

        <div class="space-y-4">
            <details class="group card p-4">
                <summary class="flex items-center justify-between cursor-pointer list-none text-lg font-semibold">
                    How do I leave a review for a supplier?
                    <span class="transition-transform group-open:rotate-180">
<i class="hgi hgi-stroke hgi-arrow-down-01"></i>
                    </span>
                </summary>
                <div class="mt-4 text-muted-foreground leading-relaxed">
                    <p>
                        Sign up with your work email, verify your account, and search for the supplier you want to review. You'll rate them on 10 key metrics including cost, quality, reliability, and communication. You can also add an optional comment.
                    </p>
                </div>
            </details>

            <details class="group card p-4">
                <summary class="flex items-center justify-between cursor-pointer list-none text-lg font-semibold">
                    Is the platform free to use?
                    <span class="transition-transform group-open:rotate-180">
<i class="hgi hgi-stroke hgi-arrow-down-01"></i>
                    </span>
                </summary>
                <div class="mt-4 text-muted-foreground leading-relaxed">
                    <p>
                        Yes! Basic access is completely free. You can browse reviews, search suppliers, and leave feedback at no cost. We'll be introducing premium plans in the future with advanced features like team access and detailed analytics.
                    </p>
                </div>
            </details>

            <details class="group card p-4">
                <summary class="flex items-center justify-between cursor-pointer list-none text-lg font-semibold">
                    How are suppliers verified?
                    <span class="transition-transform group-open:rotate-180">
<i class="hgi hgi-stroke hgi-arrow-down-01"></i>
                    </span>
                </summary>
                <div class="mt-4 text-muted-foreground leading-relaxed">
                    <p>
                        All suppliers are automatically identified by their domain when users submit reviews. Reviews are tied to verified business email addresses, ensuring authenticity. We prevent self-reviews by checking domain matches between reviewers and suppliers.
                    </p>
                </div>
            </details>

            <details class="group card p-4">
                <summary class="flex items-center justify-between cursor-pointer list-none text-lg font-semibold">
                    Can I share supplier profiles?
                    <span class="transition-transform group-open:rotate-180">
<i class="hgi hgi-stroke hgi-arrow-down-01"></i>
                    </span>
                </summary>
                <div class="mt-4 text-muted-foreground leading-relaxed">
                    <p>
                        Absolutely! Each supplier has a public profile page with aggregated ratings and recent reviews. Share the link with your team or network to help others make informed decisions.
                    </p>
                </div>
            </details>

            <details class="group card p-4">
                <summary class="flex items-center justify-between cursor-pointer list-none text-lg font-semibold">
                    Can I review anonymously?
                    <span class="transition-transform group-open:rotate-180">
<i class="hgi hgi-stroke hgi-arrow-down-01"></i>
                    </span>
                </summary>
                <div class="mt-4 text-muted-foreground leading-relaxed">
                    <p>
                        Yes. By default, all reviews are anonymous. If you choose to make your review public, it will display your organization name and first initial (e.g., "ABC Corp - J."). You're always in control of your privacy.
                    </p>
                </div>
            </details>

            <details class="group card p-4">
                <summary class="flex items-center justify-between cursor-pointer list-none text-lg font-semibold">
                    What metrics are included in reviews?
                    <span class="transition-transform group-open:rotate-180">
<i class="hgi hgi-stroke hgi-arrow-down-01"></i>
                    </span>
                </summary>
                <div class="mt-4 text-muted-foreground leading-relaxed">
                    <p>
                        Each review rates suppliers on 10 key metrics: Cost, Speed, Communication, Reliability, Quality, Support, Flexibility, Innovation, Value, and Timeliness. This comprehensive approach gives you a complete picture of supplier performance.
                    </p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- CTA Section -->
@guest
<section class="py-20 bg-gradient-to-br from-primary to-primary/80 text-primary-foreground">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-pretty">Ready to Make Better Procurement Decisions?</h2>
            <p class="text-xl mb-10 text-primary-foreground/90 tracking-wide leading-6">
                Join thousands of businesses finding trusted suppliers through authentic, verified reviews.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('auth.register.index') }}" class="btn btn-lg bg-white text-primary hover:bg-white/90">
<i class="hgi hgi-stroke hgi-user"></i>
                    Create Free Account
                </a>
                <a href="{{ route('suppliers.index') }}" class="btn btn-lg btn-ghost border-2 border-white text-white hover:bg-white/10">
<i class="hgi hgi-stroke hgi-search-01"></i>
                    Browse Suppliers
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
@endpush
@endsection
