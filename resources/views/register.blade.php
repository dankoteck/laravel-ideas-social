@extends('layouts.default')

@section('content')
    <h1 class="">Register</h1>

    <form action="{{ route('auth.store') }}" class="flex flex-col gap-4" method="POST" autocomplete="off">
        @csrf
        <label for="name">Name</label>
        <input class="border border-gray-200 p-0.5" type="text" name="name">
        <label for="email">E-Mail Address</label>
        <input class="border border-gray-200 p-0.5" type="email" name="email">
        <label for="password">Password</label>
        <input class="border border-gray-200 p-0.5" type="password" name="password" />
        <label for="password_confirmation">Confirm Password</label>
        <input class="border border-gray-200 p-0.5" type="password" name="password_confirmation" />
        <button type="submit">Register</button>
    </form>
@endsection
