@section('title', 'Create Blog')

<x-layout>
    <x-section-title>Create Blog</x-section-title>
    <x-error :error="$errors" />

    <form action="{{ route('blog.store') }}" method="POST" class="w-full grid grid-cols-1 gap-6">
        @csrf
        <input class="px-4 py-2 rounded-lg text-lg" type="text" name="title" id="title" required maxlength="75"
            placeholder="Enter title for your blog..." value="{{ old('title') }}">
        <textarea class="px-4 py-2 rounded-lg text-lg resize-y" rows="6" name="body" id="body"
            placeholder="Enter description for your blog..." required value="{{ old('body') }}"></textarea>
        <button class="w-full py-2 rounded-lg bg-green-500/30 hover:bg-green-500 text-lg" type="submit">Create
            Now!</button>
    </form>
</x-layout>
