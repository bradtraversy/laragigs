<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center text-white">
        <img class="w-48 mr-6 mb-6"
          src="{{$blog->image ? asset('storage/' . $blog->image) : asset('/images/no-image.png')}}" alt="" />

        <h3 class="text-2xl mb-2">
          {{$blog->title}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$blog->category}}</div>

        {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}

        <div class="text-lg my-4">
          <i class="fa-solid fa-location-dot"></i> {{$blog->location}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-3xl font-bold mb-4">Description</h3>
          <div class="text-lg space-y-10">
            {{$blog->description}}


          </div>
        </div>
      </div>
    </x-card>

    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/listings/{{$blog->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/listings/{{$blog->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card>
  </div>
</x-layout>
