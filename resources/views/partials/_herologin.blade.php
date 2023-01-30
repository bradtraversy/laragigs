<section class="relative flex flex-col justify-center mb-4 space-y-4 text-center h-72 bg-laravel align-center">
    <div class="absolute top-0 left-0 w-full h-full bg-center bg-no-repeat opacity-10"
        style="background-image: url('images/laravel-logo.png')"></div>

    <div class="z-10">
        <h1
            class="font-extrabold text-transparent text-white uppercase text-8xl bg-clip-text bg-gradient-to-r from-pink-400 to-red-600">
            Jobs<span class="text-gray-200 ">Gigs</span>
        </h1>
        <p class="my-4 text-2xl font-bold text-gray-200">
            Find or post a jobs & projects
        </p>
        <div>
            <h1 class="text-white">
                <span class="p-3 text-2xl font-extrabold text-sky-400">1500+</span>
                Jobs posted last week
            </h1>
            @auth
            @else
                <a href="/register"
                    class="inline-block px-4 py-2 mt-2 text-white uppercase border-2 border-white rounded-xl hover:border-blue-800 hover:text-yellow-600 hover:bg-gray-900">Sign
                    Up to List a Gig/jOB</a>
            @endauth
        </div>
    </div>
</section>
