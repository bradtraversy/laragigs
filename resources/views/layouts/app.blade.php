<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        {{-- <script type="text/javascript" language="javascript"
    src="{{ asset('fontawesome6/js/all.min.js') }}"></script>
    <script type="text/javascript" language="javascript"
    src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
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
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        @livewire('user-nav')

        <div class="min-h-screen bg-gray-100">
            
            {{-- @livewire('navigation-menu') --}}
        
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
