<x-layout>
    <x-card class="max-w-full p-10 mx-auto mt-24 text-white mg">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">Create a Gig</h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="gap-4 mx-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0">
                <div class="mb-6">
                    <label for="company" class="inline-block mb-2 text-lg">Company Name</label>
                    <input type="text" class="w-full p-2 text-black border border-gray-200 rounded" name="company"
                        value="{{ old('company') }}" />

                    @error('company')
                        <p class="mt-1 text-xs text-red-500 ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block mb-2 text-lg">Job Title</label>
                    <input type="text" class="w-full p-2 text-black border border-gray-200 rounded" name="title"
                        placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />

                    @error('title')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="gap-4 mx-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0">
                <div class="mb-6">
                    <label for="location" class="inline-block mb-2 text-lg">Job Location</label>
                    <input type="text" class="w-full p-2 text-black border border-gray-200 rounded" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />

                    @error('location')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block mb-2 text-lg">
                        Contact Email
                    </label>
                    <input type="text" class="w-full p-2 text-black border border-gray-200 rounded" name="email"
                        value="{{ old('email') }}" />

                    @error('email')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="gap-4 mx-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0">
                <div class="mb-6">
                    <label for="website" class="inline-block mb-2 text-lg">
                        Website/Application URL
                    </label>
                    <input type="text" class="w-full p-2 text-black border border-gray-200 rounded" name="website"
                        value="{{ old('website') }}" />

                    @error('website')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block mb-2 text-lg">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="w-full p-2 text-black border border-gray-200 rounded" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />

                    @error('tags')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="logo" class="inline-block mb-2 text-lg">
                    Company Logo
                </label>
                <input type="file" class="w-full p-2 text-black border border-gray-200 rounded" name="logo" />

                @error('logo')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block mb-2 text-lg">
                    Job Description
                </label>
                <textarea class="w-full p-2 text-black border border-gray-200 rounded" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>

                @error('description')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                <button class="px-4 py-2 text-white rounded bg-laravel hover:bg-black">
                    Create Gig
                </button>

                <a href="/" class="ml-4 text-black"> Back </a>
            </div> --}}
            <div
                class="items-center justify-center pt-10 mx-auto space-y-3 sm:space-x-6 sm:space-y-0 sm:flex lg:justify-start">
                <button type="submit"
                    class="block w-full py-3 text-center text-gray-800 bg-white rounded-md shadow-md hover:underline px-7 sm:w-auto hover:bg-black hover:text-gray-50">
                    Create Gig
                </button>
                <a href="{{ url('home') }}"
                    class="block w-full py-3 text-center text-gray-200 bg-gray-700 rounded-md px-7 sm:w-auto hover:underline hover:bg-blue-600">
                    Back
                </a>
            </div>
        </form>
    </x-card>
</x-layout>
