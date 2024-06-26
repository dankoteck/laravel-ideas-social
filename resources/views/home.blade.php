@extends('layouts.default')

@section('content')
    <h1 class="text-3xl font-bold">CRUD Ideas!</h1>

    @if (session()->has('success'))
        <p class="text-green-500 text-lg">
            {{ session('success') }}
        </p>
    @endif

    <div class="space-y-4">
        @forelse ($ideas as $idea)
            <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" class="flex items-center gap-2">
                @csrf
                @method('DELETE')
                <p>{{ $idea->title }}: </p>
                <p>{{ $idea->description }}</p>
                <button class="bg-red-500 rounded-md py-1 px-3 text-white" type="submit">X</button>
            </form>
            <a href="{{ route('ideas.show', $idea->id) }}" class="text-blue-500">View</a>

        @empty
            <p class="">No ideas yet.</p>
        @endforelse
    </div>

    {{ $ideas->withQueryString()->links() }}

    <hr class="my-8" />

    @auth()
        @include ('include.form-message')
        @include ('include.search-input')
        @include ('include.form-add')
    @endauth
@endsection
