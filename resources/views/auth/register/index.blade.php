@extends('components.layouts.auth')

@section('content')
<div class="grid min-h-svh grid-cols-2">
    <div class="relative col-span-1 hidden flex-col justify-between p-8 text-white lg:flex">
        <img src="https://images.unsplash.com/photo-1536195892759-c8a3c8e1945e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627"
            alt="Login Image" class="absolute inset-0 h-full w-full object-cover object-center -z-10" />
        <div class="flex items-center text-lg font-medium">
            <a href="#">
                <img src="https://pages.franken-ui.dev/logoipsum-284.svg" alt="Acme Inc." data-uk-svg />
            </a>
        </div>
        <blockquote class="space-y-2">
            <p class="text-lg">
                "This library has saved me countless hours of work and helped me deliver
                stunning designs to my clients faster than ever before."
            </p>
            <footer class="text-sm">Sofia Davis</footer>
        </blockquote>
    </div>
    <div class="col-span-2 flex flex-col p-8 lg:col-span-1 bg-background text-foreground">
        <div class="flex flex-1 items-center justify-center">
            <div class="w-sm space-y-5">
                <div class="flex flex-col space-y-2 text-center">
                    <h1 class="text-2xl font-semibold tracking-tight">
                        Create an account
                    </h1>
                    <p class="text-muted-foreground text-sm">
                        Enter your email below to create your account
                    </p>
                </div>

                <form action="{{ route('auth.register.store') }}" method="POST" class="uk-form-stacked space-y-4">
                    @csrf

                    <div class="flex items-center gap-2">
                        <div class="flex-1">
                            <label for="first_name" class="uk-form-label uk-form-label-required">First Name</label>
                            <div class="uk-form-controls">
                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    class="uk-input @error('first_name') uk-form-destructive @enderror"
                                    placeholder="John"
                                    value="{{ old('first_name') }}"
                                    required
                                >
                            </div>
                            @error('first_name')
                                <div class="uk-form-help text-destructive mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex-1">
                            <label for="last_name" class="uk-form-label uk-form-label-required">Last Name</label>
                            <div class="uk-form-controls">
                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    class="uk-input @error('last_name') uk-form-destructive @enderror"
                                    placeholder="Doe"
                                    value="{{ old('last_name') }}"
                                    required
                                >
                            </div>
                            @error('last_name')
                                <div class="uk-form-help text-destructive mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" class="uk-form-label uk-form-label-required">Work Email</label>
                        <div class="uk-form-controls">
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="uk-input @error('email') uk-form-destructive @enderror"
                                placeholder="email@company.com"
                                value="{{ old('email') }}"
                                required
                            >
                        </div>
                        @error('email')
                            <div class="uk-form-help text-destructive mt-1">{{ $message }}</div>
                        @enderror
                        <div class="uk-form-help mt-1">Please use your work email. Public email providers are not allowed.</div>
                    </div>

                    <div>
                        <label for="backup_email" class="uk-form-label">Backup Email</label>
                        <div class="uk-form-controls">
                            <input
                                type="email"
                                id="backup_email"
                                name="backup_email"
                                class="uk-input @error('backup_email') uk-form-destructive @enderror"
                                placeholder="backup@company.com"
                                value="{{ old('backup_email') }}"
                            >
                        </div>
                        @error('backup_email')
                            <div class="uk-form-help text-destructive mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="uk-btn uk-btn-primary w-full">
                        Continue
                    </button>
                </form>

                <p class="text-muted-foreground px-8 text-center text-sm">
                    By clicking continue, you agree to our
                    <a class="uk-link" href="{{ route('terms-and-conditions.index') }}" target="_blank"> Terms of Service </a> and
                    <a class="uk-link" href="{{ route('privacy-policy.index') }}" target="_blank" uk-toggle> Privacy Policy </a>.
                </p>

                <div class="text-center text-sm text-muted-foreground mt-2">
                    Already have an account?
                    <a href="{{ route('auth.login.index') }}" class="uk-link">
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
