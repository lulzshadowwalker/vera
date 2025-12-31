@props(['type' => 'info'])

@php
$types = [
    'success' => [
        'class' => 'alert',
        'icon' => 'circle-check',
    ],
    'error' => [
        'class' => 'alert-destructive',
        'icon' => 'circle-x',
    ],
    'warning' => [
        'class' => 'alert-destructive',
        'icon' => 'circle-alert',
    ],
    'info' => [
        'class' => 'alert',
        'icon' => 'info',
    ],
];

$config = $types[$type] ?? $types['info'];
@endphp

<div class="{{ $config['class'] }}" x-data="{ show: true }" x-show="show" x-transition>
    <!-- TODO: ICON: {{ $config['icon'] }} -->
    <section class="flex-1">
        {{ $slot }}
    </section>
    <button type="button" @click="show = false" class="ml-auto cursor-pointer hover:opacity-70">
        <!-- TODO: ICON: x -->
        ✕
    </button>
</div>
