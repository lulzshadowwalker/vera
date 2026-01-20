<footer class="bg-muted/50 border-t border-border py-12 text-muted-foreground">
    <div class="container mx-auto px-4 md:px-6">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <div>
                <a href="{{ route('home.index') }}" class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="h-12 ml-w-auto" />
                </a>
                <p class="text-sm leading-relaxed">
                    A secure, scalable B2B web application built to foster transparency and trust in the industrial
                    supply chain.
                </p>
            </div>
            <div>
                <h3 class="font-semibold text-foreground mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home.index') }}" class="hover:text-foreground transition-colors">Home</a> </li>
                    <li><button class="cursor-pointer hover:text-foreground transition-colors" onclick="document.getElementById('review-modal').showModal()">Assess a Vendor</button></li>
                    <li><a href="{{ route('suppliers.index') }}" class="hover:text-foreground transition-colors">Seek Vendors</a></li>
                    <li><a href="{{ route('contact.index') }}" class="hover:text-foreground transition-colors">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-foreground mb-4">Legal</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('terms-and-conditions.index') }}"
                            class="hover:text-foreground transition-colors">Terms of Service</a></li>
                    <li><a href="{{ route('privacy-policy.index') }}"
                            class="hover:text-foreground transition-colors">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-foreground mb-4">Contact</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="mailto:contact@vera.com"
                            class="hover:text-foreground transition-colors">contact@vera.com</a></li>
                    <li><a href="tel:+11234567890" class="hover:text-foreground transition-colors">+1 (123) 456-7890</a>
                    </li>
                </ul>
                <div class="flex gap-4 mt-4">
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <i class="fa-brands fa-facebook text-lg"></i>
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <i class="fa-brands fa-linkedin text-lg"></i>
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <i class="fa-brands fa-x-twitter text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-border text-center text-sm">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
