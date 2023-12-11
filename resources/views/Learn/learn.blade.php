{{-- <x-dashboard> --}}
@extends('components.dashboard')




<section class="home" id="home">
    <div class="row">
        <div class="content">
            <h3>Online <span> Education</span></h3>
            {{-- <a href="#contact" class="btn" id="btn">{{$learn->number}}</a> --}}
        </div>

        <div class="image">
            <img src="{{ asset('images/6.jpg') }}" alt="Learn online with online tools.">
        </div>
    </div>
</section>

<section class="count">
    <div class="box-container">
        <div class="box">
          <i class="fa fa-graduation-cap" id="ions" aria-hidden="true"></i>
          <div class="content">
            <h3>150+</h3>
            {{-- <p>{{$learn->course}}</p> --}}
          </div>
        </div>

        <div class="box">
            <i class="fa fa-user-graduate" id="ions" aria-hidden="true"></i>
            <div class="content">
              <h3>1300+</h3>
              <p>students</p>
            </div>
          </div>

          <div class="box">
            <i class="fa fa-chalkboard-user" id="ions" aria-hidden="true"></i>
            <div class="content">
              <h3>50+</h3>
              <p>teachers</p>
            </div>
          </div>

          <div class="box">
            <i class="fa fa-face-smile" id="ions" aria-hidden="true"></i>
            <div class="content">
              <h3>100%</h3>
              <p>satisfaction</p>
            </div>
          </div>
    </div>
</section>

<!--about section start-->
<section class="about" id="about">
    <div class="row">
        <div class="photo">
            <img src="{{ asset('images/2.jpg') }}" alt="A person studying">
        </div>

        <div class="content">
            <h3>Why Choose us?</h3>
            <p>We are a diverse company aimed at connecting potential employers with job seekers. as a result,
                our main priority is the people, their needs, the laws of the land and sea.

                We mainly focus on Gulf countries with an inclusion to Asia and UK.
            </p>
                <a href="#contact" class="btn" id="btn">contact us</a>
        </div>
    </div>
</section>
<!--about section end-->



<!--courses start-->
<section class="carousel-wrapper courses" id="courses">
{{-- <h1 class="heading">Our<span>{{$learn->course}}</span></h1> --}}
<div class="swiper course-slider">
    <div class="swiper-wrapper">
     @unless(count($learns) == 0)

    @foreach($learns as $learn)
    <x-d-learn :learn="$learn" />
    @endforeach

    @else
    <p>No courses found</p>
    @endunless


    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>
</section>
<!--courses end-->

<!--Teachers-->
<section class="carousel-wrapper teacher" id="teacher">
<h1 class="heading">expert<span> tutors</span></h1>
<div class="swiper teachers-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <img src="./images/3.jpg" alt="">
            <div class="share" id="share">
                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i></a>
               <a href="#"> <i class="fab fa-instagram"></i></a>
               <a href="#"> <i class="fab fa-linkedin"></i></a>
             <a href="#"> <i class="fab fa-tiktok"></i></a>
            </div>
            <h3>Damon Mart</h3>
            <p>Mathematician</p>
        </div>

        <div class="swiper-slide slide">
            <img src="./images/3.jpg" alt="">
            <div class="share">
                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i></a>
               <a href="#"> <i class="fab fa-instagram"></i></a>
               <a href="#"> <i class="fab fa-linkedin"></i></a>
             <a href="#"> <i class="fab fa-tiktok"></i></a>
            </div>
            <h3>John Doe</h3>
            <p>Doctor</p>
        </div>

        <div class="swiper-slide slide">
            <img src="./images/3.jpg" alt="">
            <div class="share">
                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i></a>
               <a href="#"> <i class="fab fa-instagram"></i></a>
               <a href="#"> <i class="fab fa-linkedin"></i></a>
             <a href="#"> <i class="fab fa-tiktok"></i></a>
            </div>
            <h3>Marcus Phillip</h3>
            <p>Web Designer</p>
        </div>

        <div class="swiper-slide slide">
            <img src="./images/3.jpg" alt="">
            <div class="share">
                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i></a>
               <a href="#"> <i class="fab fa-instagram"></i></a>
               <a href="#"> <i class="fab fa-linkedin"></i></a>
             <a href="#"> <i class="fab fa-tiktok"></i></a>
            </div>
            <h3>John Doe</h3>
            <p>Graphic Designer</p>
        </div>

        <div class="swiper-slide slide">
            <img src="./images/3.jpg" alt="">
            <div class="share">
                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i></a>
               <a href="#"> <i class="fab fa-instagram"></i></a>
               <a href="#"> <i class="fab fa-linkedin"></i></a>
             <a href="#"> <i class="fab fa-tiktok"></i></a>
            </div>
            <h3>John Doe</h3>
            <p>Graphic Designer</p>
        </div>

        <div class="swiper-slide slide">
            <img src="./images/3.jpg" alt="">
            <div class="share">
                <a href="#"> <i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i></a>
               <a href="#"> <i class="fab fa-instagram"></i></a>
               <a href="#"> <i class="fab fa-linkedin"></i></a>
             <a href="#"> <i class="fab fa-tiktok"></i></a>
            </div>
            <h3>Kimm Wanger</h3>
            <p>Graphic Designer</p>
        </div>

    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>
