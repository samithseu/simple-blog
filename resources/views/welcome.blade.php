@section('title', 'Home')

<x-layout>
    @if (session('success'))
        <x-session-message>{{ session('success') }}</x-session-message>
    @endif

    <x-section-title>Welcome to Jroch App!</x-section-title>
    <p class="text-center font-medium text-lg">A simple <span class="text-green-500">blog app</span> created using Laravel
        framework and its ecosystem.</p>
    <p class="mt-4 lg:mt-0 text-center font-medium text-lg">Click the below button to view all of your blogs!</p>
    <div class="flex items-center justify-center mt-4">
        <a href="{{ route('blogs') }}" title="All Blogs"
            class="text-lg capitalize text-green-500 bg-green-500/10 border border-dashed border-green-500 px-5 font-bold py-1 relative transition-all duration-200 hover:bg-green-500/50 hover:text-white">
            <svg class="absolute text-green-500 size-4 top-0 left-0 -translate-x-[53%] -translate-y-1/2"
                viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 13V25H14V13H26V11H14V0H12V11H0V13H12Z"
                    fill="currentColor" />
            </svg>
            <span>
                all blogs
            </span>
            <svg class="absolute text-green-500 size-4 bottom-0 right-0 translate-x-[53%] translate-y-[55%]"
                viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 13V25H14V13H26V11H14V0H12V11H0V13H12Z"
                    fill="currentColor" />
            </svg>
        </a>
    </div>
</x-layout>
