@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Non. Teaching Staff</li>
      </ul>
      <h1 class="char-animation">Non. Teaching Staff</h1>
    </div>
  </div>
</div>

<section class="classes-section breadcrumb-classes section-padding fix">
  <div class="container">
    <div class="row">
      <div class="section-title text-center">
        <span class="sub-title wow fadeInUp text-left">Our Staff</span>
        <h2 class="char-animation">
          Our Non. <span>Teaching Staff</span>
        </h2>
      </div>
    </div>
    <div class="row g-4">
      @foreach ($nonteachings as $teaching)
      <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".5s">
        <div class="classes-box-item mt-0 box-shadow">
          <div class="classes-image">
            <img src="{{$teaching->file}}" alt="classes-image">
          </div>
          <div class="classes-content">
            <h2>
              {{$teaching->name}}
            </h2>
            <div class="location qualification">
              <span class="data">
                <i class="fa-solid fa-location-dot"></i>
                Qualification:
              </span>
              <span class="value">
                {{$teaching->qualification}}
              </span>
            </div>
            <div class="location designation">
              <span class="data">
                <i class="fa-solid fa-location-dot"></i>
                Designation:
              </span>
              <span class="value">
                {{$teaching->designation}}
              </span>
            </div>
            <div class="location experience">
              <span class="data">
                <i class="fa-solid fa-location-dot"></i>
                Experience:
              </span>
              <span class="value">
                {{$teaching->experience}} Years
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