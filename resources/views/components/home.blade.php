<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="" />
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/learning.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('package/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome6/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    {{-- <script type="text/javascript" language="javascript" src="{{ asset('2.js') }}"></script> --}}

    <script type="text/javascript" language="javascript" src="{{ asset('fontawesome6/js/all.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('package/swiper.min.js') }}"></script>
    <title>Sharnoor Travel Agency | Find Jobs & Projects</title>

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
      @livewireStyles
</head>

<body id="body" wire:poll>
    <nav class="2xl:container d-xl-flex fixed-top">
        {{-- <a href="/"><img class="w-14" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a> --}}

        <div class="welcome mr-3">
            <ul class="text-lg collapse-bar flex-row">
                <div class="navbar-brand">
                    <div class="shrink-0 flex gap-2 items-center">
                        <a href="{{ route('dashboard') }}">
                            {{--   <x-application-mark class="block h-9 w-auto" />  --}}
                            <a href="/"> Sharnoor Travel Agency </a>
                        </a>
                    </div>

                </div>

            </ul>
        </div>

        <div class="nav">
            <span>
                <li class="nav-item"> <a  href="/" class="nav-link"><i
                            class="fa fa-home-alt mx-2 fs-4"></i> <br />
                        <span>Home</span></a></li>
            </span>
            <span>
                <li class="nav-item"><a href="/jobs" class="nav-link"><i
                            class="fa fa-person-digging mx-2 fs-4"></i>
                        <br />
                        <span>Jobs</span> </a></li>
            </span>

            <span>
                <li class="nav-item"><a href="/main" class="nav-link"><i
                            class="fa fa-blog px-2 fs-4 py-0"></i><br />
                        <span>Blog</span></a></li>
            </span>

            <span>
                <li class="nav-item"><a href="/about" class="nav-link"><i
                            class="fa fa-info mx-3 fs-4"></i><br />
                        <span>About</span></a></li>
            </span>

        </div>



        <div class="p-4 text-white-50 flex flex-row mr-2 max-w-lg">
            @auth

                @livewire('navigation-menu', ['lazy' => true])

                {{-- <li>
                    <span class="font-bold Uppercase text-lg">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>

                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed text-decoration-none"></i> Logout
                        </button>
                    </form>
                </li> --}}
            @else
                <div class="d-flex">
                    <li>
                        <a wire:navigate href="/register"
                            class="hover:text-laravel flex gap-2 text-2xl text-white px-3 no-underline"><i
                                class="fa-solid fa-user-plus"></i>
                            Register</a>
                    </li>
                    <li>
                        <a wire:navigate href="/login"
                            class="hover:text-laravel flex justify-between gap-2 text-2xl text-white px-2 no-underline"><i
                                class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                    </li>
                </div>
            @endauth
        </div>
    </nav>
    <div>
        <main>

        </main>
    </div>

    <div class="share left-0 fixed-bottom p-4 text-white">
        <a href="#" class="fab fa-facebook-f text-2xl" id="share"></a>
        <a href="#" class="fab fa-tiktok text-2xl" id="share"></a>
        <a href="#" class="fab fa-instagram text-2xl" id="share"></a>

        </div>
    <footer
        class="fixed bottom-0 left-0 w-full flex justify-start font-bold bg-laravel gap-2 text-white h-20 mt-24 opacity-90 md:justify-evenly">

        <p class="ml-2 justify-center">Copyright &copy; 2023 | Dante M.</p>

    </footer>

    <x-flash-message />
    @livewireScripts
</body>

</html>
