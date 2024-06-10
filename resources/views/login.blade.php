@extends('layouts.default')

@section('content')
    <h1 class="">Login</h1>

    <form action="{{ route('auth.index') }}" class="flex flex-col gap-4" method="POST">
        @csrf
        <label for="email">E-Mail Address</label>
        <input class="border border-gray-200 p-0.5" type="email" name="email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label for="password">Password</label>
        <input class="border border-gray-200 p-0.5" type="password" name="password" />
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <button type="submit">Login</button>
    </form>

    <p class="">Not have an account? <a href="{{ route('auth.register') }}" class="text-blue-500">Register</a></p>
@endsection
