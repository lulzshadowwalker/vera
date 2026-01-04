<header class="sticky top-0 z-40 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <div class="container mx-auto flex h-14 items-center px-4 md:px-6">
        <!-- Mobile Menu Trigger -->
        <button type="button" class="btn-outline btn-icon md:hidden mr-6" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar', { detail: { id: 'mobile-sidebar' } }))">
            <i class="hgi hgi-stroke hgi-menu-01 text-xl text-foreground"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>

        <!-- Logo -->
        <a href="{{ route('home.index') }}" class="mr-4 flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="h-6 w-auto translate-y-0.5" />
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
            {{-- <a href="{{ route('home.index') }}" class="transition-colors hover:text-foreground/80 {{ request()->routeIs('home.index') ? 'text-foreground' : 'text-foreground/60' }}">Home</a> --}}
            <a href="{{ route('suppliers.index') }}" class="transition-colors hover:text-foreground/80 {{ request()->routeIs('suppliers.*') ? 'text-foreground' : 'text-foreground/60' }}">Seek Vendors</a>
        </nav>

        <!-- Right Side Actions -->
        <div class="flex flex-1 items-center justify-end space-x-2">
            @auth
                <button class="btn-primary btn-sm hidden md:flex" onclick="document.getElementById('review-modal').showModal()">
                    <i class="hgi hgi-stroke hgi-quill-write-01 mr-2"></i>
                    Assess Vendor
                </button>

                <!-- User Dropdown -->
                <div id="user-dropdown" class="dropdown-menu">
                    <button type="button" id="user-dropdown-trigger" aria-haspopup="menu" aria-controls="user-dropdown-menu" aria-expanded="false" class="btn-ghost btn-icon rounded-full">
                        <i class="hgi hgi-stroke hgi-user text-xl"></i>
                    </button>
                    <div id="user-dropdown-popover" data-popover aria-hidden="true" class="min-w-56" data-align="end">
                        <div role="menu" id="user-dropdown-menu" aria-labelledby="user-dropdown-trigger">
                            <div role="group">
                                <div class="px-2 py-1.5 text-sm font-semibold">{{ auth()->user()->email }}</div>
                            </div>
                            <hr role="separator" />
                            <div role="menuitem">
                                <a href="{{ route('profile.show') }}" class="flex w-full items-center">
                                    Profile
                                </a>
                            </div>
                            @if (auth()->user()->supplier)
                                <div role="menuitem">
                                    <a href="{{ route('suppliers.show', auth()->user()->supplier) }}" class="flex w-full items-center">
                                        My Organization
                                    </a>
                                </div>
                            @endif
                            <hr role="separator" />
                            <div role="menuitem">
                                <button type="button" onclick="toggleTheme()" class="flex w-full items-center">
                                    Toggle Theme
                                </button>
                            </div>
                            <hr role="separator" />
                            <div role="menuitem">
                                <form action="{{ route('auth.logout') }}" method="POST" class="w-full">
                                    @csrf
                                    <button type="submit" class="flex w-full items-center">
                                        Log out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('auth.login.index') }}" class="btn-sm-secondary">Log In</a>
                <a href="{{ route('auth.register.index') }}" class="btn-primary btn-sm">Get Started</a>
            @endauth
        </div>
    </div>
</header>

<!-- Mobile Sidebar -->
<aside class="sidebar" id="mobile-sidebar" aria-hidden="true" data-initial-open="false" data-initial-mobile-open="false">
    <nav aria-label="Sidebar navigation">
        <header class="flex flex-row items-center justify-between px-4 py-2">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="h-6 w-auto translate-y-0.5" />
            <button type="button" class="btn-outline btn-icon" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar', { detail: { id: 'mobile-sidebar', action: 'close' } }))">
                <i class="hgi hgi-stroke hgi-cancel-01 text-xl text-foreground"></i>
            </button>
        </header>
        <section class="scrollbar">
            <div role="group">
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}">
                            <i class="hgi hgi-stroke hgi-home-09"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suppliers.index') }}">
                            <i class="hgi hgi-stroke hgi-search-01"></i>
                            <span>Seek Vendors</span>
                        </a>
                    </li>
                </ul>
            </div>

            @auth
                <div role="group">
                    <span role="heading">User</span>
                    <ul>
                        <li>
                            <button onclick="document.getElementById('review-modal').showModal()">
                                <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                                <span>Assess Vendor</span>
                            </button>
                        </li>
                        <li>
                            <a href="{{ route('profile.show') }}">
                                <i class="hgi hgi-stroke hgi-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        @if (auth()->user()->supplier)
                            <li>
                                <a href="{{ route('suppliers.show', auth()->user()->supplier) }}">
                                    <i class="hgi hgi-stroke hgi-building-03"></i>
                                    <span>My Organization</span>
                                </a>
                            </li>
                        @endif
                         <li>
                            <button onclick="toggleTheme()">
                                <i class="hgi hgi-stroke hgi-paint-board"></i>
                                <span>Toggle Theme</span>
                            </button>
                        </li>
                        <li>
                            <form action="{{ route('auth.logout') }}" method="POST" class="w-full">
                                @csrf
                                <button type="submit" class="w-full text-left flex items-center gap-2">
                                    <i class="hgi hgi-stroke hgi-logout-04"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div role="group">
                    <ul>
                        <li>
                            <a href="{{ route('auth.login.index') }}">
                                <i class="hgi hgi-stroke hgi-login-02"></i>
                                <span>Log In</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('auth.register.index') }}">
                                <i class="hgi hgi-stroke hgi-user-add-02"></i>
                                <span>Get Started</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endauth
        </section>
    </nav>
</aside>

<x-review-modal />
