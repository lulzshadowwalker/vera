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
                <a href="{{ route('suppliers.index') }}" class="uk-btn uk-btn-primary uk-btn-lg w-full sm:w-auto">
                    <uk-icon icon="search"></uk-icon>
                    Browse Suppliers
                </a>
                <a href="{{ route('auth.register.index') }}" class="uk-btn uk-btn-lg w-full sm:w-auto bg-white/10 text-white border border-white/20 hover:bg-white/20">
                    <uk-icon icon="pencil"></uk-icon>
                    Write a Review
                </a>
            </div>

            <!-- Search Box -->
            <div class="max-w-2xl mx-auto">
                <form action="{{ route('suppliers.index') }}" method="GET">
                    <div class="uk-inline w-full">
                        <span class="uk-form-icon uk-form-icon-flip" style="right: 12px;">
                            <uk-icon icon="search"></uk-icon>
                        </span>
                        <input
                            type="search"
                            role="search"
                            class="uk-input uk-form-large rounded-lg shadow-lg bg-white/10 border-white/20 text-white placeholder:text-white/50"
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
                <!-- Connector Line (hidden on mobile) -->
                <div class="hidden md:block absolute top-8 left-[calc(50%+2rem)] w-[calc(100%-4rem)] h-0.5 bg-border"></div>
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
                <!-- Connector Line (hidden on mobile) -->
                <div class="hidden md:block absolute top-8 left-[calc(50%+2rem)] w-[calc(100%-4rem)] h-0.5 bg-border"></div>
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
            <div class="uk-card uk-card-default uk-card-body hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <uk-icon icon="check" class="text-primary" width="24" height="24"></uk-icon>
                </div>
                <h3 class="text-xl font-semibold mb-3">100% Verified Reviews</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Every review comes from authenticated business users. No fake reviews, no spam—just honest feedback.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="uk-card uk-card-default uk-card-body hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <uk-icon icon="search" class="text-primary" width="24" height="24"></uk-icon>
                </div>
                <h3 class="text-xl font-semibold mb-3">Smart Search</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Find suppliers quickly with our powerful search. Filter by industry, location, and ratings to match your needs.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="uk-card uk-card-default uk-card-body hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <uk-icon icon="star" class="text-primary" width="24" height="24"></uk-icon>
                </div>
                <h3 class="text-xl font-semibold mb-3">10-Point Ratings</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Detailed metrics covering cost, quality, reliability, communication, and more give you the full picture.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="uk-card uk-card-default uk-card-body hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <uk-icon icon="lock" class="text-primary" width="24" height="24"></uk-icon>
                </div>
                <h3 class="text-xl font-semibold mb-3">Secure & Private</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Your data is protected. Choose to review anonymously or publicly—you're always in control.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="uk-card uk-card-default uk-card-body hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <uk-icon icon="globe" class="text-primary" width="24" height="24"></uk-icon>
                </div>
                <h3 class="text-xl font-semibold mb-3">Global Coverage</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Connect with suppliers worldwide. Reviews include country tags to help you find local or international partners.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="uk-card uk-card-default uk-card-body hover:shadow-lg transition-shadow">
                <div class="mb-4 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <uk-icon icon="users" class="text-primary" width="24" height="24"></uk-icon>
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

        <ul class="uk-accordion space-y-4" data-uk-accordion>
            <li class="uk-card uk-card-default uk-card-body">
                <a class="uk-accordion-title text-lg font-semibold" href>
                    How do I leave a review for a supplier?
                    <span class="uk-accordion-icon">
                        <uk-icon icon="chevron-down"></uk-icon>
                    </span>
                </a>
                <div class="uk-accordion-content">
                    <p class="text-muted-foreground leading-relaxed">
                        Sign up with your work email, verify your account, and search for the supplier you want to review. You'll rate them on 10 key metrics including cost, quality, reliability, and communication. You can also add an optional comment.
                    </p>
                </div>
            </li>

            <li class="uk-card uk-card-default uk-card-body">
                <a class="uk-accordion-title text-lg font-semibold" href>
                    Is the platform free to use?
                    <span class="uk-accordion-icon">
                        <uk-icon icon="chevron-down"></uk-icon>
                    </span>
                </a>
                <div class="uk-accordion-content">
                    <p class="text-muted-foreground leading-relaxed">
                        Yes! Basic access is completely free. You can browse reviews, search suppliers, and leave feedback at no cost. We'll be introducing premium plans in the future with advanced features like team access and detailed analytics.
                    </p>
                </div>
            </li>

            <li class="uk-card uk-card-default uk-card-body">
                <a class="uk-accordion-title text-lg font-semibold" href>
                    How are suppliers verified?
                    <span class="uk-accordion-icon">
                        <uk-icon icon="chevron-down"></uk-icon>
                    </span>
                </a>
                <div class="uk-accordion-content">
                    <p class="text-muted-foreground leading-relaxed">
                        All suppliers are automatically identified by their domain when users submit reviews. Reviews are tied to verified business email addresses, ensuring authenticity. We prevent self-reviews by checking domain matches between reviewers and suppliers.
                    </p>
                </div>
            </li>

            <li class="uk-card uk-card-default uk-card-body">
                <a class="uk-accordion-title text-lg font-semibold" href>
                    Can I share supplier profiles?
                    <span class="uk-accordion-icon">
                        <uk-icon icon="chevron-down"></uk-icon>
                    </span>
                </a>
                <div class="uk-accordion-content">
                    <p class="text-muted-foreground leading-relaxed">
                        Absolutely! Each supplier has a public profile page with aggregated ratings and recent reviews. Share the link with your team or network to help others make informed decisions.
                    </p>
                </div>
            </li>

            <li class="uk-card uk-card-default uk-card-body">
                <a class="uk-accordion-title text-lg font-semibold" href>
                    Can I review anonymously?
                    <span class="uk-accordion-icon">
                        <uk-icon icon="chevron-down"></uk-icon>
                    </span>
                </a>
                <div class="uk-accordion-content">
                    <p class="text-muted-foreground leading-relaxed">
                        Yes. By default, all reviews are anonymous. If you choose to make your review public, it will display your organization name and first initial (e.g., "ABC Corp - J."). You're always in control of your privacy.
                    </p>
                </div>
            </li>

            <li class="uk-card uk-card-default uk-card-body">
                <a class="uk-accordion-title text-lg font-semibold" href>
                    What metrics are included in reviews?
                    <span class="uk-accordion-icon">
                        <uk-icon icon="chevron-down"></uk-icon>
                    </span>
                </a>
                <div class="uk-accordion-content">
                    <p class="text-muted-foreground leading-relaxed">
                        Each review rates suppliers on 10 key metrics: Cost, Speed, Communication, Reliability, Quality, Support, Flexibility, Innovation, Value, and Timeliness. This comprehensive approach gives you a complete picture of supplier performance.
                    </p>
                </div>
            </li>
        </ul>
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
                <a href="{{ route('auth.register.index') }}" class="uk-btn uk-btn-lg bg-white text-primary hover:bg-white/90">
                    <uk-icon icon="user"></uk-icon>
                    Create Free Account
                </a>
                <a href="{{ route('suppliers.index') }}" class="uk-btn uk-btn-lg uk-btn-ghost border-2 border-white text-white hover:bg-white/10">
                    <uk-icon icon="search"></uk-icon>
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
