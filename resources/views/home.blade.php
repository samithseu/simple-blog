<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- style --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="sticky left-0 top-4 mt-4">
        <nav
            class="mx-auto flex w-full max-w-[1200px] flex-col items-center justify-between gap-6 rounded-2xl border border-[hsla(0,0%,100%,0.1)] bg-green-500/5 p-6 shadow-[0_-1px_0_1px] shadow-green-500/30 backdrop-blur-lg md:flex-row">
            <a href="/home" class="z-20 text-2xl font-bold">BRAND</a>
            <ul class="z-20 flex flex-wrap items-center gap-6">
                <li><a href="/">Option 1</a></li>
                <li><a href="/">Option 2</a></li>
                <li><a href="/">Option 3</a></li>
                <li><a href="/">Option 4</a></li>

            </ul>
        </nav>
    </header>

</body>

</html>
