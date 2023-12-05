<x-layout>
<main class="space-y-3">
    <div class="main-body">

        {{-- search --}}
        @include('partials._search')
    <div class="tags-bar">
        @unless(count($listings) == 0)

        @foreach($listings as $listing)
        <x-listing-tags :tagsCsv="$listing->tags" />
        @endforeach

        @else
        <p class="text-white-50 mx-auto">No tags found</p>
        @endunless
    </div>
    </div>
    <div class="container-fluid main-container">

    <div class="left">

{{-- jobs area --}}
<section class="space-y-0">
<div class="lg:grid lg:grid-cols-2 gap-3 md:space-y-0 mx-4">

    @unless(count($listings) == 0)

    @foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
    @endforeach

    @else
    <p class="text-white-50 mx-auto">No listings found</p>
    @endunless

  </div>

{{-- pagination --}}
<div class="mt-6 p-4">
    {{$listings->links()}}
  </div>

</section>


</div>

<div class="xl:grid xl:grid-cols-4 d-2xl-flex gap-3 md:space-y-0 mx-4">
{{-- <div class="row right"> --}}


<div class="con-header items-center">
    <h1 class="text-2xl text-white-50">Trending Jobs</h1>
    <ol class="justify-start text-white-50 text-xl">
        <a href="" class="nav-link text-white-50"><span>Mechanic jobs</span></a>
        <a href="" class="nav-link text-white-50"><span>Electrician Jobs</span></a>
        <a href="" class="nav-link text-white-50"><span>Cleaner Jobs</span></a>
        <a href="" class="nav-link text-white-50"><span>Security Jobs</span></a>
        <a href="" class="nav-link text-white-50"><span>Driver JObs</span></a>
         <button class="btn btn-success px-2 mx-0 py-2 me-0 fs-5 rounded-pill" >Book</button>
    </ol>

</div>

<div class="con-header">
    <h1 class="text-2xl text-white-50">Top Job Countries</h1>
    <ol class="text-white-50">
        <a href="" class="nav-link text-white-50"><span>Jobs in Qatar</span></a>
        <a href="" class="nav-link text-white-50"><span>Jobs in UK</span></a>
        <a href="" class="nav-link text-white-50"><span>Jobs in Canada</span></a>
        <a href="" class="nav-link text-white-50"><span>Jobs in Sychelles</span></a>
        <a href="" class="nav-link text-white-50"><span>Jobs in Saudi Arabia</span></a>
         <button class="btn btn-primary px-2 mx-2 py-2 me-0 fs-5 my-3 rounded-pill" >Book</button>
    </ol>

</div>

<div class="con-header">
    <h1 class="text-2xl text-white-50">Trending Blogs</h1>
    <ol class="t-blogs text-lg-right text-white-50">
        <a href="" class="nav-link text-white-50">How to Get a Job Abroad?<span> By T. Mugo</span></a>
        <a href="" class="nav-link text-white-50">Best Jobs Abroad<span> By Jeremy</span></a>
        <a href="" class="nav-link text-white-50">Choosing areliable travel agency<span> By Dante B.</span></a>
        <a href="" class="nav-link text-white-50">Life Abroad<span> By M. Aisha</span></a>
        <a href="" class="nav-link text-white-50">study Abroad<span> By Maryanne</span></a>
         <button class="btn btn-primary px-2 mx-2 py-2 me-0 fs-5 my-3 rounded-pill text-center" >Book</button>
    </ol>

</div>

  <div class="con-header">
    <h1 class="text-2xl text-white-50">Our Services</h1>
    <ol class="text-white-50">
        <a href="" class="nav-link text-white-50"><span>Passport Application</span></a>
        <a href="" class="nav-link text-white-50"><span>Visa Processing</span></a>
        <a href="" class="nav-link text-white-50"><span>Work Abroad</span></a>
        <a href="" class="nav-link text-white-50"><span>Documentation</span></a>
        <a href="" class="nav-link text-white-50"><span>Air Ticketing</span></a>
        <a href="" class="nav-link text-white-50"><span>Consultation</span></a>
        <a href="" class="nav-link text-white-50"><span>Exam Center and Booking</span></a>
        <a href="" class="nav-link text-white-50"><span>Study Abroad</span></a>
        <button type="button" class="btn btn-danger px-2 mx-0 py-2 me-0 fs-5 rounded-pill" >Book</button>
    </ol>

</div>
{{-- <div class="con-header">
   <h2 class="text-xl text-white-50">Study the course of choice at our engaging e-learning portal</h2>
   <button type="button" id="sign-up" class="btn btn-danger px-2 mx-0 py-2  fs-6 rounded-pill" >Sign-up Now</button>

</div> --}}
</div>
</div>

</main>
</x-layout>

