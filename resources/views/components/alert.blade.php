@props(['type' => 'info'])

@php
    $types = [
        'success' => [
            'class' => 'alert',
            'icon' => 'hgi-checkmark-circle-02',
        ],
        'error' => [
            'class' => 'alert-destructive',
            'icon' => 'hgi-cancel-01',
        ],
        'warning' => [
            'class' => 'alert-destructive',
            'icon' => 'hgi-alert-square',
        ],
        'info' => [
            'class' => 'alert',
            'icon' => 'hgi-alert-circle',
        ],
    ];

    $config = $types[$type] ?? $types['info'];
@endphp

<div class="{{ $config['class'] }}"
     x-data="{ show: true }"
     x-show="show"
     x-transition>
    <i class="hgi hgi-stroke {{ $config['icon'] }}"></i>
    <div class="flex items-center gap-4 ms-5">
        <p>{{ $slot }}</p>
        <button type="button"
                @click="show = false"
                class="ml-auto cursor-pointer hover:opacity-70">
            <i class="hgi hgi-stroke hgi-cancel-01"></i>
        </button>
    </div>

</div>
