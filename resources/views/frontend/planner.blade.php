<?php

use App\Models\Brocher;
use App\Models\Galleryimage;

$gujratibrocher = Brocher::where('medium', 'gujarati')->orderBy('id', 'DESC')->first();
$englishbrocher = Brocher::where('medium', 'english')->orderBy('id', 'DESC')->first();
$gallerys = Galleryimage::where('is_show', 1)->paginate(12);
?>
@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Planner</li>
      </ul>
      <h1 class="char-animation">Planner</h1>
    </div>
  </div>
</div>

<section class="classes-section breadcrumb-classes section-padding fix">
  <div class="container">
    <div class="row g-4">
      <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".5s">
        <div class="classes-box-item mt-0 box-shadow">
          <div class="classes-image">
            <img src="{{ asset('assets/img/classes/classes1.jpg') }}" alt="classes-image">
            <div class="date-box">
              <span> <i class="far fa-calendar-alt"></i>
                PLANNER {{$english->year}}
              </span>
            </div>
          </div>
          <div class="classes-content">
            <h2>
              English Medium Planner & Brocher {{$english->year}}
            </h2>
            <div class="classes-rate">
              <a href="{{$english->file}}" target="_blank" class="theme-btn">Download Planner <i class="icon-arrow-icon"></i></a>
              <?php if (isset($englishbrocher->file)) { ?>
                <a href="{{ $englishbrocher->file }}" target="_blank" class="theme-btn theme-two" style="color: #ff957b;">Download Brocher <i class="fa fa-angle-double-right"></i></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
        <div class="classes-box-item mt-0 box-shadow">
          <div class="classes-image">
            <img src="{{ asset('assets/img/classes/classes1.jpg') }}" alt="classes-image">
            <div class="date-box">
              <span> <i class="far fa-calendar-alt"></i>
                PLANNER {{$gujrati->year}}
              </span>
            </div>
          </div>
          <div class="classes-content">
            <h2>
              Gujarati Medium Planner & Brocher {{$gujrati->year}}
            </h2>
            <div class="classes-rate">
              <a href="{{$gujrati->file}}" target="_blank" class="theme-btn">Download Planner <i class="icon-arrow-icon"></i></a>
              <?php if (isset($gujratibrocher->file)) { ?>
                <a href="{{ $gujratibrocher->file }}" target="_blank" class="theme-btn theme-two" style="color: #ff957b;">Download Brocher <i class="fa fa-angle-double-right"></i></a>
              <?php } ?>
            </div>
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