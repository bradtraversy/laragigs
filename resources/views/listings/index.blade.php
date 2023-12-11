<x-layout>
  @if (!Auth::check())
  @endif
  @include('partials._carousel')





  @include('partials._search')

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($listings) == 0)

    @foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
    @endforeach

    @else
    <p>No listings found</p>
    @endunless

  </div>

  {{-- <div class="mt-6 p-4">
    {{$listings->links()}}
  </div> --}}
{{--
  <x-blog-card :blog="$blog" /> --}}
{{-- <x-slot>
  <div class="blog_section">
    <div class="tag_section tag_center">
        <h6 class="text-lg-center p-5">Popular Blogs</h6>
        <div class="tag_indicator">
            <div class="line"></div>
            <div class="circle"></div>

        </div>
    </div>

    <div class="blog_section_box">
        @unless (count($blogs) == 0)

            @foreach ($blogs as $blog)
                <x-blog-card :blog="$blog" />
            @endforeach
        @else
            <p class="text-white">No blogs found</p>
        @endunless

    </div>
</div>
</x-slot> --}}
    </div>
    @include('partials.footer')
</x-layout>
