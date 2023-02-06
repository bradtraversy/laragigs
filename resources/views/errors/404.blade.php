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
                        <span class="text-red-500">Oops!</span> Page not found
                    </p>
                    <p class="mb-8 text-center text-gray-500 md:text-lg">
                        The page you’re looking for doesn’t exist.
                    </p>
                    <a href="{{ route('home') }}" class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100">Go
                        home</a>
                </div>
                <div class="mt-4">
                    <img src="https://cdn.pixabay.com/photo/2016/11/22/23/13/black-dog-1851106__340.jpg" alt="img"
                        class="object-cover w-full h-full" />
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
