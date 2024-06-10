<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full">
    <main class="w-full h-full flex">
        <aside class="w-64 h-full bg-gray-100 border-r">
            <nav class="flex flex-col items-center justify-center h-full">
                <a href="{{ route('idea.index') }}">Home</a>

                @auth()
                    <p class="">Hello, {{ auth()->user()->name }}</p>

                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500">Logout</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}">Login</a>
                @endguest
            </nav>
        </aside>

        <section class="container p-8">
            @yield('content')
        </section>
    </main>
</body>

</html>
