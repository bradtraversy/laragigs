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
                <div class="blog_desc">{{$blog->description}}</div>
                <button class="read-btn">
                    Read More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

