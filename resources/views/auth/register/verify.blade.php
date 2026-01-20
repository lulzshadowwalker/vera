@extends('components.layouts.auth')

@section('content')
<div class="grid min-h-svh grid-cols-2">
    <div class="relative col-span-1 hidden flex-col justify-between p-8 text-white lg:flex">
        <img src="https://images.unsplash.com/photo-1536195892759-c8a3c8e1945e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627"
            alt="Login Image" class="absolute inset-0 h-full w-full object-cover object-center -z-10" />
        <div class="flex items-center text-lg font-medium">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('images/logo-white-col.png') }}" alt="{{ config('app.name') }}" class="h-14 w-auto" />
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
            <div class="w-xs space-y-4">
                <div class="flex flex-col space-y-2 text-center">
                    <h1 class="text-2xl font-semibold tracking-tight">
                        Verify Your Email
                    </h1>
                    <p class="text-muted-foreground text-sm">
                        Enter the 6-digit code sent to <strong>{{ session('registration_data.email') }}</strong>
                    </p>
                </div>

                <form action="{{ route('auth.register.confirm-otp') }}" method="POST" class="space-y-4" x-data="pin">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('registration_data.email') }}">
                    <input type="hidden" name="otp" x-model="value">

                    <div x-ref="container" class="mt-4 flex justify-center gap-2">
                        <template x-for="(input, index) in length" :key="index">
                            <input type="text"
                                type="tel"
                                @input="onInput($event, index)"
                                @keydown.backspace="onBackspace($event, index)"
                                @paste="onPaste($event)"
                                maxlength="1"
                                class="js-pin-input input h-12 min-w-12 text-center text-xl font-bold"
                                x-init="if (index === 0) $el.focus()"
                            >
                        </template>
                    </div>

                    @error('otp')
                        <div class="text-destructive text-start mt-2 text-sm">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary w-full" :disabled="value.length !== 6">
                        Verify & Create Account
                    </button>
                </form>

                <div class="flex items-center justify-between text-sm text-muted-foreground" x-data="otpTimer({ timeLeft: {{ $timeLeft }} })">
                    <form action="{{ route('auth.register.resend-otp') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-primary hover:underline disabled:opacity-50 disabled:no-underline" :disabled="timeLeft > 0">
                            <span x-show="timeLeft <= 0">Resend code</span>
                            <span x-show="timeLeft > 0" x-cloak>Resend code (<span x-text="timeLeft"></span>s)</span>
                        </button>
                    </form>

                    <a href="{{ route('auth.register.index') }}" class="text-primary hover:underline">
                        Use different email
                    </a>
                </div>

                <div class="text-center text-sm text-muted-foreground">
                    Already have an account?
                    <a href="{{ route('auth.login.index') }}" class="text-primary hover:underline">
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
