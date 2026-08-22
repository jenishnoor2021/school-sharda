@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Admissions</li>
      </ul>
      <h1 class="char-animation">Admissions</h1>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<!-- Start Who We Are Area -->
<section class="about-section section-padding fix admission">
  <div class="container">
    <div class="about-wrapper">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <span class="sub-title wow fadeInUp text-left">Sharda Vidyalaya</span>
            <h2 class="char-animation">
              Admission <span>Process</span>
            </h2>
          </div>
        </div>
      </div>
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Admission</span>
              <h3 class="char-animation">
                NURSERY/PRE-PRIMARY
              </h3>
              <p class="wow fadeInUp" data-wow-delay=".7s">Kindly visit our school campus for assistance regarding admission. Our counsellors will be happy to assist you.</p>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <h3 class="wow fadeInUp" data-wow-delay=".7s">Eligibility criteria</h3>
              <p class="wow fadeInUp" data-wow-delay=".7s">Students applying for admission to Sunrise Vidyalaya for the Current Academic Year must satisfy the following eligibility criteria:</p>
              <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                <ul>
                  <li class="mb-3">A child seeking admission to the Nursery Class in a particular year should have attained the age of 3 years on the 1st June of that year.</li>
                </ul>
              </div>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <h3 class="wow fadeInUp" data-wow-delay=".7s">Documents required</h3>
              <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                <ul>
                  <li class="mb-3">Copy of Original Birth Certificate</li>
                  <li class="mb-3">2 Recent Photograph of Student</li>
                  <li class="mb-3">1 Photo of Father and 1 of Mother</li>
                </ul>
              </div>
              <h3 class="wow fadeInUp" data-wow-delay=".7s">APPLY FOR NEW ADMISSION</h3>
              <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                <a href="{{ route('admission_form') }}" class="theme-btn theme-two">Apply Now <i class="icon-arrow-icon"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Admission</span>
              <h3 class="char-animation">
                PRIMARY/SECONDARY/HIGHER SECONDARY
              </h3>
              <p class="wow fadeInUp" data-wow-delay=".7s">Kindly visit our school campus for assistance regarding admission. Our counsellors will be happy to assist you.</p>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <h3 class="wow fadeInUp" data-wow-delay=".7s">Documents required</h3>
              <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                <ul>
                  <li class="mb-3">Copy of Original Birth Certificate</li>
                  <li class="mb-3">Original school leaving certificate</li>
                  <li class="mb-3">Copy of Result of last class attended</li>
                  <li class="mb-3">2 Recent Photograph of Student</li>
                  <li class="mb-3">1 Photo of Father and 1 of Mother</li>
                </ul>
              </div>
              <h3 class="wow fadeInUp" data-wow-delay=".7s">INQUIRY FOR NEW ADMISSION</h3>
              <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                <a href="{{ route('inquiry') }}" class="theme-btn theme-two">Admission Inquiry <i class="icon-arrow-icon"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Who We Are Area -->

@include('includes.cat-area')

@include('includes.admission-step')

@include('includes.join')

@endsection