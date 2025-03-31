@section('title', 'Login')

<x-layout>
    @if (session('success'))
        <x-session-message>{{ session('success') }}</x-session-message>
    @endif

    <x-section-title>Login to your account!</x-section-title>
    <x-error :error="$errors" />

    <form action="{{ route('auth.login') }}" method="POST" class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6">
        @csrf
        <input class="border border-green-500/20 px-4 py-2 rounded-lg text-lg" type="email" name="email" id="email"
            required placeholder="Enter email..." value="{{ old('email') }}">
        <input class="border border-green-500/20 px-4 py-2 rounded-lg text-lg" type="password" name="password"
            id="password" required placeholder="Enter password...">
        <button
            class="w-full lg:col-span-2  py-2 rounded-lg bg-green-500/30 hover:bg-green-500 text-lg transition-all duration-200"
            type="submit">Login</button>
    </form>
    <p class="text-center text-sm mt-3 text-zinc-300">Don't have an account? <a class=" text-green-500 font-bold"
            href="{{ route('auth.register') }}">Register</a></p>
</x-layout>
