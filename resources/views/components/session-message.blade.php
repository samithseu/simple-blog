<div onanimationend="this.remove()"
    class="animate-message fixed top-4 left-1/2 w-fit border px-4 py-2 rounded-lg *:text-lg md:*:text-xl backdrop-blur-md bg-green-500/40 border-green-500/40 select-none cursor-pointer *:font-bold [&:has(svg)_svg]:size-6 [&:has(svg)_svg]:shrink-0 flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
        <path fill="currentColor"
            d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
    </svg>
    <span class="text-nowrap">{{ $slot }}</span>
</div>
