@if (session()->has('success'))
    <div class="">
        <p class="text-green-700">{{ session('success') }}</p>
    </div>
@endif
