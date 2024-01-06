<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="" />
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}"/> --}}
   <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jobs.css') }}"/>
  <link rel="stylesheet" type="text/css"  href="{{ asset('bootstrap5/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome6/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('package/swiper-bundle.min.css') }}"/>
    <script src="{{ asset('jquery-3.7.1.min.js') }}></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="{{ asset('js/app.js') }}"></script>

  <script type="text/javascript" language="javascript"
    src="{{ asset('2.js') }}"></script>

    <script type="text/javascript" language="javascript"
    src="{{ asset('fontawesome6/js/all.min.js') }}"></script>
    <script type="text/javascript" language="javascript"
    src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('package/swiper.min.js') }}"></script>

    @livewireStyles
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
  <title>Sharnoor Travel Agency | Find Jobs & Projects</title>

  @livewireStyles

</head>

<body class="mb-48" id="body" wire:poll>
    <div>
  <nav class="2xl:container d-xl-flex fixed-top">
     {{-- <a href="/"><img class="w-14" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a> --}}

<div class="welcome flex mr-1">
    <ul class="text-lg collapse-bar flex">
        <div class="navbar-brand">
            <div class="shrink-0 flex gap-2 items-center">
                    <a href="{{ route('dashboard') }}">
                      {{--   <x-application-mark class="block h-9 w-auto" />  --}}
                        <a href="/" class="text-3xl"> Sharnoor Travel Agency </a>
                    </a>
                </div>

    </div>


    </ul>
</div>

<div class="nav">
    <span>
    <li class="nav-item"> <a href="/"  class="nav-link"><i class="fa fa-home-alt mx-2 fs-4"></i> <br/>
        <span>Home</span></a></li></span>
       <span><li class="nav-item"><a href="/jobs" class="nav-link"><i class="fa fa-person-digging mx-2 fs-4"></i> <br/>
       <span>Jobs</span> </a></li></span>

        <span>
       <li class="nav-item"><a href="/main" class="nav-link"><i class="fa fa-blog px-2 fs-4 py-0"></i><br/>
        <span>Blog</span></a></li></span>

            <span>
       <li class="nav-item"><a href="/about" class="nav-link"><i class="fa fa-info mx-3 fs-4"></i><br/>
       <span>About</span></a></li></span>

</div>
<div class="p-4 text-white-50 flex flex-col mr-3 max-w-lg">
            @auth

            @livewire('navigation-menu', ['lazy' => true])

            @else
            <div class="d-flex">
                <li class="justify-between">
                    <a wire:navigate href="/register" class="hover:text-laravel gap-2 flex text-white px-3 no-underline text-2xl"><i class="fa-solid fa-user-plus"></i>
                        Register</a>
                </li>
                <li>
                    <a wire:navigate href="/login" class="hover:text-laravel gap-2 flex justify-between text-white text-2xl px-2 no-underline"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                </li>
            </div>

            @endauth
        </div>
</nav>



  <div class="text-white-50 h-6 w-1/4 bg-white">
    @auth
    <li>
      <span class="font-bold uppercase text-black">
        Welcome {{auth()->user()->name}}
      </span>
    </li>

    <li>
      <form class="inline" method="POST" action="/logout" >
        @csrf
        <button type="submit">
          <i class="fa-solid fa-door-closed text-decoration-none"></i> Logout
        </button>
      </form>
    </li>
    @else
    <li>
      <a href="/register" class="hover:text-laravel  text-white px-3"><i class="fa-solid fa-user-plus"></i> Register</a>
    </li>
    <li>
      <a href="/login" class="hover:text-laravel  text-white px-3"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    </li>
    @endauth
  </div>
</div>

<div class="pt-20">
  <main>
   {{ $slot }}

  </main>
  </div>

  <div class="share left-0 fixed-bottom p-4 text-white">
      <a href="#" class="fab fa-facebook-f text-2xl" id="share"></a>
      <a href="#" class="fab fa-tiktok text-2xl" id="share"></a>
      <a href="#" class="fab fa-instagram text-2xl" id="share"></a>

      </div>
  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-between font-bold bg-laravel text-white h-20 mt-20 opacity-90 md:justify-evenly">

        <p class="ml-2 mx-auto">Copyright &copy; 2023 | Dante M.</p>

  </footer>

  <x-flash-message />

  @livewireScripts
</body>

</html>
