@extends('layouts.front')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/breadcrumb-bg-1.jpg')}}">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Extra Activities</h1>
      <ul class="breadcumb-menu">
        <li><a href="{{URL::to('/')}}">Home</a></li>
        <li class="active">Extra Activities</li>
      </ul>
    </div>
  </div>
</div>

<section class="service-section bg-smoke-two space">
  <div class="container">
    <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s">
      <h2 class="sec-title">Extra Activities</h2>
      <h5 style="color: #ff957b;">With our fun school activities for kids, learning in school becomes an interesting and enjoyable exercise.</h5>
    </div>
    <div class="row gx-lg-15 justify-content-center">
      <div class="col-xl-2 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="nav nav-tabs service-tab" id="service-tab1" role="tablist">
          <button class="sr-icon-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">
            <img src="{{asset('assets/img/icon/karate.png')}}" alt="karate" />Karate
          </button>
          <button class="sr-icon-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">
            <img src="{{asset('assets/img/icon/chess.png')}}" alt="chess" />Chess
          </button>
        </div>
      </div>
      <div class="col-xl-10 order-xl-2 order-3 wow fadeInUp" data-wow-delay="0.2s">
        <div class="tab-content service-tabcontent" id="service-tabContent">
          <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
            <div class="row align-items-center service-grid">
              <div class="col-md-6">
                <div class="service-img"><img src="{{asset('assets/img/normal/karate.jpg')}}" alt="karate" /></div>
              </div>
              <div class="col-md-6">
                <div class="service-icon"><img src="{{asset('assets/img/icon/karate.png')}}" alt="karate" /></div>
                <h2 class="h3 service-title">Karate</h2>
                <p class="service-text">
                  As an option for self protection we teach karate to our students. Karate is a striking art using punching, kicking, knee strikes, elbow strikes and open hand techniques such as knife-hands, spear-hands and plum-heel strikes, and some styles, grappling, throws, joint locks, restrains and vital point strikes are also taught.
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
            <div class="row align-items-center service-grid">
              <div class="col-md-6">
                <div class="service-img"><img src="{{asset('assets/img/normal/chess.jpg')}}" alt="chess" /></div>
              </div>
              <div class="col-md-6">
                <div class="service-icon"><img src="{{asset('assets/img/icon/chess.png')}}" alt="chess" /></div>
                <h2 class="h3 service-title">Chess</h2>
                <p class="service-text">
                  Chess is extremely helpful in brain development, particularly when it is played regularly from a very young age. Keeping the benefits of chess in mind, our school has introduced Chess practice for all students. A healthy mind and fit body contribute greatly in shaping the golden future of a child.
              </div>
            </div>
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
