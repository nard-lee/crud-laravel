
@extends('layouts.form')
@section('title', 'login')

@section('content')
<form id="login_form" class="w-100 flex flex-col gap-3">
    @csrf
    <input
        name="email"
        class="w-full border-1 rounded-md border-gray-200 p-2"
        type="email"
        placeholder="E-mail"
    />
    <input
        name="password"
        class="w-full border-1 rounded-md border-gray-200 p-2"
        type="password"
        placeholder="password"
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
@endsection

@vite(['resources/js/submit_login.js'])
