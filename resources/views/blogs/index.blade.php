@section('title', 'Blogs')

<x-layout>
    <x-section-title>Blogs</x-section-title>
    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($posts as $post)
            <div
                class="flex flex-col gap-2 border rounded-xl border-green-500 p-4 bg-gradient-to-br hover:from-green-500/40 hover:to-transparent transition-all duration-300">
                <a href="/" class="text-xl font-bold line-clamp-2">{{ $post->title }}</a>
                <p class="text-sm text-gray-400 line-clamp-2">{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
</x-layout>
