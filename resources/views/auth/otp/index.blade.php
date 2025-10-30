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
    <div class="col-span-2 flex flex-col p-8 lg:col-span-1">
        <div class="flex flex-1 items-center justify-center">
            <div class="w-xs space-y-4">
                <div class="flex flex-col space-y-2 text-center">
                    <h1 class="text-2xl font-semibold tracking-tight">
                        Verify Your Email
                    </h1>
                    <p class="text-muted-foreground text-sm">
                        Enter the OTP sent to your email address
                    </p>
                </div>

                <form action="#" method="POST" class="uk-form-stacked space-y-4" x-data="{ code: '' }" @uk-input-pin:input.window="code = $event.detail.value">
                    @csrf

                    <div class="mt-4 h-14 flex justify-center">
                        <uk-input-pin name="code" autofocus cls-custom="uk-form-md" onchange="console.log"></uk-input-pin>
                    </div>

                    <button class="uk-btn uk-btn-primary w-full" :disabled="!code">
                        Verify
                    </button>
                </form>

                <div class="text-center text-sm text-muted-foreground">
                    Didn't receive the code?
                    <a href="#" class="uk-link">
                        Resend
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
