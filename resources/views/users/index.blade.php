<section class="">
    <ul class="">
        @foreach ($users as $user)
            <li class="">
                <a href="{{ route('users.show', $user) }}" class="flex gap-8">
                    <span>{{ $user->id }} - </span>
                    <span>{{ $user->name }} - </span>
                    <span>{{ $user->email }} - </span>
                </a>
            </li>
        @endforeach
    </ul>

</section>
