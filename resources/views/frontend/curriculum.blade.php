@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Curriculum</li>
      </ul>
      <h1 class="char-animation">Curriculum</h1>
    </div>
  </div>
</div>

<section class="pricing-section section-padding fix">
  <div class="snake-shape">
    <img src="{{ asset('assets/img/pricing/snake.png') }}" alt="shape-image">
  </div>
  <div class="crown-shape">
    <img src="{{ asset('assets/img/pricing/crown.png') }}" alt="shape-image">
  </div>
  <div class="tubelight-shape">
    <img src="{{ asset('assets/img/pricing/tubelight.png') }}" alt="shape-image">
  </div>
  <div class="busket-shape float-bob-x">
    <img src="{{ asset('assets/img/newsletter/busket.png') }}" alt="shape-image">
  </div>
  <div class="sky-shape">
    <img src="{{ asset('assets/img/newsletter/sky.png') }}" alt="shape-image">
  </div>
  <div class="star-shape">
    <img src="{{ asset('assets/img/newsletter/star.png') }}" alt="shape-image">
  </div>
  <div class="container">
    <div class="section-title text-center">
      <span class="sub-title">Our Curriculum</span>
      <h2 class="char-animation">
        The curriculum of <span>sharda vidhyalya</span> is activity based
      </h2>
    </div>
    <div class="pricing-wrapper">
      <div class="pricing-items wow fadeInRight" data-wow-delay=".5s">
        <div class="pricing-content">
          <div class="pricing-header">
            <span>🌼 Starter Plan</span>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus. </p>
          </div>
          <div class="pricing-rate">
            <h2>$29 <span>/ Per Month</span></h2>
          </div>
          <ul class="pricing-list">
            <li><i class="fas fa-check"></i> Half-Day session</li>
            <li><i class="fas fa-check"></i> Half-Day sessions (9 AM – 12 PM)</li>
            <li><i class="fas fa-check"></i> Snacks Included</li>
            <li><i class="fas fa-check"></i> No Hidden Fees</li>
            <li><i class="fas fa-check"></i> Group Play Activitie</li>
          </ul>
          <div class="pricing-button">
            <a href="#" class="border-btn">Get Started<i class="icon-arrow-icon"></i></a>
          </div>
        </div>
      </div>
      <div class="pricing-items items-two wow fadeInUp" data-wow-delay=".2s">
        <span class="top-text">Most Popular</span>
        <div class="pricing-content">
          <div class="pricing-header">
            <span>🌟 Standard Plan</span>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
          </div>
          <div class="pricing-rate">
            <h2>$39 <span>/ Per Month</span></h2>
          </div>
          <ul class="pricing-list">
            <li><i class="fas fa-check"></i> Half-Day session</li>
            <li><i class="fas fa-check"></i> Half-Day sessions (9 AM – 12 PM)</li>
            <li><i class="fas fa-check"></i> 24/7 Support Included</li>
            <li><i class="fas fa-check"></i> Creative Arts & Story Time</li>
            <li><i class="fas fa-check"></i> Cancel Anytime, No Penalties</li>
            <li><i class="fas fa-check"></i> Free Platform Access</li>
          </ul>
          <div class="pricing-button">
            <a href="#" class="border-btn style-2 active">Get Started<i class="icon-arrow-icon"></i></a>
          </div>
        </div>
      </div>
      <div class="pricing-items items-three wow fadeInLeft" data-wow-delay=".5s">
        <div class="pricing-content">
          <div class="pricing-header">
            <span>🏅 Premium Plan</span>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
          </div>
          <div class="pricing-rate">
            <h2>$99 <span>/ Per Month</span></h2>
          </div>
          <ul class="pricing-list">
            <li><i class="fas fa-check"></i> Half-Day session</li>
            <li><i class="fas fa-check"></i> Half-Day sessions (9 AM – 12 PM)</li>
            <li><i class="fas fa-check"></i> Snacks Included</li>
            <li><i class="fas fa-check"></i> No Hidden Fees</li>
            <li><i class="fas fa-check"></i> Group Play Activitie</li>
          </ul>
          <div class="pricing-button">
            <a href="#" class="border-btn">Get Started<i class="icon-arrow-icon"></i></a>
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