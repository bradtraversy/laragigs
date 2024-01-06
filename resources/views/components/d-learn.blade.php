@props(['learn'])


<section class="carousel-wrapper courses" id="courses">
    <h1 class="heading">Our<span>{{$learn->course}}</span></h1>
    <div class="swiper course-slider">
        <div class="swiper-wrapper">


            <div class="swiper-slide slide">
                <img class="hidden w-48 mr-6 md:block"
                src="{{$learn->image ? asset('storage/' . $learn->image) : asset('/images/no-image.png')}}" alt="company logo" />
            <h3>{{$learn->mode}}</h3>
            <p>{{$learn->units}} </p>
            </div>

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
    </section>
