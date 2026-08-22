@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Infrastructure</li>
      </ul>
      <h1 class="char-animation">Infrastructure</h1>
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
              <img src="{{asset('assets/img/managing-director.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Prospectus</span>
              <h2 class="char-animation">
                Our <span>Infrastructurer</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <p class="wow fadeInUp" data-wow-delay=".7s">The Sharda Vidyalaya school building is ergonomically designed to suit children’s need for space, light and facilities are tailored to their size and capabilities.</p>
              <p class="wow fadeInUp" data-wow-delay=".7s">The school building was designed keeping in mind the ventilation in each classroom. Broad staircases, wide corridors and spacious classrooms are some of the key features of the building which make it safe and easy to access. Adequate toilets, drinking water facility one each floor helps students return to their classes faster. A central courtyard accommodates entire school at a time.</p>
              <p class="wow fadeInUp" data-wow-delay=".7s">Sharda Vidyalaya school is one of the few schools in the city which provides for parking of two wheelers and four wheelers inside the campus. The students are not subject to crossing roads while coming to school hence reducing the risk of accidents.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="our-legacy">
            <h3>Infrastructure of the sharda vidyalaya:</h3>
            <p class="wow fadeInUp" data-wow-delay=".7s">School buildings, classrooms, playgrounds and libraries are the most important aspect of school infrastructure. Properly planned school infrastructure is an out-and-out key factor in effective teaching and learning.</p>
            <ul>
              <li class="wow fadeInUp" data-wow-delay=".7s">Our School is very well protected and bounded by walls from all the four corners. It is three storied.</li>
              <li class="wow fadeInUp" data-wow-delay=".7s">Modern computer lab is on the first floor.</li>
              <li class="wow fadeInUp" data-wow-delay=".7s">Each floor is available with comfortable and cozy benches for students.</li>
              <li class="wow fadeInUp" data-wow-delay=".7s">Large spacious classrooms with computerizes projector teaching and plenty of sunlight and fresh air.</li>
              <li class="wow fadeInUp" data-wow-delay=".7s">Water purification plant which provides pure cool water for students.</li>
              <li class="wow fadeInUp" data-wow-delay=".7s">Auditorium to explore the child potential or for extracurricular activities.</li>
              <li class="wow fadeInUp" data-wow-delay=".7s">100% Fire protected.</li>
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