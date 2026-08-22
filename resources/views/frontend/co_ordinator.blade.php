@extends('layouts.front')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/breadcrumb-bg-1.jpg')}}">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Co-ordinator</h1>
      <ul class="breadcumb-menu">
        <li><a href="{{URL::to('/')}}">Home</a></li>
        <li class="active">Co-ordinator</li>
      </ul>
    </div>
  </div>
</div>

<section class="about-section bg-smoke-two space">
  <div class="container">
    <div class="col-12 text-center">
      <div class="title-area">
        <h2 class="sec-title">Co-ordinator</h2>
        <h5 style="color: #ff957b;">Co-ordinator Message at Sunrise Vidyalaya</h5>
      </div>
    </div>
    <div class="row align-items-center gy-30">
      <div class="col-lg-6 about-img wow fadeInLeft" data-wow-delay="0.2s">
        <div><img src="{{asset('assets/img/normal/mukeshbhai_zinjala.jpg')}}" alt="mukeshbhai_zinjala" class="clippath"></div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
        <div class="text-center text-lg-start">
          <h2 class="sec-title big-title">CO-ORDINATOR’S MESSAGE</h2>
          <p class="fs-md mb-10">
            Welcome to Sunrise School!
          </p>
          <p class="fs-md mb-10">
            When learning and teaching continually improves, everything improves." Education lays the foundation stone for our future. We all know that learning is a lifelong process so, getting a good education is imperative in today's society as it is a foundation of our successful future.
          </p>
          <p class="fs-md mb-10">
            Our vision is to develop inquiring , knowledgeable and caring young minds. Sunrise School strives to prepare students to understand, contribute & succeed in a rapidly changing society, thus making a better people, for a better world.
          </p>
        </div>
      </div>
      <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.2s">
        <div class="text-center text-lg-start">
          <div class="info text-end">
            <h6 class="text-right" style="color: var(--yellow-color);">Sincerely,</h6>
            <h4 class="text-right" style="color: #ed6479;">Mr. Mukeshbhai Zinjala</h4>
            <h6 class="text-right" style="color: var(--blue-color);">Co-ordinator - Sunrise Vidyalaya</h6>
            <h6 class="text-right" style="color: #5bd7ca;">+91 9824944437</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('includes.cat-area')

@include('includes.join')

@include('includes.admission-step')

@endsection
