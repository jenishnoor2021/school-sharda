<?php

use App\Models\Galleryimage;
use App\Models\Slider;
use App\Models\Testomonial;
use App\Models\Video;

$gallerys = Galleryimage::where('is_show', 1)->paginate(8);
$testomonials = Testomonial::where('is_approved', 1)->get();
$sliders = Slider::where('is_show', 1)->get();
$videos = Video::where('is_show', 1)->get();

?>
@extends('layouts.front')
@section('content')
@if (\Session::has('alert'))
<div class="alert alert-success" id="displayhide">
    {!! \Session::get('alert') !!}
    <button id="hidAlert">X</button>
</div>
@endif

<!-- Hero Section Start -->
<section class="hero-section3 hero-3 fix">
    <div class="bottom-shape">
        <img src="{{asset('assets/img/hero/bottom-shape.png')}}" alt="">
    </div>
    <div class="swiper-dot text-center pt-5">
        <div class="dot"></div>
    </div>
    <div class="swiper banner-active">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div class="hero-height">
                    <div class="hero-bg bg-cover">
                        <img src="{{$slider->file}}" height="100%" width="100%">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="line-shape">
        <img src="{{asset('assets/img/hero/line-home3.png')}}" alt="img">
    </div>
    <div class="line-shape2">
        <img src="{{asset('assets/img/hero/line-home3.png')}}" alt="img">
    </div>
</section>

<!-- About Section Start -->
<section class="about-section section-padding fix">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-box">
                        <div class="about-image">
                            <img src="{{asset('assets/img/about/about-1.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title text-left">
                            <span class="sub-title wow fadeInUp text-left">About Us</span>
                            <h2 class="char-animation">
                                Safe, Fun & <span>Educational</span> – Just What Your Child Needs
                            </h2>
                        </div>
                        <div class="content-bottom mt-4 mt-md-0">
                            <p class="wow fadeInUp" data-wow-delay=".7s">Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper felis arcu elementum. Viverra lectus nullam sagittis nunc imperdiet leo felis. Ultrices mauris vitae cum bibendum Dolor sit amet, consectetur adipiscing elit. Dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                                <ul>
                                    <li class="mb-3">Learning & Fun</li>
                                    <li class="mb-3">Children Safety</li>
                                    <li class="mb-3">Healthy Meals</li>
                                    <li class="mb-3">Cute Environment</li>
                                </ul>
                            </div>
                            <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                                <a href="{{ route('about') }}" class="theme-btn theme-two">Read More <i class="icon-arrow-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.cat-area')

<!-- Program Section Start -->
@include('includes.admission-step')
<!-- feature end -->

<!-- Gallery Section Start -->
<div class="gallery-section m-2 mt-0 mb-0 fix section-padding pb-0">
    <div class="session-content text-center">
        <div class="section-title">
            <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
            <h2 class="char-animation">
                Our <span>Photo Gallery</span>
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
            @foreach($gallerys as $gallery)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery-image wow flipInY" data-wow-delay=".9s">
                    <a href="{{$gallery->file}}" class="img-popup">
                        <img src="{{$gallery->file}}" alt="img">
                        <div class="icon">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="about-button wow fadeInUp text-center mt-4" data-wow-delay=".9s">
        <a href="{{ route('photo_gallery') }}" class="theme-btn theme-two">View More <i class="icon-arrow-icon"></i></a>
    </div>
</div>

<!-- Testimonial Section Start -->
<section class="testimonial-section section-padding fix">
    <div class="pencil-icon">
        <img src="{{asset('assets/img/testimonial/pencil.png')}}" alt="icon-image">
    </div>
    <div class="flower-shape">
        <img src="{{asset('assets/img/testimonial/follwer.png')}}" alt="icon-image">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Our Testimonials</span>
            <h2 class="char-animation">
                Read &amp; <span>Student’s Parent</span> <br> Testimonials
            </h2>
        </div>
        <div class="testimonial-wrapper">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    @foreach($testomonials as $testomonial)
                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="testimonial-box-items">
                            <div class="item-border">
                                <img src="{{asset('assets/img/testimonial/border.png')}}" alt="shape-image">
                            </div>
                            <div class="testimonial-item">
                                <div class="client-image">
                                    <img src="{{$testomonial->file}}" alt="client-image">
                                    <ul class="icon">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <p class="testi-text">“{{$testomonial->message}}”</p>
                                <div class="client-info">
                                    <h3>{{$testomonial->name}}</h3>
                                    <p>{{$testomonial->occupation}}</p>
                                </div>
                                <div class="koma-icon">
                                    <img src="{{asset('assets/img/testimonial/koma.png')}}" alt="icon-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section Start -->
@include('includes.join')

@endsection