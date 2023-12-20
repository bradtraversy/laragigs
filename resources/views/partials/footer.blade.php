<section class="feedback">

    <div class="feedback-session justify-items-center">


        <div class="featured text-white-50 no-underline block" id="featured">
            <ol class="text-white-50 no-underline flex-row text-lg">
                <h1>Featured Jobs</h1>
                <i><a href="#">Jobs in Canada</a></i>
                <i><a href="#">Jobs in Phillipines</a></i>
                <i><a href="#">Jobs in Saudi Arabia</a></i>
                <i><a href="#">Jobs in Poland</a></i>
                <i><a href="#">Jobs in Sychelles</a></i>
                <i><a href="#">Jobs in UK</a></i>
            </ol>
        </div>


        <x-card class="p-10 max-w-lg mx-auto mt-24 outline-none border-none">
            <form action="/" method="POST" enctype="multipart/form-data" class="px-5">
                @csrf
                <h3 class="text-white font-semibold text-xl text-center p-3">Leave your Feedback</h3>
                <div class="mb-6 text-white">
                    <label for="name" class="inline-block text-lg mb-2">Your Names</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                        value="{{ old('name') }}" />

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-white">
                    <label for="description" class="inline-block text-lg mb-2">
                        Feedback
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="6"
                        placeholder="Leave our comments here">{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-white">
                    <x-button type="submit">SEND</x-button>
                </div>
            </form>
        </x-card>

        <div class="tred-jobs">
            <h2>Trending Jobs</h2>
            <div class="trending">
                <i><a href="#">Drivers jobs in Rome</a></i>
                <i><a href="#">Electricians jobs in Dubai</a></i>
                <i><a href="#">Mechanic jobs in UK</a></i>
                <i> <a href="#">Nurse jobs in Canada</a></i>
                <i><a href="#">Plumber jobs in Phillipines</a></i>
                <i><a href="#">Spa jobs in Qatar</a></i>
            </div>
        </div>

    </div>

</section>
