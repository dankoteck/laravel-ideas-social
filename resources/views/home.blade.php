@extends('layouts.default')

@section('content')
    <h1 class="text-3xl font-bold">Hello World!</h1>

    <div class="space-y-4">
        @foreach ($ideas as $idea)
            <div class="flex items-center gap-2">
                <p>{{ $idea->title }}: </p>
                <p>{{ $idea->description }}</p>
            </div>
        @endforeach
    </div>

    {{ $ideas->links() }}


    <hr class="my-8" />

    @include ('include.form-message')
    @include ('include.form-add')
@endsection
