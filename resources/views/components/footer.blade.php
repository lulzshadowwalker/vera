<footer class="bg-[#1B1B1B] text-[#F0E9D6] py-10">
    <div class="max-w-7xl w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <div>
            <a class="flex items-center gap-2" href="/">
                <h3 class="text-3xl md:text-4xl font-semibold cursor-pointer">{{ config('app.name') }}</h3>
            </a>
            <p class="mt-3.5 text-foreground-accent leading-6 tracking-wide">
                A secure, scalable B2B web application built to foster transparency and trust in the industrial supply
                chain.
            </p>
        </div>
        <div>
            <h4 class="text-xl md:text-2xl font-semibold mb-5">Quick Links</h4>
            <ul class="text-foreground-accent">
                <li class="mb-2"><a class="hover:underline" href="/">Home</a></li>
                <li class="mb-2"><a class="hover:underline" href="/suppliers">Browse Suppliers</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl md:text-2xl font-semibold mb-5">Legal</h4>
            <ul class="text-foreground-accent">
                <li class="mb-2"><a class="hover:underline" href="{{ route('terms-and-conditions.index') }}">Terms of Service</a></li>
                <li class="mb-2"><a class="hover:underline" href="{{ route('privacy-policy.index') }}">Privacy Policy</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl md:text-2xl font-semibold mb-5">Contact Us</h4>
            <div class="flex items-center gap-1">
                Email: <a href="mailto:contact@vera.com" class="block hover:underline">contact@vera.com</a>
            </div>
            <div class="flex items-center gap-1">
                Phone: <a href="tel:+11234567890" class="block hover:underline">+1 (123) 456-7890</a>
            </div>
            <div class="mt-5 flex items-center gap-5 flex-wrap">
                <a aria-label="facebook" href="https://facebook.com">
                    <i class="fa-brands fa-facebook text-xl"></i>
                </a>
                <a aria-label="linkedin" href="https://www.linkedin.com">
                    <i class="fa-brands fa-linkedin text-xl"></i>
                </a>
                <a aria-label="instagram" href="https://www.instagram.com">
                    <i class="fa-brands fa-instagram text-xl"></i>
                </a>
                <a aria-label="twitter" href="https://twitter.com">
                    <i class="fa-brands fa-x text-xl"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-8 md:text-center text-foreground-accent px-6">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>
