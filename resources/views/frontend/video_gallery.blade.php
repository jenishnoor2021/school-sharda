@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Video Gallery</li>
      </ul>
      <h1 class="char-animation">Video Gallery</h1>
    </div>
  </div>
</div>

<div class="gallery-section video m-2 mt-0 mb-0 fix section-padding">
  <div class="session-content text-center">
    <div class="section-title">
      <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
      <h2 class="char-animation">
        Our <span>Video Gallery</span>
      </h2>
    </div>
  </div>
  <div class="gallery-wrapper">
    <div class="row g-2">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-image wow flipInY" data-wow-delay=".9s">
          <iframe width="100%" height="170px" src="https://www.youtube.com/embed/Au5TCnV-zeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-image wow flipInY" data-wow-delay=".9s">
          <iframe width="100%" height="170px" src="https://www.youtube.com/embed/Au5TCnV-zeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-image wow flipInY" data-wow-delay=".9s">
          <iframe width="100%" height="170px" src="https://www.youtube.com/embed/Au5TCnV-zeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="program-section section-padding pt-0 fix">
  <div class="container">
    <div class="row g-4">
      @foreach($videourls as $video)
      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".4s">
        <div class="program-box-item">
          <div class="top-bar">
            <img src="{{ asset('assets/img/program/top-2.png') }}" alt="icon-image">
          </div>
          <div class="bottom-bar">
            <img src="{{ asset('assets/img/program/bottom-2.png') }}" alt="icon-image">
          </div>
          <div class="program-bg bg-2"></div>
          <div class="program-icon">
            <iframe width="100%" height="200px" src="{{$video->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($videos as $vid)
      <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".4s">
        <div class="program-box-item">
          <div class="top-bar">
            <img src="{{ asset('assets/img/program/top-2.png') }}" alt="icon-image">
          </div>
          <div class="bottom-bar">
            <img src="{{ asset('assets/img/program/bottom-2.png') }}" alt="icon-image">
          </div>
          <div class="program-bg bg-2"></div>
          <div class="program-icon">
            <video width="100%" height="200px" controls>
              <source src="{{$vid->file ? $vid->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" type="video/mp4" alt="icon-image">
            </video>
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