<x-guest-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Gig</h2>
      <p class="mb-4">Edit: {{$blog->title}}</p>
    </header>

    <form method="POST" action="/blogs/{{$blog->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="category" class="inline-block text-lg mb-2">Blog Category</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="category"
          value="{{$blog->category}}" />

        @error('category')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Blog Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          placeholder="Example: Senior Laravel Developer" value="{{$blog->title}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>



      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          Author's Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$blog->email}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>


      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          Keywords (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$blog->tags}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

        <img class="w-48 mr-6 mb-6"
          src="{{$blog->logo ? asset('storage/' . $blog->logo) : asset('/images/no-image.png')}}" alt="" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
         Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{$blog->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Update Gig
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-guest-layout>
