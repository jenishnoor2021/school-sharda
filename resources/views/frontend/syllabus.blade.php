@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li> Syllabus</li>
            </ul>
            <h1 class="char-animation">Syllabus</h1>
        </div>
    </div>
</div>

<!-- classes Section start -->
<section class="classes-section breadcrumb-classes section-padding fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image">
                        <img src="{{ asset('assets/img/about/gujarati.png') }}" alt="classes-image">
                    </div>
                    <div class="classes-content">
                        <h2>
                            Gujarati Medium
                        </h2>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 7 GUJARATI MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 8 GUJARATI MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 9 GUJARATI MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 10 GUJARATI MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 11 GUJARATI MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 12 GUJARATI MEDIUM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image">
                        <img src="{{ asset('assets/img/about/english.png') }}" alt="classes-image">
                    </div>
                    <div class="classes-content">
                        <h2>
                            English Medium
                        </h2>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 7 ENGLISH MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 8 ENGLISH MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 9 ENGLISH MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 10 ENGLISH MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 11 ENGLISH MEDIUM</a></li>
                            <li class="wow fadeInUp" data-wow-delay=".7s"><a href="#">STD: 12 ENGLISH MEDIUM</a></li>
                        </ul>
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