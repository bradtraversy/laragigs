@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);

// Remove whitespaces from the beginning and end of each element
$tags = array_map('trim', $tags);

@endphp

<ul class="flex">
  @foreach($tags as $tag)
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>
