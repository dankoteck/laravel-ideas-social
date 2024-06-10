<section class="">
    <h1 class="">{{ $idea->title }}</h1>
    <p>{{ $idea->description }}</p>
    <a href="{{ route('idea.index') }}" class="text-gray-500">Back</a>
    <a href="{{ route('idea.edit', $idea->id) }}" class="text-blue-500">Edit</a>

    <ul class="">
        @foreach ($idea->comments as $comment)
            <li>
                <p class="">Created by {{ $comment->users->name }}</p>
                <p class="">{{ $comment->content }}</p>
            </li>
        @endforeach
    </ul>

    @include ('include.comment-section')
</section>
