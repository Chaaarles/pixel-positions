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
<body class="bg-black">
<header>
    <nav class="flex flex-row justify-between px-10 py-4 border-b border-white/10 text-slate-50">
        <div><a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions logo">
            </a></div>
        <div class="flex flex-row gap-6 font-semibold">
            <a href="/">Jobs</a>
            <a href="#">Salaries</a>
            <a href="#">Careers</a>
        </div>
        <div class="flex flex-row gap-6">
            @auth
                <a>Post a Job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log Out</button>
                </form>
            @endauth
            @guest
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endguest
        </div>
    </nav>
</header>
<main class="container mx-auto mt-10 text-slate-50">
    {{ $slot }}
</main>
</body>
</html>
