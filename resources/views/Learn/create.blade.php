<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24 text-white-50">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>
      <p class="mb-4">Post a Gig</p>
    </header>

    <form method="POST" action="/learns" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="School" class="inline-block text-lg mb-2">School Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="School"
          value="{{old('School')}}" />

        @error('School')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="Course" class="inline-block text-lg mb-2">Course</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="Course"
          placeholder="Example: Senior Laravel Developer" value="{{old('Course')}}" />

        @error('Course')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
        Units
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="7"
          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Mode of Study</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
          placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />
        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="fees" class="inline-block text-lg mb-2">
        School Fees
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="fees" rows="5"
          placeholder="Include tasks, requirements, salary, etc">{{old('fees')}}</textarea>

        @error('fees')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          Contact Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="number" class="inline-block text-lg mb-2">
          Contact
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="number"
          value="{{old('number')}}" />

        @error('number')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

    

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Create
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
