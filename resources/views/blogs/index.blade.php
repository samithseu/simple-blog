@section('title', 'Blogs')

<x-layout>
    @if (session('success'))
        <x-session-message>{{ session('success') }}</x-session-message>
    @endif

    <div class="w-full flex items-center justify-between mt-16 mb-4">
        <h1 class="text-center font-bold text-4xl text-green-500">Blogs</h1>
        <a href="{{ route('blog.create') }}"
            class="bg-green-500/20 border border-green-500 px-2 py-1 rounded-lg flex items-center gap-2 text-green-500 text-lg font-semibold [&:has(svg)_svg]:size-5 transition-all duration-200 hover:bg-green-500 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 21q-.425 0-.712-.288T11 20v-7H4q-.425 0-.712-.288T3 12t.288-.712T4 11h7V4q0-.425.288-.712T12 3t.713.288T13 4v7h7q.425 0 .713.288T21 12t-.288.713T20 13h-7v7q0 .425-.288.713T12 21" />
            </svg>
            <span>
                Create Blog
            </span>
        </a>
    </div>
    @if ($blogs->isEmpty())
        <div class="text-center w-fit mx-auto mt-12">
            <p class="text-2xl font-bold mb-4">No blogs found!</p>
            <a href="{{ route('blog.create') }}" class="text-green-500 text-xl font-semibold">
                Go create one 🫵😃
            </a>
        </div>
    @else
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-4">
            @foreach ($blogs as $blog)
                <a href="{{ route('blog.show', $blog) }}"
                    class="backdrop-blur-[2px] group flex flex-col gap-2 border rounded-xl border-green-500/30 p-4 transition-all duration-200 hover:bg-green-500/30 hover:scale-[1.05]">
                    <span class="text-xl font-bold line-clamp-1 mb-2">{{ $blog->title }}</span>
                    <span
                        class="text-sm text-gray-500 line-clamp-2 group-hover:text-zinc-300 transition-all duration-200">{{ $blog->body }}
                    </span>
                </a>
            @endforeach
        </div>
        {{ $blogs->links() }}
    @endif
</x-layout>
