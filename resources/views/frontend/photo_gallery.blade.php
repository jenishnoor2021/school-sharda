@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
   <div class="container">
      <div class="page-heading">
         <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
            <li>
               <a href="{{ url('/') }}">Home</a>
            </li>
            <li> Photo Gallery</li>
         </ul>
         <h1 class="char-animation">Photo Gallery</h1>
      </div>
   </div>
</div>

<div class="gallery-section m-2 mt-0 mb-0 fix section-padding">
   <div class="session-content text-center">
      <div class="section-title">
         <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
         <h2 class="char-animation">
            Our <span>Photo Gallery</span>
         </h2>
      </div>
   </div>
   <div class="gallery-wrapper">
      <!-- <div class="project-menu text-center mb-40 filter-menu-active">
         <button data-filter="*" class="active">All Zone <img class="btn-bg" src="{{asset('assets/img/bg/btn-bg.png')}}" alt="btn-bg" /><img class="btn-active-bg" src="{{asset('assets/img/bg/btn-bg-active.png')}}" alt="btn-active-bg" /></button>
         <button data-filter=".cat-1">English <img class="btn-bg" src="{{asset('assets/img/bg/btn-bg.png')}}" alt="btn-bg" /><img class="btn-active-bg" src="{{asset('assets/img/bg/btn-bg-active.png')}}" alt="btn-active-bg" /></button>
         <button data-filter=".cat-2">Gujrati <img class="btn-bg" src="{{asset('assets/img/bg/btn-bg.png')}}" alt="btn-bg" /><img class="btn-active-bg" src="{{asset('assets/img/bg/btn-bg-active.png')}}" alt="btn-active-bg" /></button>
         <button data-filter=".cat-3">Festival <img class="btn-bg" src="{{asset('assets/img/bg/btn-bg.png')}}" alt="btn-bg" /><img class="btn-active-bg" src="{{asset('assets/img/bg/btn-bg-active.png')}}" alt="btn-active-bg" /></button>
      </div> -->
      <div class="item-bg">
         <img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image">
      </div>
      <div class="item-bg-2">
         <img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image">
      </div>
      <div class="row g-2">
         @foreach($english as $eng)
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 cat-1">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s">
               <a href="{{$eng->file}}" class="img-popup">
                  <img src="{{$eng->file}}" alt="img">
                  <div class="icon">
                     <i class="fal fa-plus"></i>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
         @foreach($gujrati as $guj)
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 cat-2">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s">
               <a href="{{$guj->file}}" class="img-popup">
                  <img src="{{$guj->file}}" alt="img">
                  <div class="icon">
                     <i class="fal fa-plus"></i>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
         @foreach($festival as $fes)
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 cat-3">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s">
               <a href="{{$fes->file}}" class="img-popup">
                  <img src="{{$fes->file}}" alt="img">
                  <div class="icon">
                     <i class="fal fa-plus"></i>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>

@include('includes.cat-area')

@include('includes.admission-step')

@include('includes.join')

@endsection