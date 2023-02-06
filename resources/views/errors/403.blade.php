<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                    },
                },
            },
        }
    </script>
    <title>JobsGigs | Find Jobs & Projects</title>
</head>

<body class="mb-4">
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="px-4 lg:py-12">
            <div class="lg:gap-4 lg:flex">
                <div class="flex flex-col items-center justify-center md:py-24 lg:py-32">
                    <h1 class="font-bold text-blue-600 text-9xl">404</h1>
                    <p class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
                        <span class="text-red-500">Oops!</span> Access Denied
                    </p>
                    <p class="mb-8 text-center text-gray-500 md:text-lg">
                        You are not allowed to access this page. If you think iuts an error kindly contact the system
                        administrator for help!
                    </p>
                    <a href="{{ route('home') }}" class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100">Go
                        home</a>
                </div>
                <div class="mt-4">
                    {{-- <img src="https://cdn.pixabay.com/photo/2016/11/22/23/13/black-dog-1851106__340.jpg" alt="img"
                        class="object-cover w-full h-full" /> --}}


                    <svg class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg" id="robot-error"
                        viewBox="0 0 260 118.9">
                        <defs>
                            <clipPath id="white-clip">
                                <circle id="white-eye" fill="#cacaca" cx="130" cy="65" r="20" />
                            </clipPath>
                            <text id="text-s" class="error-text" y="106"> 403 </text>
                        </defs>
                        <path class="alarm" fill="#e62326"
                            d="M120.9 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6" />
                        <use xlink:href="#text-s" x="-0.5px" y="-1px" fill="black"></use>
                        <use xlink:href="#text-s" fill="#2b2b2b"></use>
                        <g id="robot">
                            <g id="eye-wrap">
                                <use xlink:href="#white-eye"></use>
                                <circle id="eyef" class="eye" clip-path="url(#white-clip)" fill="#000"
                                    stroke="#2aa7cc" stroke-width="2" stroke-miterlimit="10" cx="130"
                                    cy="65" r="11" />
                                <ellipse id="white-eye" fill="#2b2b2b" cx="130" cy="40" rx="18"
                                    ry="12" />
                            </g>
                            <circle class="lightblue" cx="105" cy="32" r="2.5" id="tornillo" />
                            <use xlink:href="#tornillo" x="50"></use>
                            <use xlink:href="#tornillo" x="50" y="60"></use>
                            <use xlink:href="#tornillo" y="60"></use>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    @push('css')
        <style>
            @import url("https://fonts.googleapis.com/css?family=Bungee");

            body {
                background: #1b1b1b;
                color: white;
                font-family: "Bungee", cursive;
                margin-top: 50px;
                text-align: center;
            }

            a {
                color: #2aa7cc;
                text-decoration: none;
            }

            a:hover {
                color: white;
            }

            svg {
                width: 50vw;
            }

            .lightblue {
                fill: #444;
            }

            .eye {
                cx: calc(115px + 30px * var(--mouse-x));
                cy: calc(50px + 30px * var(--mouse-y));
            }

            #eye-wrap {
                overflow: hidden;
            }

            .error-text {
                font-size: 120px;
            }

            .alarm {
                animation: alarmOn 0.5s infinite;
            }

            @keyframes alarmOn {
                to {
                    fill: darkred;
                }
            }
        </style>
    @endpush

    @push('js')
        <script>
            var root = document.documentElement;
            var eyef = document.getElementById('eyef');
            var cx = document.getElementById("eyef").getAttribute("cx");
            var cy = document.getElementById("eyef").getAttribute("cy");

            document.addEventListener("mousemove", evt => {
                let x = evt.clientX / innerWidth;
                let y = evt.clientY / innerHeight;

                root.style.setProperty("--mouse-x", x);
                root.style.setProperty("--mouse-y", y);

                cx = 115 + 30 * x;
                cy = 50 + 30 * y;
                eyef.setAttribute("cx", cx);
                eyef.setAttribute("cy", cy);

            });

            document.addEventListener("touchmove", touchHandler => {
                let x = touchHandler.touches[0].clientX / innerWidth;
                let y = touchHandler.touches[0].clientY / innerHeight;

                root.style.setProperty("--mouse-x", x);
                root.style.setProperty("--mouse-y", y);
            });
        </script>
    @endpush
</body>

</html>



















{{-- 


@extends('layouts.app')
@section('layout-holder')
    <svg xmlns="http://www.w3.org/2000/svg" id="robot-error" viewBox="0 0 260 118.9">
        <defs>
            <clipPath id="white-clip">
                <circle id="white-eye" fill="#cacaca" cx="130" cy="65" r="20" />
            </clipPath>
            <text id="text-s" class="error-text" y="106"> 403 </text>
        </defs>
        <path class="alarm" fill="#e62326" d="M120.9 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6" />
        <use xlink:href="#text-s" x="-0.5px" y="-1px" fill="black"></use>
        <use xlink:href="#text-s" fill="#2b2b2b"></use>
        <g id="robot">
            <g id="eye-wrap">
                <use xlink:href="#white-eye"></use>
                <circle id="eyef" class="eye" clip-path="url(#white-clip)" fill="#000" stroke="#2aa7cc"
                    stroke-width="2" stroke-miterlimit="10" cx="130" cy="65" r="11" />
                <ellipse id="white-eye" fill="#2b2b2b" cx="130" cy="40" rx="18" ry="12" />
            </g>
            <circle class="lightblue" cx="105" cy="32" r="2.5" id="tornillo" />
            <use xlink:href="#tornillo" x="50"></use>
            <use xlink:href="#tornillo" x="50" y="60"></use>
            <use xlink:href="#tornillo" y="60"></use>
        </g>
    </svg>
    <h1>You are not allowed to enter here</h1>
    <h2>Go <a href="{{ route('home') }}">Home!</a></h2>
@endsection

@push('css')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Bungee");

        body {
            background: #1b1b1b;
            color: white;
            font-family: "Bungee", cursive;
            margin-top: 50px;
            text-align: center;
        }

        a {
            color: #2aa7cc;
            text-decoration: none;
        }

        a:hover {
            color: white;
        }

        svg {
            width: 50vw;
        }

        .lightblue {
            fill: #444;
        }

        .eye {
            cx: calc(115px + 30px * var(--mouse-x));
            cy: calc(50px + 30px * var(--mouse-y));
        }

        #eye-wrap {
            overflow: hidden;
        }

        .error-text {
            font-size: 120px;
        }

        .alarm {
            animation: alarmOn 0.5s infinite;
        }

        @keyframes alarmOn {
            to {
                fill: darkred;
            }
        }
    </style>
@endpush

@push('js')
    <script>
        var root = document.documentElement;
        var eyef = document.getElementById('eyef');
        var cx = document.getElementById("eyef").getAttribute("cx");
        var cy = document.getElementById("eyef").getAttribute("cy");

        document.addEventListener("mousemove", evt => {
            let x = evt.clientX / innerWidth;
            let y = evt.clientY / innerHeight;

            root.style.setProperty("--mouse-x", x);
            root.style.setProperty("--mouse-y", y);

            cx = 115 + 30 * x;
            cy = 50 + 30 * y;
            eyef.setAttribute("cx", cx);
            eyef.setAttribute("cy", cy);

        });

        document.addEventListener("touchmove", touchHandler => {
            let x = touchHandler.touches[0].clientX / innerWidth;
            let y = touchHandler.touches[0].clientY / innerHeight;

            root.style.setProperty("--mouse-x", x);
            root.style.setProperty("--mouse-y", y);
        });
    </script>
@endpush --}}
