@extends('components.layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl px-6 py-20 lg:py-28">
        <div class="grid grid-cols-1 gap-16 lg:grid-cols-2">
            <!-- Contact Info -->
            <div class="flex flex-col justify-start">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-foreground sm:text-5xl">
                    Get in touch with our team
                </h1>
                <p class="mb-10 text-lg leading-relaxed text-muted-foreground">
                    Fill out the form and we'll get back to you as soon as possible.
                </p>

                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div
                            class="bg-primary/10 flex h-12 w-12 shrink-0 items-center justify-center rounded-lg text-primary">
                            <i class="hgi hgi-stroke hgi-mail-01 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-foreground">Email us</h3>
                            <p class="text-muted-foreground font-medium">support@assesk.com</p>
                            <p class="text-muted-foreground font-medium">sales@assesk.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="card p-8 lg:p-10 bg-card/60 backdrop-blur-xl">
                <form x-data x-ref="form" action="{{ route('contact.store') }}" method="POST" class="grid gap-6">
                    @csrf

                    <div class="grid gap-2">
                        <label for="name" class="font-medium">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', auth()->user()?->name) }}" required
                            placeholder="John Doe" class="input @error('name') border-destructive @enderror">
                        @error('name')
                            <p class="text-destructive text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid gap-2">
                        <label for="email" class="font-medium">Contact Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', auth()->user()?->email) }}"
                            required placeholder="john@company.com"
                            class="input @error('email') border-destructive @enderror">
                        @error('email')
                            <p class="text-destructive text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid gap-2">
                        <label for="subject" class="font-medium">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                            placeholder="How can we help?" class="input @error('subject') border-destructive @enderror">
                        @error('subject')
                            <p class="text-destructive text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid gap-2">
                        <label for="message" class="font-medium">Message</label>
                        <textarea id="message" name="message" rows="6" required
                            placeholder="Tell us more about your inquiry..."
                            class="textarea min-h-[150px] @error('message') border-destructive @enderror"
                            @keydown.ctrl.enter="$refs.form.submit()"
                            @keydown.meta.enter="$refs.form.submit()">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-destructive text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary h-12 w-full mt-4 shadow-xl shadow-primary/20">
                        <i class="hgi hgi-stroke hgi-sent-01 mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection