@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Career</li>
      </ul>
      <h1 class="char-animation">Career</h1>
    </div>
  </div>
</div>

<section class="about-section section-padding fix" style="background-color: #ffe1bc8f;">
  <div class="container">
    <div class="about-wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="about-image-box">
            <div class="about-image">
              <img src="{{asset('assets/img/contact/career.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Career</span>
              <h2 class="char-animation">
                Career at <span>Sharda Vidyalaya</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                <ul>
                  <li class="mb-3"><b>Pre Primary:</b> PRE-P.T.C / P.T.C / T.T.C</li>
                  <li class="mb-3"><b>Pre Primary:</b> PRE-P.T.C / P.T.C / T.T.C</li>
                  <li class="mb-3"><b>Pre Primary:</b> PRE-P.T.C / P.T.C / T.T.C</li>
                  <li class="mb-3"><b>Pre Primary:</b> PRE-P.T.C / P.T.C / T.T.C</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-section-inner section-padding">
  <div class="container">
    <div class="contact-wrapper mt-0 mb-0 contact-wrapper-two">
      <div class="row g-4 align-items-center">
        <div class="col-xl-12 col-lg-12">
          <div class="contact-from contact-from-two">
            <h2 class="text-white mb-3">Fill up career form</h2>
            @if (\Session::has('alert'))
            <div class="alert alert-success" id="displayhide">
              {!! \Session::get('alert') !!}
              <button id="hidAlert">X</button>
            </div>
            @endif
            <form method="POST" action="/careerstore" id="career_form" class="contact-form bg-form" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>First Name*</span>
                  <input type="text" name="fname" placeholder="First Name" class="inptFld" id="fname" required>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Last Name*</span>
                  <input type="text" name="lname" placeholder="Last Name" class="inptFld" id="lname" required>
                </div>

                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".4s">
                  <span>Your Email*</span>
                  <input type="email" name="email" placeholder="Email Address" class="inptFld" id="email" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                  <span>Phone*</span>
                  <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" id="phone" required>
                </div>

                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                  <span>Position applying for*</span>
                  <select name="position" id="position" required="required" class="inptFld" aria-invalid="false">
                    <option value="">Position applying for</option>
                    <option value="Pre-Primary Teacher">Pre-Primary Teacher</option>
                    <option value="Primary Teacher">Primary Teacher</option>
                    <option value="Secondary Teacher">Secondary Teacher</option>
                    <option value="Higher-Secondary Teacher">Higher-Secondary Teacher</option>
                    <option value="Non-Teaching Staff">Non-Teaching Staff</option>
                  </select>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                  <span>Upload your Resume*</span>
                  <input type="file" name="file" id="file" placeholder="Upload your Resume" class="inptFld" required>
                </div>

                <div class="col-sm-12 wow fadeInUp" data-wow-delay=".6s">
                  <span>Your message</span>
                  <textarea class="inptFld inptFld-2 mb-0" name="message" id="message" placeholder="Your Message..."></textarea>
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