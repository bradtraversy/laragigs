@props(['listing'])
{{-- @extends('listing-card')

@section('content') --}}
<x-card>
  <div class="flex text-white">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="company logo" />
    <div class="text-white text-center">
      <h3 class="text-2xl">
        <a href="/listings/{{$listing->id}}" class="no-underline text-white-50">{{$listing->title}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
      </div>
    </div>
  </div>

</x-card>
