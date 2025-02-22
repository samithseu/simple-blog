@section('title', 'Home')

<x-layout>
    <x-section-title>Welcome to Jroch App!</x-section-title>
    <p class="text-center font-medium text-lg">Click the button belows to view all blogs!</p>
    <div class="flex items-center justify-center mt-4">
        <a href="/blogs"
            class="bg-green-500 rounded-lg px-4 py-2 text-black font-bold transition duration-200 hover:bg-green-700">All
            blogs
        </a>
    </div>
</x-layout>
