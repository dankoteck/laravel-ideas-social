<form action="{{ route('ideas.comments.store', $idea) }}" method="POST" class="">
    @csrf
    @method('POST')

    <textarea name="comment" placeholder="Comment..." class="border-2 border-gray-300 rounded-md p-2"></textarea>
    <button type="submit">Add</button>
</form>
