@props([
    'title',
    'description',
    'icon' => 'hgi-search-01',
])

<div {{ $attributes->merge(['class' => 'col-span-full']) }}>
    <div class="border-border flex min-w-0 flex-1 flex-col items-center justify-center gap-6 text-balance rounded-lg border border-dashed p-6 text-center md:p-12">
        <header class="flex max-w-sm flex-col items-center gap-2 text-center">
            <div class="bg-secondary/80 text-foreground mb-2 flex size-10 shrink-0 items-center justify-center rounded-lg">
                <i class="hgi hgi-stroke {{ $icon }} text-xl"></i>
            </div>
            <h3 class="text-lg font-medium tracking-tight">{{ $title }}</h3>
            <p class="text-muted-foreground text-sm/relaxed">
                {{ $description }}
            </p>
        </header>
        @if (isset($actions))
            <section class="flex w-full min-w-0 max-w-sm flex-col items-center gap-4 text-balance text-sm">
                <div class="flex gap-2">
                    {{ $actions }}
                </div>
            </section>
        @endif
    </div>
</div>
