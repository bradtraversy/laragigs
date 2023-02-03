{{-- <div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div> --}}



<form action="{{ url('/blog') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="gap-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0 form-group">
        <div class="mb-6 form-group">
            <label for="company" class="inline-block mb-2 text-lg">Company Name</label>
            <input type="text"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="company" value="{{ old('company') }}" />

            @error('company')
                <p class="mt-1 text-xs text-red-500 ">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block mb-2 text-lg">Job Title</label>
            <input type="text"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="title" placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />

            @error('title')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="gap-4 space-y-4 form-group lg:grid lg:grid-cols-2 md:space-y-0">
        <div class="mb-6">
            <label for="location" class="inline-block mb-2 text-lg">Job Location</label>
            <input type="text"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="location" placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />

            @error('location')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block mb-2 text-lg">
                Contact Email
            </label>
            <input type="text"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="email" value="{{ old('email') }}" />

            @error('email')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="gap-4 space-y-4 form-group lg:grid lg:grid-cols-2 md:space-y-0">
        <div class="mb-6">
            <label for="website" class="inline-block mb-2 text-lg">
                Website/Application URL
            </label>
            <input type="text"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="website" value="{{ old('website') }}" />

            @error('website')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 ">
            <label for="tags" class="inline-block mb-2 text-lg">
                Tags (Comma Separated)
            </label>
            <input type="text"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />

            @error('tags')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex form-group">
        <div class="w-full mb-6">
            <label for="logo" class="inline-block mb-2 text-lg">
                Company Logo
            </label>
            <input type="file"
                class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="logo" accept="image/*" onchange="loadFile(event)" />

            @error('logo')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>
        {{-- <input class="border rounded-lg " type="file" accept="image/*" onchange="loadFile(event)" name="image"> --}}
        <img id="output" class="self-center hidden mx-auto w-36 h-36 " />
    </div>

    {{-- <div class="mb-6">
        <label for="description" class="inline-block mb-2 text-lg">
            Job Description
        </label>
        <textarea
            class="w-full p-2 px-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>

        @error('description')
            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
    </div> --}}




    {{-- <div class="mb-6 "> --}}
    {{-- <label class="block mx-4 mb-2 text-lg font-medium text-gray-900 dark:text-gray-300" for="default_size">
            Thumbnail <span class="mx-1 text-2xl text-red-700 ">✺</span></label>
        <input class="border rounded-lg " type="file" accept="image/*" onchange="loadFile(event)" name="image">
    </div>
    <img id="output" class="self-center hidden mx-auto w-36 h-36" /> --}}

    {{-- <div class="mb-6 ">
        <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-gray-300" for="title">Title Of your Blog
            <span class="mx-1 text-2xl text-red-700 ">✺</span>
        </label>
        <input type="text" id="title" name="title"
            class=" px-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-6">
    </div> --}}

    <div class="form-group">
        {{-- <label class="block mt-2 mb-1 text-sm font-medium text-gray-900 dark:text-gray-300" for="default_size">
            Blog In
            Details<span class="mx-1 text-2xl text-red-700 ">✺</span>
        </label> --}}
        <label for="description" class="inline-block mb-2 text-lg">
            Job Description
        </label>
        <textarea id="myeditorinstance" class="block w-full py-5 text-xl bg-transparent border-b-2 outline-none h-60"
            name="description">
    <h2 style="text-align: center;">👽<br />Include tasks, requirements, salary, etc</h2>
   </textarea>

        @error('description')
            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
        {{-- <textarea id="description" placeholder="Description..." name="description"
                        class="block w-full py-5 text-xl bg-transparent border-b-2 outline-none h-60"></textarea> --}}
    </div>
    <div class="flex">
        <div class="items-center p-5 bg-gray-lighter">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-yellow-600 dark:hover:text-white dark:hover:bg-blue-700">Submit
                <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </button>
        </div>

        <div class="items-center p-5 bg-gray-lighter">
            <a
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-300 dark:text-gray-900 dark:border-yellow-600 dark:hover:text-white dark:hover:bg-blue-700">Back
                <svg class="w-3 h-3 ml-2 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</form>
<script type="application/javascript">
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                },
                output.classList.remove("hidden");
            };
            $("#output").change(function() {
                imagePreview(this);
                $(".hidden").remove();
            });
</script>
