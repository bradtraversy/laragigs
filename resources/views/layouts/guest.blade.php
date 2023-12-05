<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sharnoor') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        <link rel="stylesheet" type="text/css"  href="{{ asset('bootstrap5/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome6/css/all.min.css') }}"/>
        <script type="text/javascript" language="javascript"
    src="{{ asset('fontawesome6/js/all.min.js') }}"></script>
    <script type="text/javascript" language="javascript"
    src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
    <link rel="sylesheet" href="{{ asset('css/tailwind.css') }}" />
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script>
            tailwind.config = {
                theme: {
                  extend: {
                    colors: {
                      laravel: '#111',
                    },
                  },
                },
              }
          </script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
