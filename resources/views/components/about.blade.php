@extends('components.home')
<div class="pt-20 mb-40">

<x-banner/>
<div class="about_section gap-2">
    <div class="image_section">
        <img src="./images/Sha.jpg" alt="Sharnoor Logo" class="about_img img-fluid">
    </div>
    <div class="content_section">
        <div class="tag_section tag_center">
          <h6>About us</h6>
            <div class="tag_indicator">
                <div class="line"></div>
                <div class="circle"></div>

            </div>
            <h6 class="about_title">
                We connect you to jobs Abroad
            </h6>
            <p class="about_desc">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet veniam ad deserunt aut optio aperiam! Ipsa, atque odit commodi deserunt incidunt
                 aspernatur. Fugit, cumque corporis atque ipsum culpa amet cupiditate.
            </p>
            <x-button class="btn btn-outline-danger about_btn bg_btn">
                Know More <i class="fa-solid fa-arrow-right"></i>
            </x-button>
        </div>
    </div>
</div>

<!--about section start-->
<section class="about" id="about">
    <div class="row">
        <div class="photo">
            <img src="{{ asset('images/2.jpg') }}" alt="A person studying">
        </div>

        <div class="content">
            <h3 class="text-3xl">Why Choose us?</h3>
            <p class="text-2xl">We are a diverse company aimed at connecting potential employers with job seekers. as a result,
                our main priority is the people, their needs, the laws of the land and sea.

                We mainly focus on Gulf countries with an inclusion to Asia and UK.
            </p>
                <x-button>contact us</x-button>
        </div>
    </div>
</section>


</div>
