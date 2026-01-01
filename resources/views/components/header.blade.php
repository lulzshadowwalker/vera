<header class="-mb-18 {{ request()->routeIs('home.index') ? 'bg-black/80 backdrop-blur-md text-white border-b border-white/10' : 'bg-card text-foreground border-b border-border shadow-sm' }} sticky top-0 z-50"
        x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto max-w-7xl px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home.index') }}"
                   class="flex items-center gap-2 transition-opacity hover:opacity-80">
                    <svg stroke="currentColor"
                         fill="currentColor"
                         stroke-width="0"
                         viewBox="0 0 512 512"
                         class="text-primary h-6 w-6 md:h-8 md:w-8"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                              d="M256.12 245.96c-13.25 0-24 10.74-24 24 1.14 72.25-8.14 141.9-27.7 211.55-2.73 9.72 2.15 30.49 23.12 30.49 10.48 0 20.11-6.92 23.09-17.52 13.53-47.91 31.04-125.41 29.48-224.52.01-13.25-10.73-24-23.99-24zm-.86-81.73C194 164.16 151.25 211.3 152.1 265.32c.75 47.94-3.75 95.91-13.37 142.55-2.69 12.98 5.67 25.69 18.64 28.36 13.05 2.67 25.67-5.66 28.36-18.64 10.34-50.09 15.17-101.58 14.37-153.02-.41-25.95 19.92-52.49 54.45-52.34 31.31.47 57.15 25.34 57.62 55.47.77 48.05-2.81 96.33-10.61 143.55-2.17 13.06 6.69 25.42 19.76 27.58 19.97 3.33 26.81-15.1 27.58-19.77 8.28-50.03 12.06-101.21 11.27-152.11-.88-55.8-47.94-101.88-104.91-102.72zm-110.69-19.78c-10.3-8.34-25.37-6.8-33.76 3.48-25.62 31.5-39.39 71.28-38.75 112 .59 37.58-2.47 75.27-9.11 112.05-2.34 13.05 6.31 25.53 19.36 27.89 20.11 3.5 27.07-14.81 27.89-19.36 7.19-39.84 10.5-80.66 9.86-121.33-.47-29.88 9.2-57.88 28-80.97 8.35-10.28 6.79-25.39-3.49-33.76zm109.47-62.33c-15.41-.41-30.87 1.44-45.78 4.97-12.89 3.06-20.87 15.98-17.83 28.89 3.06 12.89 16 20.83 28.89 17.83 11.05-2.61 22.47-3.77 34-3.69 75.43 1.13 137.73 61.5 138.88 134.58.59 37.88-1.28 76.11-5.58 113.63-1.5 13.17 7.95 25.08 21.11 26.58 16.72 1.95 25.51-11.88 26.58-21.11a929.06 929.06 0 0 0 5.89-119.85c-1.56-98.75-85.07-180.33-186.16-181.83zm252.07 121.45c-2.86-12.92-15.51-21.2-28.61-18.27-12.94 2.86-21.12 15.66-18.26 28.61 4.71 21.41 4.91 37.41 4.7 61.6-.11 13.27 10.55 24.09 23.8 24.2h.2c13.17 0 23.89-10.61 24-23.8.18-22.18.4-44.11-5.83-72.34zm-40.12-90.72C417.29 43.46 337.6 1.29 252.81.02 183.02-.82 118.47 24.91 70.46 72.94 24.09 119.37-.9 181.04.14 246.65l-.12 21.47c-.39 13.25 10.03 24.31 23.28 24.69.23.02.48.02.72.02 12.92 0 23.59-10.3 23.97-23.3l.16-23.64c-.83-52.5 19.16-101.86 56.28-139 38.76-38.8 91.34-59.67 147.68-58.86 69.45 1.03 134.73 35.56 174.62 92.39 7.61 10.86 22.56 13.45 33.42 5.86 10.84-7.62 13.46-22.59 5.84-33.43z">
                        </path>
                    </svg>
                    <span class="text-xl font-bold md:text-2xl">{{ config('app.name') }}</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden items-center gap-2 lg:flex">
                <!-- Common Links -->
                <a href="{{ route('home.index') }}"
                   class="btn btn-ghost btn-sm {{ request()->routeIs('home.index') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('suppliers.index') }}"
                   class="btn btn-ghost btn-sm {{ request()->routeIs('suppliers.*') ? 'active' : '' }}">
                    Browse Suppliers
                </a>

                @auth
                    <!-- Authenticated User Links -->
                    <button class="btn btn-primary btn-sm ml-2"
                            onclick="document.getElementById('review-modal').showModal()">
                        <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                        Write Review
                    </button>

                    <!-- User Dropdown -->
                    <div id="js-user-dropdown-menu" class="dropdown-menu relative">
                        <button type="button"
                                id="js-user-dropdown-menu-trigger"
                                aria-haspopup="menu"
                                aria-controls="js-user-dropdown-menu-menu"
                                aria-expanded="false"
                                class="btn btn-outline btn-sm flex h-12 w-12 cursor-pointer items-center gap-2 rounded-full">
                            <i class="hgi hgi-stroke hgi-user"></i>
                        </button>
                        <div id="js-user-dropdown-menu-popover"
                             data-popover
                             aria-hidden="true"
                             class="min-w-64"
                             data-side="bottom"
                             data-align="end">
                            <div role="menu" id="js-user-dropdown-menu-menu" aria-labelledby="js-user-dropdown-menu-trigger">
                                <!-- User Info Header -->
                                <div role="group">
                                    <div class="px-3 py-2">
                                        <p class="truncate text-sm font-semibold">{{ auth()->user()->email }}</p>
                                        @if (auth()->user()->supplier)
                                            <p class="text-muted-foreground truncate text-xs">
                                                {{ auth()->user()->supplier->name }}</p>
                                        @endif
                                    </div>
                                </div>
                                <hr role="separator" />

                                <!-- My Profile -->
                                <div role="menuitem">
                                    <a href="{{ route('profile.show') }}"
                                       class="flex w-full items-center gap-2 text-sm">
                                        <i class="hgi hgi-stroke hgi-user"></i>
                                        My Profile
                                    </a>
                                </div>

                                <!-- My Organization -->
                                @if (auth()->user()->supplier)
                                    <div role="menuitem">
                                        <a href="{{ route('suppliers.show', auth()->user()->supplier) }}"
                                           class="flex w-full items-center gap-2 text-sm">
                                            <i class="hgi hgi-stroke hgi-building-03"></i>
                                            My Organization
                                        </a>
                                    </div>
                                @endif

                                <hr role="separator" />

                                <!-- Theme Toggle -->
                                <div role="menuitem">
                                    <button type="button"
                                            onclick="toggleTheme()"
                                            class="flex w-full cursor-pointer items-center gap-2 text-left text-sm">
                                        <i class="hgi hgi-stroke hgi-paint-board"></i>
                                        <span>Toggle Theme</span>
                                    </button>
                                </div>

                                <hr role="separator" />

                                <!-- Logout -->
                                <div role="menuitem">
                                    <form action="{{ route('auth.logout') }}"
                                          method="POST"
                                          class="w-full">
                                        @csrf
                                        <button type="submit"
                                                class="text-destructive flex w-full cursor-pointer items-center gap-2 text-left text-sm">
                                            <i class="hgi hgi-stroke hgi-logout-04"></i>
                                            Sign Out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Guest Links -->
                    <button href="{{ route('auth.login.index') }}"
                       class="btn-secondary btn-sm ml-2">
                        Log In
                    </button>
                    <a href="{{ route('auth.register.index') }}"
                       class="btn-primary btn-sm">
                        Get Started
                    </a>
                @endauth
            </nav>

            <!-- Mobile Menu Button -->
            <button type="button"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="btn btn-ghost btn-sm cursor-pointer lg:hidden"
                    aria-label="Toggle menu">
                <i x-show="!mobileMenuOpen"
                   class="hgi hgi-stroke hgi-menu-01"></i>
                <i x-show="mobileMenuOpen"
                   class="hgi hgi-stroke hgi-cancel-01"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="border-border mt-4 border-t pt-4 lg:hidden"
             style="display: none;">
            <div class="flex flex-col gap-2">
                <!-- Common Mobile Links -->
                <a href="{{ route('home.index') }}"
                   class="btn btn-ghost {{ request()->routeIs('home.index') ? 'active' : '' }} justify-start">
                    <i class="hgi hgi-stroke hgi-home-09"></i>
                    Home
                </a>
                <a href="{{ route('suppliers.index') }}"
                   class="btn btn-ghost {{ request()->routeIs('suppliers.*') ? 'active' : '' }} justify-start">
                    <i class="hgi hgi-stroke hgi-search-01"></i>
                    Browse Suppliers
                </a>

                @auth
                    <!-- Authenticated Mobile Links -->
                    <button class="btn btn-primary justify-start"
                            onclick="document.getElementById('review-modal').showModal()">
                        <i class="hgi hgi-stroke hgi-quill-write-01"></i>
                        Write Review
                    </button>

                    <div class="border-border my-2 border-t pt-2">
                        <div class="bg-muted/50 mb-2 rounded-lg px-4 py-2">
                            <p class="truncate text-sm font-semibold">{{ auth()->user()->email }}</p>
                            @if (auth()->user()->supplier)
                                <p class="text-muted-foreground truncate text-xs">{{ auth()->user()->supplier->name }}</p>
                            @endif
                        </div>
                    </div>

                    @if (auth()->user()->supplier)
                        <a href="{{ route('suppliers.show', auth()->user()->supplier) }}"
                           class="btn btn-ghost justify-start">
                            <i class="hgi hgi-stroke hgi-building-03"></i>
16
                        </a>
                    @endif

                    <button type="button"
                            onclick="toggleTheme()"
                            class="btn btn-ghost justify-start">
                        <i class="hgi hgi-stroke hgi-paint-board"></i>
                        Toggle Theme
                    </button>

                    <form action="{{ route('auth.logout') }}"
                          method="POST"
                          class="mt-2">
                        @csrf
                        <button type="submit"
                                class="btn btn-destructive w-full justify-start">
                            <i class="hgi hgi-stroke hgi-logout-04"></i>
                            Sign Out
                        </button>
                    </form>
                @else
                    <!-- Guest Mobile Links -->
                    <div class="border-border my-2 border-t pt-2"></div>
                    <a href="{{ route('auth.login.index') }}"
                       class="btn-outline justify-start">
                        <i class="hgi hgi-stroke hgi-login-02"></i>
                        Log In
                    </a>
                    <a href="{{ route('auth.register.index') }}"
                       class="btn-primary justify-start">
                        <i class="hgi hgi-stroke hgi-user-add-02"></i>
                        Get Started
                    </a>
                @endauth
            </div>
        </nav>
    </div>
</header>

<x-review-modal />
