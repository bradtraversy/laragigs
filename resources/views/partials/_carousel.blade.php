<section id="main-left">

           <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="container-fluid">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"   aria-label="slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"   aria-label="slide 3"></button>

            </div>

            <div  class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="{{ asset('images/images (2).jfif') }}" class="d-block w-100 img-fluid c-img" alt="slide 1">
                    <div class="carousel-caption bottom-1">
                        <p class="mt-2 fs-3 text-uppercase">Search Gigs</p>
                        <p class="display-5 fw-bolder text-capitalize">Find Work abroad</p>
                        <button class="btn btn-danger text-xl" id="popup2" onclick = "openForm()">Apply</button>
                    </div>
                </div>
                    <div class="carousel-item c-item">
                        <img src="{{ asset('images/travel abroad.jfif') }}" class="d-block w-100 img-fluid c-img" alt="slide 2">
                        <div class="carousel-caption bottom-1">
                            <p class="mt-5 fs-3 text-uppercase">Get Services</p>
                            <p class="display-5 fw-bolder text-capitalize">Consult on all matters Travelling</p>
                            <button class="btn btn-success text-xl" id="popup1" onclick = "goForm()">Book Now</button>
                        </div>
                    </div>

                    <div class="carousel-item c-item">
                        <img src="{{ asset('images/9.jpg') }}" class="d-block w-100 img-fluid c-img" alt="slide 3">
                        <div class="carousel-caption bottom-1">
                            <p class="mt-5 fs-4 text-uppercase">Study Abroad</p>
                            <p class="display-5 fw-bolder text-capitalize">Learn Quick Skills.</p>
                            <button class="btn btn-primary text-xl"
                            onclick = "runForm()">Start Now</button>
                            </div>
                        </div>
                    </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel"
            data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

           </div>
           </div>
           <section class="pop-up" id="pop-up">
            <x-button class="btn btn-danger btn-lg  px-3" id="exit" onclick="closeForm()"><i class="fa fa-x"></i></x-button>

            <form action="{{ route('emails.email-template.send') }}" method="post" class="book form-horizontal" id="book" name="applyForm">
                                    <h2>Apply Now</h2>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif
                                    <div class="form1">
                                        <label for="name">Names</label>
                                        <input type="text" name="name" placeholder="Full Names"
                                        class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">

                                        @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form1">
                                    <label for="email">Email</label>
                                    <input type="email" autocomplete="on" name="email" placeholder="name@example.com" class="px-2 py-2 shadow-xl
                                    rounded-xl placeholder-gry-80::placeholder" required>
                                    @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>


                                    <div class="form1">
                                    <label for="category">Job category</label>
                                    <input type="text" autocomplete="on" placeholder="Job Post" name="category" id="job" class="px-4 py-2 shadow-xl
                                    rounded-xl placeholder-gray-50::placeholder" required>
                                    @error('category')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                    <div class="form1">
                                    <label for="country">Select Country</label>
                                    <select name="country" id="category" class="cat justify-center">
                                        <option value="" disabled>Countries</option>
                                        <option value="">Canada</option>
                                        <option value="">UK</option>
                                        <option value="">Poland</option>
                                        <option value="">Sychelles</option>
                                        <option value="">Phillipines</option>
                                        <option value="">Autralia</option>
                                    </select>

                                    @error('country')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form1">
                                    <label for="content" >Subject</label>
                                    <textarea name="content" class="rounded-xl placeholder-gray-50::placeholder"
                    placeholder="How are you suitable for this role?" id="area" cols="30" rows="2"></textarea>
                                        </div>

                                 <x-button class="btn btn-success btn-lg px-3"
                                  type="submit" name="send" value="submit">Submit</x-button>

                                </form>



                        </section>
            <section class="pop-up go1" id="go1">
                <button class="btn btn-danger btn-lg  px-3" id="exit" onclick="exitForm()"><i class="fa fa-x"></i></button>

                <form action="emails.email-template.send" method="POST" class="form-horizontal" id="book" name="Form" role="form">
                    @csrf
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                    <h2>Book a Service</h2>
                    <div class="form1">
                        <label for="name">Names</label>
                        <input type="text" name="name"  placeholder="Full Names"
                        class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
                    </div>

                    <div class="form1">
                    <label for="email">Email</label>
                    <input type="email" autocomplete="on" placeholder="name@example.com" class="px-2 py-2 shadow-xl
                    rounded-xl placeholder-gry-80::placeholder" required>
                </div>

                    <div class="form1">
                    <label for="category">Select Service</label>
                    <select name="" id="category" class="justify-center">
                        <option value="">Passport</option>
                        <option value="">Visa</option>
                        <option value="">Exam Booking</option>
                        <option value="">Work Abroad</option>
                        <option value="">E-Learning</option>
                        <option value=""></option>
                        <option value="">Autralia</option>
                    </select>
                </div>

                <div class="form1">
                    <label for="textarea">Comment</label>
                    <textarea name="what can we do for you?" class="rounded-xl placeholder-gray-50::placeholder"
                    placeholder="Give description of the service you would like" id="area" cols="30" rows="2"></textarea>
                </div>


                 <x-button class="btn btn-success btn-lg px-3"
                  type="submit">Submit</x-button>

                </form>

            </section>

            <section class="pop-up go2" id="go2">
                <button class="btn btn-danger btn-lg  px-3" id="exit" onclick="noForm()"><i class="fa fa-x"></i></button>
                <form action="emails.email-template.send" method="post" class="form-horizontal" id="book" >
                    @csrf
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                    <h2>Enrol Here</h2>

                    <div class="form1">
                        <label for="name">Names</label>
                        <input type="text" name="name" placeholder="Full Names"
                        class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
                    </div>

                    <div class="form1">
                    <label for="email">Email</label>
                    <input type="email" autocomplete="on" placeholder="name@example.com" class="px-2 py-2 shadow-xl
                    rounded-xl placeholder-gry-50::placeholder" required>
                </div>

                    <div class="form1">
                    <label for="category">Select School</label>
                    <select name="" id="category">
                        <option value="">Passport</option>
                        <option value="">Visa</option>
                        <option value="">Exam Booking</option>
                        <option value="">Work Abroad</option>
                        <option value="">E-Learning</option>
                        <option value="">Study Abroad</option>
                        <option value="">Autralia</option>
                    </select>
                </div>

                <div class="form1">
                    <label for="textarea">Comment</label>
                    <textarea name="what can we do for you?" class="rounded-xl"
                    placeholder="Describe mode of learning you would prefer" id="area" cols="30" rows="2"></textarea>
                </div>


                 <x-button class="btn btn-success btn-lg px-3"
                  type="submit">Submit</x-button>

                </form>
            </section>
