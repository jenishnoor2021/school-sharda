@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
   <div class="container">
      <div class="page-heading">
         <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
            <li>
               <a href="{{ url('/') }}">Home</a>
            </li>
            <li> Principal</li>
         </ul>
         <h1 class="char-animation">Principal</h1>
      </div>
   </div>
</div>

<section class="about-section section-padding fix">
   <div class="container">
      <div class="about-wrapper">
         <div class="row g-4 align-items-center">
            <div class="col-lg-6">
               <div class="about-image-box">
                  <div class="about-image">
                     <img src="{{ asset('assets/img/managing-director.png') }}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-content">
                  <div class="section-title text-left">
                     <span class="sub-title wow fadeInUp text-left">Sharda Vidyalaya</span>
                     <h2 class="char-animation">
                        Principal's <span>Message</span>
                     </h2>
                  </div>
                  <div class="content-bottom mt-4 mt-md-0">
                     <p class="wow fadeInUp" data-wow-delay=".7s">Welcome to Sharda Vidyalaya</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s">Dear Students, Parents, and Visitors, It is a privilege to welcome you to the official website of Sharda Vidyalaya. At the heart of our institution lies a commitment to nurturing not just academic excellence, but the character and potential of every child who walks through our doors. We believe that education is a collaborative journey—one where the school, the family, and the community join hands to provide a safe, stimulating, and inclusive environment.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s"><b>Our Vision:</b> Our goal is to empower students to become lifelong learners and responsible global citizens. We strive to balance a rigorous academic curriculum with a vibrant array of co-curricular activities, ensuring that our students develop the critical thinking skills and emotional intelligence needed to thrive in an ever-changing world.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s"><b>Holistic Growth:</b> We focus on the intellectual, physical, and ethical development of our students.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s"><b>Innovative Learning:</b> Utilizing modern pedagogical tools to make learning engaging and relevant.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s"><b>Strong Values:</b> Instilling discipline, respect, and integrity as the foundation of success.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s"><b>To our students:</b> I encourage you to be curious, stay resilient, and embrace every opportunity to grow. To our parents: Thank you for your continued trust and partnership in your child's educational journey.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s">I invite you to explore our website to learn more about our programs, achievements, and the vibrant life here at Sharda Vidyalaya. Together, let us reach for new horizons.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="legacy-info">
                  <span>Sincerely,</span>
                  <h4>Mr. Pandey Prabhatkumar</h4>
                  <h6>Pre-Primary / Primary / Secondary / Higher Secondary</h6>
                  <a href="tel:+917567100172" class="telephone">+91 75671 00172</a>
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