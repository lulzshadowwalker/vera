@props(['type' => 'info'])

@php
$types = [
    'success' => [
        'class' => 'uk-alert',
        'icon' => 'circle-check',
    ],
    'error' => [
        'class' => 'uk-alert uk-alert-destructive',
        'icon' => 'circle-x',
    ],
    'warning' => [
        'class' => 'uk-alert uk-alert-destructive',
        'icon' => 'circle-alert',
    ],
    'info' => [
        'class' => 'uk-alert',
        'icon' => 'info',
    ],
];

$config = $types[$type] ?? $types['info'];
@endphp

<div class="{{ $config['class'] }}" data-uk-alert>
    <a href class="uk-alert-close" data-uk-close></a>
    <div class="flex items-start gap-3">
        <div class="shrink-0">
            <uk-icon icon="{{ $config['icon'] }}" class="size-5"></uk-icon>
        </div>
        <div class="flex-1">
            {{ $slot }}
        </div>
    </div>
</div>
