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
    <main class="w-full h-full">
        <section class="container">
            @yield('content')
        </section>
    </main>
</body>

</html>
