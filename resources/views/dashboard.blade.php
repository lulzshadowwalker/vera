@extends('components.layouts.app')

@section('content')
<div class="mt-8 text-center">
    <form action="{{ route('auth.logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="btn btn-ghost text-muted-foreground">
            <!-- TODO: ICON: log-out -->
            Sign Out
        </button>
    </form>
</div>
@endsection
