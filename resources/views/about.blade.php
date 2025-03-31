@section('title', 'About')

<x-layout>
    <x-section-title>About</x-section-title>
    <div
        class="w-full h-fit grid grid-cols-1 justify-items-center items-start md:grid-cols-[max-content,1fr] gap-5 @container">
        <img class="md:h-44 @[360px]:h-44" loading="eager"
            src="https://munofore.com/wp-content/uploads/2015/10/blogging-cat.jpg" alt="Blog meme" />
        <p
            class="text-lg text-justify text-gray-400 leading-normal [&:has(a)_a]:text-green-500 [&:has(.highlight)_.highlight]:text-green-500">
            A simple application using <a href="https://laravel.com" target="_blank" title="Laravel">Laravel</a> framework
            allows users to create, read,
            and delete records efficiently. It utilizes Laravel's <span class="highlight">Eloquent ORM</span> for
            database
            interactions, making data
            management seamless. The application includes routes, controllers, and views to handle user requests and
            display
            information dynamically. Laravel’s built-in validation and middleware ensure data integrity and security.
            This app is being deployed on <a href="https://cloud.laravel.com/" target="_blank"
                title="Laravel Cloud">Laravel Cloud</a>, so your data are stored there.
            Developed by <a href="https://t.me/samithseu" target="_blank" title="Samith's Telegram">@samithseu</a></p>
    </div>
</x-layout>
