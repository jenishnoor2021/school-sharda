@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
   <div class="container">
      <div class="page-heading">
         <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
            <li>
               <a href="{{ url('/') }}">Home</a>
            </li>
            <li> Admission Inquiry</li>
         </ul>
         <h1 class="char-animation">Admission Inquiry</h1>
      </div>
   </div>
</div>

<section class="contact-section-inner section-padding">
   <div class="container">
      <div class="contact-wrapper mt-0 mb-0 contact-wrapper-two">
         <div class="row">
            <div class="section-title text-center">
               <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
               <h2 class="char-animation">
                  Admission <span>Inquiry</span>
               </h2>
            </div>
         </div>
         <div class="row g-4 align-items-center">
            <div class="col-xl-5 col-lg-6">
               <img src="{{asset('assets/img/contact/admission-inquiry.png')}}" height="100%" width="100%">
            </div>
            <div class="col-xl-7 col-lg-6">
               <div class="contact-from contact-from-two">
                  <h2 class="text-white mb-3">Fill Up Form</h2>
                  @if (\Session::has('alert'))
                  <div class="alert alert-success" id="displayhide">
                     {!! \Session::get('alert') !!}
                     <button id="hidAlert">X</button>
                  </div>
                  @endif
                  <form method="POST" action="/inquireystore" id="inquiry_form" class="contFrm contFrm-two">
                     @csrf
                     <div class="row">
                        <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                           <span>Name of the Student*</span>
                           <input type="text" name="fname" placeholder="Name of the Student" class="inptFld" id="fname" required>
                        </div>

                        <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                           <span>Admission in Class*</span>
                           <input type="text" name="subject" placeholder="Admission in Class" class="inptFld" id="subject" required>
                        </div>

                        <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                           <span>Phone</span>
                           <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" id="phone" required>
                        </div>

                        <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                           <span>Email*</span>
                           <input type="email" name="email" placeholder="Email" class="inptFld" id="email" required>
                        </div>

                        <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                           <span>Date of Birth*</span>
                           <input type="date" name="dob" placeholder="Date of Birth" class="inptFld" id="dob" required>
                        </div>

                        <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                           <span>Name of previous school*</span>
                           <input type="text" name="media" placeholder="Name of previous school" class="inptFld" id="media" required>
                        </div>

                        <div class="col-sm-12 wow fadeInUp" data-wow-delay=".6s">
                           <span>Your message</span>
                           <textarea class="inptFld inptFld-2 mb-0" name="detail" placeholder="Your Message..." id="detail"></textarea>
                        </div>
                     </div>

                     <div class="contact-button wow fadeInUp" data-wow-delay=".7s">
                        <button type="submit" class="theme-btn">Submit<i class="icon-arrow-icon"></i></button>
                     </div>

                  </form>
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