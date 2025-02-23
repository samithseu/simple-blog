@props(['error'])

@if ($error->any())
    <ul class="bg-red-500/15 text-red-500 p-4 rounded-lg my-6 *:text-lg *:font-semibold space-y-3">
        @foreach ($error->all() as $error)
            <li class="flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m1 15h-2v-2h2zm0-4h-2V7h2z" />
                </svg>
                <p class="leading-none">{{ $error }}</p>
            </li>
        @endforeach
    </ul>
@endif
