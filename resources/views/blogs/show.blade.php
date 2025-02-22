@section('title', 'Blog ' . $blog->id)

<x-layout>
    <a href="{{ url()->previous() }}"
        class="w-max mt-8 mb-4 border rounded-lg px-4 py-1 border-green-500 transition-all duration-200 hover:bg-green-500 hover:text-black font-semibold flex items-center gap-1">
        {{-- left arrow svg --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="size-[1em]" viewBox="0 0 24 24">
            <path fill="currentColor" d="m10 18l-6-6l6-6l1.4 1.45L7.85 11H20v2H7.85l3.55 3.55z" />
        </svg>
        Back
    </a>
    <h2 class="text-left my-4 text-2xl font-bold">
        <span class="text-white">(#{{ $blog->id }})</span>
        <span class="text-green-500">{{ $blog->title }}</span>
    </h2>
    <p class="font-normal text-gray-400 text-lg">{{ $blog->body }}</p>
</x-layout>
