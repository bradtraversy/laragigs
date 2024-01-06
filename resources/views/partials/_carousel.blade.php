<section id="main-left">

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="container-fluid">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"
                    aria-label="slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"
                    aria-label="slide 3"></button>

            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="{{ asset('images/images (2).jfif') }}" class="d-block w-100 img-fluid c-img"
                        alt="slide 1">
                    <div class="carousel-caption bottom-1">
                        <p class="mt-2 fs-3 text-uppercase">Search Gigs</p>
                        <p class="display-5 fw-bolder text-capitalize">Find Work abroad</p>
                        <button class="btn btn-danger text-xl" id="popup2" onclick = "openForm()">Apply</button>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('images/travel abroad.jfif') }}" class="d-block w-100 img-fluid c-img"
                        alt="slide 2">
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
                        <button class="btn btn-primary text-xl" onclick = "runForm()">Start Now</button>
                    </div>
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
@include('forms.popup')
