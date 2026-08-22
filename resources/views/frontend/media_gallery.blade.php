<?php

use App\Models\Mediagalleryimage;

$mediagallerys = Mediagalleryimage::where('is_show', 1)->paginate(12);
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
                <li> Media Gallery</li>
            </ul>
            <h1 class="char-animation">Media Gallery</h1>
        </div>
    </div>
</div>

<div class="gallery-section m-2 mt-0 mb-0 fix section-padding">
    <div class="session-content text-center">
        <div class="section-title">
            <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
            <h2 class="char-animation">
                Our <span>Media Gallery</span>
            </h2>
        </div>
    </div>
    <div class="gallery-wrapper">
        <div class="item-bg">
            <img src="{{asset('assets/img/gallery/Gallery-bg.png')}}" alt="bg-image">
        </div>
        <div class="item-bg-2">
            <img src="{{asset('assets/img/gallery/Gallery-bg.png')}}" alt="bg-image">
        </div>
        <div class="row g-2">
            @foreach($medias as $media)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery-image wow flipInY" data-wow-delay=".9s">
                    <a href="{{$media->file}}" class="img-popup">
                        <img src="{{$media->file}}" alt="img">
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