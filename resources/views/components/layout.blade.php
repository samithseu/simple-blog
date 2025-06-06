<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Jroch App - Simple Blogs App" />
    <meta name="description" content="A little Laravel application created for storing blogs." />
    <meta property="og:description" content="A little Laravel application created for storing blogs." />
    <meta property="og:image" content="{{ asset('sample-og-img.png') }}" />

    <title>
        @hasSection('title')
            Jroch App - @yield('title')
        @else
            Jroch App
        @endif
    </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">

    {{-- style --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <header class="sticky left-0 top-4 mt-4 px-4 lg:px-2 xl:px-0">
        <nav {{-- requestUri || pathInfo --}}
            class="mx-auto flex w-full max-w-[1200px] flex-col items-center justify-between rounded-2xl border border-[rgba(0,201,80,0.1)] bg-green-500/5 p-6 shadow-[0_-1px_0_1px] shadow-green-500/30 backdrop-blur-lg md:flex-row">
            <a href="{{ route('home') }}" class="z-20 text-2xl font-bold">
                <span class="text-green-500">Jroch</span>App
            </a>
            <ul
                class="z-20 flex flex-wrap items-center gap-4 justify-center *:transition *:duration-200 *:font-semibold">
                {{-- greeting user --}}
                @auth
                    <li class="border-r border-green-500/20 pr-4">Hello, {{ Auth::user()->name }}!</li>
                @endauth
                {{-- route links --}}
                <?php $name = Route::currentRouteName(); ?>
                <li class="{{ $name == 'home' ? 'active' : '' }} hover:text-green-500">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ $name == 'about' ? 'active' : '' }} hover:text-green-500">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ $name == 'blogs' || $name == 'blog.show' ? 'active' : '' }} hover:text-green-500">
                    <a href="{{ route('blogs') }}">Blogs</a>
                </li>


                @auth
                    {{-- Logout Button --}}
                    <form class="w-max h-max" action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button
                            class="bg-transparent border border-green-500 px-3 py-1 rounded-lg hover:bg-green-700 font-semibold text-green-500 hover:text-black"
                            type="submit">Logout</button>
                    </form>
                @endauth

                @guest
                    {{-- Login Button --}}
                    <a class="bg-green-500 text-black px-3 py-1 rounded-lg hover:bg-green-700 font-semibold"
                        href="{{ route('auth.show.login') }}">Login
                    </a>
                @endguest
            </ul>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-[1200px] px-4 lg:px-2 xl:px-0">
        {{ $slot }}
    </main>

</body>

</html>
