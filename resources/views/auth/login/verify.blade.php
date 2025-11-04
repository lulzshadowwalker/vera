@extends('components.layouts.auth')

@section('content')
<div class="grid min-h-svh grid-cols-2">
    <div class="relative col-span-1 hidden flex-col justify-between p-8 text-white lg:flex">
        <img src="https://images.unsplash.com/photo-1536195892759-c8a3c8e1945e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627"
            alt="Login Image" class="absolute inset-0 h-full w-full object-cover object-center -z-10" />
        <div class="flex items-center text-lg font-medium">
            <a href="{{ route('home.index') }}">
                <img src="https://pages.franken-ui.dev/logoipsum-284.svg" alt="{{ config('app.name') }}" data-uk-svg />
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
    <div class="col-span-2 flex flex-col p-8 lg:col-span-1">
        <div class="flex flex-1 items-center justify-center">
            <div class="w-xs space-y-4">
                <div class="flex flex-col space-y-2 text-center">
                    <h1 class="text-2xl font-semibold tracking-tight">
                        Verify Your Email
                    </h1>
                    <p class="text-muted-foreground text-sm">
                        Enter the 6-digit code sent to <strong>{{ session('login_email') }}</strong>
                    </p>
                </div>

                <form action="{{ route('auth.login.confirm-otp') }}" method="POST" class="uk-form-stacked space-y-4" x-data="{ code: '' }" @uk-input-pin:input.window="code = $event.detail.value">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('login_email') }}">

                    <div class="mt-4 h-14 flex justify-center">
                        <uk-input-pin name="otp" autofocus cls-custom="uk-form-md"></uk-input-pin>
                    </div>

                    @error('otp')
                        <div class="uk-form-help text-destructive text-center mt-2">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="uk-btn uk-btn-primary w-full" :disabled="code.length !== 6">
                        Verify & Sign In
                    </button>
                </form>

                <div class="flex items-center justify-between text-sm text-muted-foreground">
                    <form action="{{ route('auth.login.resend-otp') }}" method="POST">
                        @csrf
                        <button type="submit" class="uk-link">
                            Resend code
                        </button>
                    </form>

                    <a href="{{ route('auth.login.index') }}" class="uk-link">
                        Use different email
                    </a>
                </div>

                <div class="text-center text-sm text-muted-foreground">
                    Don't have an account?
                    <a href="{{ route('auth.register.index') }}" class="uk-link">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection