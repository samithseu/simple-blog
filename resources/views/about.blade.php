@section('title', 'About')

<x-layout>
    <x-section-title>About</x-section-title>
    <p
        class="text-lg text-justify text-gray-400 leading-normal [&:has(a)_a]:text-green-500 [&:has(.highlight)_.highlight]:text-green-500">
        A simple application using <a href="https://laravel.com" target="_blank" title="Laravel">Laravel</a> framework
        allows users to create, read,
        and delete records efficiently. It utilizes Laravel's <span class="highlight">Eloquent ORM</span> for database
        interactions, making data
        management seamless. The application includes routes, controllers, and views to handle user requests and display
        information dynamically. Laravel’s built-in validation and middleware ensure data integrity and security.
        Developed by <a href="https://t.me/samithseu" target="_blank" title="Samith's Telegram">@samithseu</a></p>
</x-layout>
