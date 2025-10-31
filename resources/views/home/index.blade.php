@extends('components.layouts.app')

@section('content')
<!-- FAQ -->
<section class="max-w-7xl mx-auto px-6 py-12 md:py-16">
    <header>
        <h2 class="font-semibold text-2xl md:text-3xl text-center mb-3">Frequently Asked Questions</h2>
        <p class="leading-6 tracking-wide text-neutral-400 text-pretty text-center max-w-prose mx-auto">Have questions?
            We've got answers. If you can't find what you're looking for, feel free to contact us.</p>
    </header>

    <ul class="uk-accordion max-w-3xl mx-auto mt-6" data-uk-accordion>
        <li class="uk-open">
            <a class="uk-accordion-title" href>
                Item 1
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href>
                Item 2
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.
                </p>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href>
                Item 3
                <span class="uk-accordion-icon">
                    <uk-icon icon="chevron-down"></uk-icon>
                </span>
            </a>
            <div class="uk-accordion-content">
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    proident.
                </p>
            </div>
        </li>
    </ul>
</section>

<!-- CTA -->
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
@endsection
