@if ($message = session()->pull('success'))
    <x-alert type="success">
        {{ $message }}
    </x-alert>
@endif

@if ($message = session()->pull('error'))
    <x-alert type="error">
        {{ $message }}
    </x-alert>
@endif

@if ($message = session()->pull('warning'))
    <x-alert type="warning">
        {{ $message }}
    </x-alert>
@endif

@if ($message = session()->pull('info'))
    <x-alert type="info">
        {{ $message }}
    </x-alert>
@endif
