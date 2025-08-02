<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Signup</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col"
    >
        <form class="w-100 flex flex-col gap-3">
            @csrf
            <input
                class="w-full border-1 rounded-md border-gray-200 p-2"
                type="text"
                placeholder="Full Name"
            />
            <input
                class="w-full border-1 rounded-md border-gray-200 p-2"
                type="email"
                placeholder="E-mail"
            />
            <input
                class="w-full border-1 rounded-md border-gray-200 p-2"
                type="password"
                placeholder="password"
            />
            <input
                class="w-full border-1 rounded-md border-gray-200 p-2"
                type="password"
                placeholder="re-type password"
            />
            <button
                class="flex items-center justify-center gap-2 w-full px-4 py-2 bg-gray-800 border-none text-white text-bold rounded-md cursor-pointer"
            >
                Signup
            </button>
            <a
                href="/auth/redirect"
                class="flex items-center justify-center gap-2 w-full px-4 py-3 bg-white border border-gray-300 text-gray-800 rounded-md transition hover:bg-gray-50"
            >
                <img
                    src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"
                    alt="Google"
                    class="w-5 h-5"
                />
                <span class="text-sm font-medium">Sign in with Google</span>
            </a>
        </form>
    </body>
</html>
