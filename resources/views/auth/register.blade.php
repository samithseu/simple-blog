@section('title', 'Register')

<x-layout>
    <x-section-title>Register New Account!</x-section-title>
    <x-error :error="$errors" />

    <form action="{{ route('auth.register') }}" method="POST" class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6">
        @csrf
        <input class="border border-green-500/20 px-4 py-2 rounded-lg text-lg" type="text" name="name" id="name"
            required placeholder="Enter name..." value="{{ old('name') }}">
        <input class="border border-green-500/20 px-4 py-2 rounded-lg text-lg" type="email" name="email"
            id="email" required placeholder="Enter email..." value="{{ old('email') }}">
        <input class="border border-green-500/20 px-4 py-2 rounded-lg text-lg" type="password" name="password"
            id="password" required placeholder="Enter password...">
        <input class="border border-green-500/20 px-4 py-2 rounded-lg text-lg" type="password"
            name="password_confirmation" id="password_confirmation" required
            placeholder="Enter password confirmation...">
        <button
            class="w-full lg:col-span-2 py-2 rounded-lg bg-green-500/30 hover:bg-green-500 text-lg transition-all duration-200"
            type="submit">Register</button>
    </form>
    <p class="text-center text-sm mt-3 text-zinc-300">Already have an account? <a class="text-green-500 font-bold"
            href="{{ route('auth.show.login') }}">Login</a></p>
</x-layout>
