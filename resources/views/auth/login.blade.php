@section('title', 'Login')

<x-layout>
    <x-section-title>Login to your account!</x-section-title>
    <x-error :error="$errors" />

    <form action="{{ route('auth.login') }}" method="POST" class="w-full grid grid-cols-1 gap-6">
        @csrf
        <input class="px-4 py-2 rounded-lg text-lg" type="email" name="email" id="email" required
            placeholder="Enter email..." value="{{ old('email') }}">
        <input class="px-4 py-2 rounded-lg text-lg" type="password" name="password" id="password" required
            placeholder="Enter password...">
        <button class="w-full py-2 rounded-lg bg-green-500/30 hover:bg-green-500 text-lg" type="submit">Login</button>
    </form>
</x-layout>
