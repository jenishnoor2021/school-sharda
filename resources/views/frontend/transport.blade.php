@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Transport</li>
      </ul>
      <h1 class="char-animation">Transport</h1>
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
              <img src="{{ asset('assets/img/about/transport.png') }}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Transport</span>
              <h2 class="char-animation">
                Transport <span>Facilities</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <ul>
                <li class="wow fadeInUp" data-wow-delay=".7s">Transport facilities provided by Sharda Vidyalaya..</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Sharda Vidyalaya School provides transport facilities to all students from Class Nur. to Class XII. The transport system is hassle-free and convenient.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">We provide safe and comfortable vans that are spacious and air-conditioned. These school vans fly on most routes of the city. Students get more space to sit and keep their bags too. They do not have to take in the air and noise pollution from outside. Use of school van is optional, however, we encourage all to avail this facility to avoid traffic congestion and reduce the carbon footprint.</li>
              </ul>
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