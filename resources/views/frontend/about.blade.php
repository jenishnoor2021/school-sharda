@extends('layouts.front')
@section('content')

<!-- Breadcrumb Section start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
   <div class="container">
      <div class="page-heading">
         <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
            <li>
               <a href="{{ url('/') }}">Home</a>
            </li>
            <li> About Us</li>
         </ul>
         <h1 class="char-animation">About Us</h1>
      </div>
   </div>
</div>

<!-- About Section Start -->
<section class="about-section section-padding fix">
   <div class="container">
      <div class="about-wrapper">
         <div class="row g-4 align-items-center">
            <div class="col-lg-6">
               <div class="about-image-box">
                  <div class="about-image">
                     <img src="{{ asset('assets/img/about/about-1.png') }}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-content">
                  <div class="section-title text-left">
                     <span class="sub-title wow fadeInUp text-left">About Us</span>
                     <h2 class="char-animation">
                        Safe, Fun & <span>Educational</span> – Just What Your Child Needs
                     </h2>
                  </div>
                  <div class="content-bottom mt-4 mt-md-0">
                     <p class="wow fadeInUp" data-wow-delay=".7s">Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper felis arcu elementum. Viverra lectus nullam sagittis nunc imperdiet leo felis. Ultrices mauris vitae cum bibendum Dolor sit amet, consectetur adipiscing elit. Dolor sit amet, consectetur adipiscing elit. </p>
                     <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                        <ul>
                           <li class="mb-3">Learning & Fun</li>
                           <li class="mb-3">Children Safety</li>
                           <li class="mb-3">Healthy Meals</li>
                           <li class="mb-3">Cute Environment</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- About Section Start -->
<section class="about-section section-padding fix pt-0">
   <div class="container">
      <div class="about-wrapper">
         <div class="row g-4 align-items-center">
            <div class="col-lg-6">
               <div class="about-content">
                  <div class="section-title text-left">
                     <span class="sub-title wow fadeInUp text-left">Our Mission</span>
                     <h2 class="char-animation">
                        Safe, Fun & <span>Educational</span> – Just What Your Child Needs
                     </h2>
                  </div>
                  <div class="content-bottom mt-4 mt-md-0">
                     <p class="wow fadeInUp" data-wow-delay=".7s">Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper felis arcu elementum. Viverra lectus nullam sagittis nunc imperdiet leo felis. Ultrices mauris vitae cum bibendum Dolor sit amet, consectetur adipiscing elit. Dolor sit amet, consectetur adipiscing elit. </p>
                     <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                        <ul>
                           <li class="mb-3">Learning & Fun</li>
                           <li class="mb-3">Children Safety</li>
                           <li class="mb-3">Healthy Meals</li>
                           <li class="mb-3">Cute Environment</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-image-box">
                  <div class="about-image">
                     <img src="{{ asset('assets/img/about/our-mission.png') }}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@include('includes.cat-area')

@include('includes.admission-step')

@include('includes.join')

@endsection