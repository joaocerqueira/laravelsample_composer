@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/samples.png" alt="Samples">
        <div class="title m-b-md">
            Laravel Samples
        </div>
        <p class="mssg">{{ session('mssg') }}</p><br>
        <a href="/laravelsample">Show Samples</a><br>
        <a href="/laravelsample/create">Create new Sample</a>
    </div>
</div>
@endsection
