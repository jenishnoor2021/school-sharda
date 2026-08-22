@extends('layouts.front')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/breadcrumb-bg-1.jpg')}}">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Supervisor</h1>
      <ul class="breadcumb-menu">
        <li><a href="{{URL::to('/')}}">Home</a></li>
        <li class="active">Supervisor</li>
      </ul>
    </div>
  </div>
</div>

<section class="about-section bg-smoke-two space">
  <div class="container">
    <div class="row align-items-center gy-30">
      <div class="col-lg-6 about-img wow fadeInLeft" data-wow-delay="0.2s">
        <div><img src="{{asset('assets/img/normal/Beena_Ahir.jpg')}}" alt="Mamta_Singh" class="clippath"></div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
        <div class="text-center text-lg-start">
          <h2 class="sec-title big-title">SUPERVISOR'S MESSAGE</h2>
          <p class="fs-md mb-10">
            Welcome to Sunrise Vidhalaya!
          </p>
          <p class="fs-md mb-10">
            "As the Supervisor, it is my privilege to support our students through this vital stage of academic and personal growth. our goal is to guide students with care, discipline, and motivation."
          </p>
          <p class="fs-md mb-10">
            We emphasize academic excellence, character development, and co-curricular involvement, ensuring students are well-prepared for the challenges ahead. Our dedicated faculty, supportive environment, and student-centered approach work together to build confidence and competence in every learner.
          </p>
          <p class="fs-md mb-10">
            We look forward to nurturing your potential and helping you shape a promising future.
          </p>
        </div>
      </div>
      <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.2s">
        <div class="text-center text-lg-start">
          <div class="info text-end">
            <h6 class="text-right" style="color: var(--yellow-color);">Warm regards,</h6>
            <h4 class="text-right" style="color: #ed6479;">Beena Ahir</h4>
            <h6 class="text-right" style="color: var(--blue-color);">Supervisor - Sunrise Vidyalaya</h6>
            <h6 class="text-right" style="color: #5bd7ca;">+91 9558117833</h6>
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