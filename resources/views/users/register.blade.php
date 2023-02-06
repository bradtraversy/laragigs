<x-layout>
    <x-card class="max-w-lg p-10 mx-auto mt-24">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">Register</h2>
            <p class="mb-4">Create an account to post gigs</p>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block mb-2 text-lg"> Name </label>
                <input type="text" class="w-full p-2 border border-gray-200 rounded" name="name"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block mb-2 text-lg">Email</label>
                <input type="email" class="w-full p-2 border border-gray-200 rounded" name="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block mb-2 text-lg">
                    Password
                </label>
                <input type="password" class="w-full p-2 border border-gray-200 rounded" name="password"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block mb-2 text-lg">
                    Confirm Password
                </label>
                <input type="password" class="w-full p-2 border border-gray-200 rounded" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" />

                @error('password_confirmation')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="px-4 py-2 text-white rounded bg-laravel hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
