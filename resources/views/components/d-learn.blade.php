@props(['learning'])

<section class="carousel-wrapper courses" id="courses">
    <h1 class="heading">Our<span>{{$learn->course}}</span></h1>
    <div class="swiper course-slider">
        <div class="swiper-wrapper">


            <div class="swiper-slide slide">
            <img src="./images/2.jpg" alt="">
            <h3>{{$learn->mode}}</h3>
            <p>{{$learn->units}} </p>
            </div>
    
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
    </section>