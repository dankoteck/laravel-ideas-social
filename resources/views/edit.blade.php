<form action="{{ route('idea.update', $idea->id) }}" class="" method="POST">
    @csrf
    @method('PUT')
    <input value="{{ $idea->title }}" name="title" />
    <input value="{{ $idea->description }}" name="description" />
    <button type="submit">Save</button>
</form>
