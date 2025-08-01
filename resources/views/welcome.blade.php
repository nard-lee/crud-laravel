<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="
        bg-[#FDFDFC] 
        dark:bg-[#0a0a0a] 
        text-[#1b1b18] 
        flex 
        p-6 
        lg:p-8 
        items-center 
        lg:justify-center 
        min-h-screen 
        flex-col"
    >
        <form class="w-100 flex flex-col gap-3">
            <input class="w-full border-1 rounded-md border-gray-200 p-2" type="text" placeholder="Full Name">
            <input class="w-full border-1 rounded-md border-gray-200 p-2" type="email" placeholder="E-mail">
            <input class="w-full border-1 rounded-md border-gray-200 p-2" type="password" placeholder="password">
            <input class="w-full border-1 rounded-md border-gray-200 p-2" type="password" placeholder="re-type password">
            <a href="/auth/redirect">Sign in with Google</a>
        </form>
    </body>
</html>
