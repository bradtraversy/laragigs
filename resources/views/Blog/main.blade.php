@extends('components.dashboard')

@include('partials._search')
<section id="subscribe">

    <h2>Subscribe to Our Newsletter</h2>
    <form action="/" method="POST">
        <x-input type="email" name="email" placeholder="Enter your email" class="input-sub input-lg" required/>
        <x-button type="submit">Subscribe</x-button>
    </form>
</section>


<div class="tarvel_categories_section">
    <div class="tag_section tag_center">
        <h6>Our Blog Categories</h6>
        <div class="tag_indicator">
            <div class="line"></div>
            <div class="circle"></div>

        </div>
    </div>
    <h6 class="desc">Dive into our engaging content categories.</h6>
    <div class="category_box_section">

        @unless (count($blogs) == 0)

            @foreach ($blogs as $blog)
                <div class="category_box">
                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('/images') }}"
                        alt="Want-Jobs-Abroad?" class="cat-img">

                    <div class="cat-title">{{ $blog->category }}</div>
                </div>
            @endforeach
        @else
            <p class="text-white">No blogs found</p>
        @endunless
    </div>

</div>


<div class="popular_destination">
    <div class="tag_section tag_center">
        <h6>Popular Destinations</h6>
        <div class="tag_indicator">
            <div class="line"></div>
            <div class="circle"></div>

        </div>
    </div>
    <h6 class="desc">Places where people went for work abroad.</h6>
    <div class="destination_section">

        @foreach ($blogs as $blog)
            <div class="destination_box">
                <div class="destination_img_box">
                    <img src="./images/a12.jpg" alt="Destinations" class="destination_img">
                    <div class="destination_category">{{ $blog->category }}</div>
                    <div class="destination_detail">
                        <h6 class="destination_duration">12 days | 11 June 2024</h6>
                        <h6 class="destination_title">{{ $blog->title }}</h6>
                        <div class="destination_popular_places">
                            <x-blog-tags :tagsCsv="$blog->tags" />

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>


{{-- blog read --}}
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
<!-- join community -->
<div class="join_section">
    <h6 class="join_title text-3xl">
        Join Our Travel Community <br> to Explore with us.
    </h6>
    <x-button type="submit">Join</x-button>
</div>


