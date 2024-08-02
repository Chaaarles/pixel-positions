<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pixel Positions</title>
</head>
<body>
<header>
    <nav class="flex flex-row justify-between">
        <div><a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions logo">
            </a></div>
        <div>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
        <div>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </nav>
</header>
<main>
    {{ $slot }}
</main>
</body>
</html>
