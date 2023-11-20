<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="" />
  <link rel="sylesheet" href="{{ asset('css/tailwind.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sharnoor.css') }}"/>
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
</head>

<body class="mb-48" id="body">
    <div>
  <nav class="2xl:container d-xl-flex fixed-top">
     {{-- <a href="/"><img class="w-14" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a> --}}

<div class="welcome flex mr-1">
    <ul class="text-lg collapse-bar flex">
        <div class="navbar-brand">
        <a href="/"> Sharnoor Travel Agency </a>
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
       <li class="nav-item"><a href="/learn" class="nav-link"><i class="fa fa-book-reader px-0 mx-3 fs-4"></i><br/><span>
       E-portal</span></a></li></span>
        <span>
       <li class="nav-item"><a href="/main" class="nav-link"><i class="fa fa-blog px-2 fs-4 py-0"></i><br/>
        <span>Blog</span></a></li></span>
        <span>
        <li class="nav-item"><a href="gallery.html" class="nav-link"><i class="fa fa-photo-video px-2 fs-4"></i><br/>
            <span>Gallery</span></a></li></span>
            <span>
       <li class="nav-item"><a href="sharbout.html" class="nav-link"><i class="fa fa-info mx-3 fs-4"></i><br/>
       <span>About</span></a></li></span>

</div>

</nav>

  <div class="text-white-50 h-6 w-1/4 bg-white">
    @auth
    <li>
      <span class="font-bold uppercase text-black">
        Welcome {{auth()->user()->name}}
      </span>
    </li>
    {{-- <li>
      <a href="/listings/manage" class="hover:text-laravel no-underline"><i class="fa-solid fa-gear"></i> Manage Listings</a>
    </li> --}}
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

    @include('partials._chat')
   {{ $slot }}

  </main>
  </div>

  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">

    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    {{-- <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a> --}}
  </footer>

  <x-flash-message />
</body>

</html>
