@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Managing Director</li>
      </ul>
      <h1 class="char-animation">Managing Director</h1>
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
              <span class="sub-title wow fadeInUp text-left">Managing Director</span>
              <h2 class="char-animation">
                Management <span>Message</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <p class="wow fadeInUp" data-wow-delay=".7s">Welcome to the new academic year at Sharda Vidyalaya and a special welcome to our students. We are confident that our students will enhance the Sharda Vidyalaya tradition and share in the pride and commitment to study at our institution. We want you to excel as students, make success of your careers, be responsible citizens and above all, be good human beings. We look forward to working with you this academic year. Let's make this year the best year ever.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="our-legacy">
            <h3>Our Legacy:</h3>
            <p class="wow fadeInUp" data-wow-delay=".7s">Our institute here in Surat is one among the best. The education, academic expertise, provided by our institute is widely admired by many people and we, with due modesty, assert that we have achieved a depth of accomplishment in education and learning that is unrivalled.</p>
            <p class="wow fadeInUp" data-wow-delay=".7s">Getting success in the examination is all about your perseverance, endurance, learning ability, managing time and stress and zeal to model the path of success drawn by experts in the field of education. To ensure your success, we have designed our institute programme in a manner that develops both your knowledge and your problem solving acumen. To achieve this we have a team of experienced and most renowned staff. Our staff members are dedicated and devoted individuals of higher caliber with a genuine concern for building your future. The academic environment at Sharda Vidyalaya is highly conducive, enabling you to succeed in your efforts. With time we have very well learnt the diverse needs of students.</p>
            <p class="wow fadeInUp" data-wow-delay=".7s">Sharda Vidyalaya has an excellent reputation for academic success and I am often asked how we achieve this so consistently. The answer lies in the atmosphere of achievement we foster, where teachers and students set ambitious goals, develop good work habits and strive to succeed.</p>
            <h4>Planning and promoting your success....</h4>
          </div>
          <div class="legacy-info">
            <span>Sincerely,</span>
            <h4>Mr. Sanjaybhai Baldaniya</h4>
            <h6>Managing Director - Sunrise Group</h6>
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