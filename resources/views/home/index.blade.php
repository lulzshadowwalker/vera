@extends('components.layouts.app')

@section('content')
<!-- Hero -->
<section class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="font-bold text-4xl md:text-5xl lg:text-6xl leading-tight text-balance">Connecting You with Trusted Industrial Suppliers</h1>
        <p class="mt-6 text-lg md:text-xl max-w-2xl mx-auto text-gray-600 tracking-wide leading-6">Discover, review, and connect with top industrial suppliers to meet your business needs. Make informed decisions with authentic feedback.</p>
        <div class="mt-10">
            {{-- Search box --}}
            <form action="{{ route('suppliers.index') }}" method="GET" class="max-w-3xl mx-auto">
                <div class="uk-inline w-full">
                    <span class="uk-form-icon">
                        <uk-icon icon="search"></uk-icon>
                    </span>
                    <input type="search" role="search" class="uk-input uk-form-lg" name="search" placeholder="Search for suppliers..." aria-label="Search for suppliers" />
                </div>
            </form>
        </div>
    </div>
</section>


<!-- Stats -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="flex flex-col items-center">
                <div class="text-4xl font-bold text-blue-600">{{ $totalReviews ?? '1,250' }}</div>
                <p class="mt-2 text-gray-600">Total Reviews</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-4xl font-bold text-blue-600">{{ $totalSuppliers ?? '500' }}</div>
                <p class="mt-2 text-gray-600">Verified Suppliers</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-4xl font-bold text-blue-600">{{ $totalUsers ?? '2,000' }}</div>
                <p class="mt-2 text-gray-600">Active Users</p>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <header class="text-center mb-12">
            <h2 class="font-semibold text-3xl md:text-4xl text-gray-900">Why Choose Our Platform?</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Empower your procurement decisions with verified reviews and comprehensive supplier insights.</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="uk-card uk-card-default uk-card-body text-center">
                <div class="mb-4 flex justify-center">
                    <uk-icon icon="star" class="text-yellow-500" height="32" width="32"></uk-icon>
                </div>
                <h3 class="font-semibold text-xl mb-2">Authentic Reviews</h3>
                <p class="tracking-wide leading-6 text-neutral-500 dark:text-neutral-400">Get real feedback from verified business users on key metrics like cost, quality, and reliability.</p>
            </div>
            <div class="uk-card uk-card-default uk-card-body text-center">
                <div class="mb-4 flex justify-center">
                    <uk-icon icon="search" class="text-blue-500" height="32" width="32"></uk-icon>
                </div>
                <h3 class="font-semibold text-xl mb-2">Easy Discovery</h3>
                <p class="tracking-wide leading-6 text-neutral-500 dark:text-neutral-400">Search and filter suppliers by industry, location, and performance to find the perfect match.</p>
            </div>
            <div class="uk-card uk-card-default uk-card-body text-center">
                <div class="mb-4 flex justify-center">
                    <uk-icon icon="shield" class="text-green-500" height="32" width="32"></uk-icon>
                </div>
                <h3 class="font-semibold text-xl mb-2">Secure & Verified</h3>
                <p class="tracking-wide leading-6 text-neutral-500 dark:text-neutral-400">All reviews are from authenticated users, ensuring trust and transparency in your supply chain.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="max-w-7xl mx-auto px-6 py-16">
    <header>
        <h2 class="font-semibold text-2xl md:text-3xl text-center mb-3">Frequently Asked Questions</h2>
        <p class="leading-6 tracking-wide text-neutral-400 text-pretty text-center max-w-prose mx-auto">Have questions? We've got answers. If you can't find what you're looking for, feel free to contact us.</p>
    </header>

    <ul class="uk-accordion max-w-3xl mx-auto mt-6" data-uk-accordion>
        <li class="uk-open">
            <a class="uk-accordion-title" href>
                How do I leave a review for a supplier?
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    To leave a review, sign up with your work email, verify your account, and search for the supplier. You can rate them on 10 key metrics and add a comment.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href>
                Is the platform free to use?
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    Yes, basic access is free. You can browse reviews and leave feedback at no cost. Premium plans offer advanced features like multi-user access and detailed analytics.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href>
                How are suppliers verified?
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    Suppliers are verified through domain-based registration. Reviews are tied to business emails, ensuring authenticity and preventing self-reviews.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href>
                Can I share supplier profiles?
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    Absolutely! Each supplier has a public profile page that you can share via link. It includes aggregated ratings and recent reviews.
                </p>
            </div>
        </li>
    </ul>
</section>

<!-- CTA -->
@guest
<section class="bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-6 py-12 md:py-16">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="font-semibold text-3xl md:text-4xl">Ready to get started?</h2>
                <p class="text-blue-200 text-lg mt-3">Create an account to leave a review or browse our directory of industrial suppliers.</p>
            </div>
            <div class="flex justify-center md:justify-end gap-4">
                <a href="{{ route('auth.register.index') }}" class="uk-btn uk-btn-primary uk-btn-lg">Create an account</a>
                <a href="{{ route('suppliers.index') }}" class="uk-btn uk-btn-default uk-btn-lg bg-white text-blue-600 hover:bg-gray-100">Browse suppliers</a>
            </div>
        </div>
    </div>
</section>
@endguest

@endsection
