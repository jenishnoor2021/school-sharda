@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Office Executive</li>
      </ul>
      <h1 class="char-animation">Office Executive</h1>
    </div>
  </div>
</div>

<section class="classes-section breadcrumb-classes section-padding fix">
  <div class="container">
    <div class="row">
      <div class="section-title text-center">
        <span class="sub-title wow fadeInUp text-left">Our Staff</span>
        <h2 class="char-animation">
          Our Office <span>Executive</span>
        </h2>
      </div>
    </div>
    <div class="row g-4">
      @foreach ($offices as $office)
      <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="event-card">
          <div class="team-img"><img src="{{$office->file}}" alt="office_staff1"></div>
          <div class="event-content">
            <h4 class="event-title">{{$office->name}}</h4>
            <ul class="event-info">
              <li><b>Qualification :</b> {{$office->qualification}}</li>
              <li><b>Designation :</b> {{$office->designation}}</li>
              <li><b>Experience :</b> {{$office->experience}} Years</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".5s">
        <div class="classes-box-item mt-0 box-shadow">
          <div class="classes-image">
            <img src="{{$office->file}}" alt="classes-image">
          </div>
          <div class="classes-content">
            <h2>
              {{$office->name}}
            </h2>
            <div class="location qualification">
              <span class="data">
                <i class="fa-solid fa-location-dot"></i>
                Qualification:
              </span>
              <span class="value">
                {{$office->qualification}}
              </span>
            </div>
            <div class="location designation">
              <span class="data">
                <i class="fa-solid fa-location-dot"></i>
                Designation:
              </span>
              <span class="value">
                {{$office->designation}}
              </span>
            </div>
            <div class="location experience">
              <span class="data">
                <i class="fa-solid fa-location-dot"></i>
                Experience:
              </span>
              <span class="value">
                {{$office->experience}} Years+
              </span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('includes.cat-area')

@include('includes.admission-step')

@include('includes.join')

@endsection