@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex text-white max-w-full">
  @foreach($tags as $tag)
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2">
    <a href="/?tag={{$tag}}" class="text-white text-lg text-decoration-none">{{$tag}}</a>
  </li>
  @endforeach
</ul>
