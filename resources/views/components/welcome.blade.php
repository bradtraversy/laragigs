<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    {{-- <x-application-logo class="block h-12 w-auto" /> --}}

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to Sharnoor Travel Agency!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Sharnoor is a Travel Agency that is focuused on working with the community to connect the youth to opportunities
        abroad. Similarly, we pride ourselves to be a major talent promoter in our commmunity.

        We provide an intuitive platform aimed at encouraging bloggers to reach a large community and provide a platformm for learners to acquire skills they would require to start businesses and/or get employment.

        Enjoy your Exploration
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Here you can create, edit, delete and manage Gigs
            </p>
        </div>


        <x-button type="submit" class="mt-5 mx-8"><a href="/admin/listings/create" class="no-underline text-xl">Post Job</a></x-button>
        <x-button type="submit" class="mt-3 mx-8"><a href="/admin/listings/manage" class="no-underline text-xl">Manage Jobs</a></x-button>
    </div>

    <div>
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">

            </h2>
            <p class="mt-4 text-gray-500 text-md leading-relaxed">
               You can create blogs while
                separating keywords with commas to enhace accessility of content by users.
            </p>
        </div>


        <x-button type="submit" class="mt-5 mx-6"><a href="/admin/Blog/create" class="no-underline text-xl">Create Blog</a></x-button>
        <x-button type="submit" class="mt-5 mx-8"><a href="/admin/Blog/manage" class="no-underline text-xl">Manage Blogs</a></x-button>
    </div>


    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                Authentication
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started with what matters most: building your application.
        </p>
    </div>
</div>