</section>


<!--reviews start-->
<section class="reviews" id="reviews">
<h1 class="heading">Student's <span>Reviews</span></h1>

<div class="swiper reviews-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod natus consequatur commodi veniam deleniti provident hic voluptatem eum laborum necessitatibus, pariatur, rem ipsum unde esse quos tempore ex. Cupiditate.</p>
            <div class="user">
                <img src="./images/a10.jpg" alt="reviews">
                <div class="user-info">
                    <h3>John Doe</h3>
                    <div class="stars">
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star-half-stroke"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod natus consequatur commodi veniam deleniti provident hic voluptatem eum laborum necessitatibus, pariatur, rem ipsum unde esse quos tempore ex. Cupiditate.</p>
            <div class="user">
                <img src="./images/a11.jpg" alt="reviews">
                <div class="user-info">
                    <h3>John Doe</h3>
                    <div class="stars" id="stars">
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star-half-stroke"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod natus consequatur commodi veniam deleniti provident hic voluptatem eum laborum necessitatibus, pariatur, rem ipsum unde esse quos tempore ex. Cupiditate.</p>
            <div class="user">
                <img src="./images/a12.jpg" alt="reviews">
                <div class="user-info">
                    <h3>John Doe</h3>
                    <div class="stars">
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star-half-stroke"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod natus consequatur commodi veniam deleniti provident hic voluptatem eum laborum necessitatibus, pariatur, rem ipsum unde esse quos tempore ex. Cupiditate.</p>
            <div class="user">
                <img src="./images/a13.jpg" alt="reviews">
                <div class="user-info">
                    <h3>John Doe</h3>
                    <div class="stars">
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star-half-stroke"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod natus consequatur commodi veniam deleniti provident hic voluptatem eum laborum necessitatibus, pariatur, rem ipsum unde esse quos tempore ex. Cupiditate.</p>
            <div class="user">
                <img src="./images/a9.jpg" alt="reviews">
                <div class="user-info">
                    <h3>John Doe</h3>
                    <div class="stars">
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star-half-stroke"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod natus consequatur commodi veniam deleniti provident hic voluptatem eum laborum necessitatibus, pariatur, rem ipsum unde esse quos tempore ex. Cupiditate.</p>
            <div class="user">
                <img src="./images/a15.jpg" alt="reviews">
                <div class="user-info">
                    <h3>John Doe</h3>
                    <div class="stars">
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star"></i></a>
                        <a href=""><i class="fa fa-star-half-stroke"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>
</section>

<!--contacts start-->

<section class="contact" id="contact">
<h1 class="heading"><span>contacts</span></h1>
<div class="row">
    <div class="image">
       <img src="./images/a7.jpg" alt="">
    </div>
    <form action="" method="post">
        <span>Your name</span>
        <input type="text" required placeholder="enter your full name"
        maxlength="50" name="name" class="box">
        <span>Your email</span>
        <input type="email" required placeholder="enter your valid email"
        maxlength="50" name="email" class="box">
        <span>Your number</span>
        <input type="number" required placeholder="enter your valid number"
        max="999999999" min="0" name="number" class="box"
        onkeypress="if(this.value.length == 10) return false">
        <span>Select Course</span>
        <select name="courses" class="box" id="box" required>
            <option value="" disabled selected>select the course --</option>
            {{-- <option value="web development">{{$learn->course}}</option> --}}
            <option value="Engineering">Engineering</option>
            <option value="Science and Biology">Science and Biology</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Social Studies">Social Studies</option>
            <option value="Data Analiysis">Data Analiysis</option>
            <option value="Cyber Security">Cyber Security</option>
        </select>
        <br>
        <span>select gender</span>
        <div class="radio">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">female</label>
        </div>
        <input type="submit" value="send message" class="btn" id="btn" name="send">
    </form>
</div>
</section>

<footer class="footer">
<section>
    <div class="share">
        <a href="#" class="fab fa-facebook-f" id="share"></a>
        <a href="#" class="fab fa-twitter" id="share"></a>
        <a href="#" class="fab fa-linkedin" id="share"></a>
        <a href="#" class="fab fa-instagram" id="share"></a>
        <a href="#" class="fab fa-youtube" id="share"></a>
    </div>
    {{-- <div class="credit">&copy; copyright @ 2023 by <span>Lide Solutions</span> | all rights reserved!
</div> --}}
</section>
</footer>


{{-- </x-dashboard> --}}
