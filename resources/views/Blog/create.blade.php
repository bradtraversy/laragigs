<x-guest-layout class="bg-gray-600">
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center text-black">
      <h2 class="text-2xl font-bold uppercase mb-1 ">Post an Article</h2>
      <p class="mb-4 font-semibold">Post a gig</p>
    </header>

    <form method="POST" action="/admin/blogs" enctype="multipart/form-data">
      @csrf
      <div class="mb-6 text-black font-semibold">
        <label for="title" class="inline-block text-lg mb-2">Blog Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          value="{{old('title')}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6 text-black font-semibold">
        <label for="category" class="inline-block text-lg mb-2">Blog Category</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="category"
          value="{{old('category')}}" />

        @error('category')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6 text-black font-semibold">
        <label for="email" class="inline-block text-lg mb-2">
         Authors Email
        </label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>


      <div class="mb-6 text-black font-semibold">
        <label for="tags" class="inline-block text-lg mb-2">
          Keywords (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>


      <div class="mb-6 text-black font-semibold">
        <label for="image" class="inline-block text-lg mb-2">
          Logo
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6 text-black font-semibold">
        <label for="description" class="inline-block text-lg mb-2">
          Blog Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6 text-black font-semibold">
        <button class="bg-laravel rounded py-2 px-4 hover:bg-black">
          Create Blog
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-guest-layout>
