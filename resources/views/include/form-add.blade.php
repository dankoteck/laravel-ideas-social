<form class="flex flex-col items-center justify-center" action="{{ route('idea.createOne') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title" class="border-2 border-gray-300 rounded-md p-2">
    @error('title')
        <span class="text-red-500">{{ $message }}</span>
    @enderror

    <input type="text" name="description" placeholder="Description" class="border-2 border-gray-300 rounded-md p-2">
    @error('description')
        <span class="text-red-500">{{ $message }}</span>
    @enderror

    <button type="submit">Add</button>
</form>
