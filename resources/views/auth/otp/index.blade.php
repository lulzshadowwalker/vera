@extends('components.layouts.auth')

@section('content')
<div class="grid min-h-svh grid-cols-2">
    <div class="relative col-span-1 hidden flex-col justify-between p-8 text-white lg:flex">
        <img src="https://images.unsplash.com/photo-1536195892759-c8a3c8e1945e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=627"
            alt="Login Image" class="absolute inset-0 h-full w-full object-cover object-center -z-10" />
        <div class="flex items-center text-lg font-medium">
            <a href="#">
                <img src="https://pages.franken-ui.dev/logoipsum-284.svg" alt="Acme Inc." class="h-8" />
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

                <form action="#" method="POST" class="space-y-4" x-data="{
                    pin: ['', '', '', ''],
                    get code() { return this.pin.join(''); },
                    focusNext(index) {
                        if (this.pin[index] && index < 3) {
                            this.$refs[`pin_${index + 1}`].focus();
                        }
                    },
                    focusPrev(index) {
                        if (!this.pin[index] && index > 0) {
                            this.$refs[`pin_${index - 1}`].focus();
                        }
                    },
                    handlePaste(e) {
                        e.preventDefault();
                        const text = e.clipboardData.getData('text').slice(0, 4);
                        this.pin = text.split('').concat(Array(4).fill('')).slice(0, 4);
                        this.$nextTick(() => this.$refs.pin_3.focus());
                    }
                }">
                    @csrf

                    <div class="mt-4 flex justify-center gap-2">
                        <template x-for="(digit, index) in pin" :key="index">
                            <input type="text"
                                maxlength="1"
                                class="input w-12 h-12 text-center text-lg"
                                x-model="pin[index]"
                                :x-ref="`pin_${index}`"
                                @input="focusNext(index)"
                                @keydown.backspace="focusPrev(index)"
                                @paste="handlePaste"
                                :autofocus="index === 0"
                            >
                        </template>
                    </div>
                    <input type="hidden" name="code" :value="code">

                    <button class="btn btn-primary w-full" :disabled="code.length !== 4">
                        Verify
                    </button>
                </form>

                <div class="text-center text-sm text-muted-foreground">
                    Didn't receive the code?
                    <a href="#" class="link link-primary">
                        Resend
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
