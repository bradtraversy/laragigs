@props(['blog'])
 <!-- latest blog section -->
        <div class="blog_box">
         
            {{-- <h6 class="desc block" id="category">{{$blog->category}}</h6> --}}
            <img src="{{$blog->image ? asset('storage/' . $blog->image) : asset('/images/no-image.png')}}" alt="Blog Image" class="blog_img">
            <div class="blog_data">
                <p class="date">
                    <i class="fa-solid fa-calendar-days"></i> 2/23/2024
                </p>
                <h6 class="blog_title">{{$blog->title}}</h6>
                <div class="blog_desc text-xl text-white-50">{{$blog->description}}</div>

                <x-button class="read-btn"><a href="/blogs/{{$blog->id}}" class="no-underline text-white-50">Read More</a>
                     <i class="fa-solid fa-arrow-right"></i>
                </x-button>
            </div>
        </div>
