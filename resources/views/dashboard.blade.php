@extends('components.layouts.app')

@section('content')
<div class="mt-8 text-center">
    <form action="{{ route('auth.logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="uk-btn uk-btn-text text-muted-foreground">
            <uk-icon icon="log-out" class="size-4 mr-1"></uk-icon>
            Sign Out
        </button>
    </form>
</div>
@endsection
