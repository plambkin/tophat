<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans text-gray-900">
<header class="flex items-center justify-between text-sm text-gray-400 px-8 py-4">

    <a href="#"> Logo Here
    </a>

    <div>

        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="flex">
        <a href="#">
            <img src="https://s.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?s=80
" alt="Avatar" class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>
<div class="flex items-center px-10">
    <div class="px-5">
        <button class="border-b-4">Countdown</button>
    </div>
    <div>
        <button class="border-b-4">No Activity</button>
    </div>
</div>
<div class="flex items-center justify-between px-5 py-10">
    <textarea name="Text1" cols="100" rows="15">
        This is a textbox
    </textarea>
</div>
<div class="flex items-center px-10">
    <div class="px-5 text-gray-400 font-semibold">
        <button>Start again</button>
    </div>
    <div>
        <button>Submit</button>
    </div>
</div>


</body>
</html>
