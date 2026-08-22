@extends('layouts.front')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/breadcrumb-bg-1.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Incharge</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li class="active">Incharge</li>
            </ul>
        </div>
    </div>
</div>

<section class="about-section bg-smoke-two space">
    <div class="container">
        <div class="col-12 text-center">
            <div class="title-area">
                <h2 class="sec-title">Incharge</h2>
                <h5 style="color: #ff957b;">Incharge Message at Sunrise Vidyalaya</h5>
            </div>
        </div>
        <div class="row align-items-center gy-30">
            <div class="col-lg-6 about-img wow fadeInLeft" data-wow-delay="0.2s">
                <div><img src="{{asset('assets/img/normal/Mamta_Singh.jpg')}}" alt="Mamta_Singh" class="clippath"></div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="text-center text-lg-start">
                    <h2 class="sec-title big-title">INCHARGE’S MESSAGE</h2>
                    <p class="fs-md mb-10">
                        Welcome to Sunrise Vidhalaya!
                    </p>
                    <p class="fs-md mb-10">
                        "Education is not about learning facts but training your minds to think."
                    </p>
                    <p class="fs-md mb-10">
                        There is a big difference between cramming up facts and learning them, so that they can be applied in productive ways .We try to work towards holistic development of our students by providing them tools and experiences that encourage our students to think.
                    </p>
                    <p class="fs-md mb-10">
                        Sunrise group of schools aims to create empowered minds so that students are able to decide what is good for them, and to choose opportunities that help to build them and enable them to live in harmony with all existence. As an in charge of sunrise school Godadara branch, I am delighted that the schools value align with my own personal values including the importance of trust ,respect, innovation and a sense of community.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="text-center text-lg-start">
                    <div class="info text-end">
                        <h6 class="text-right" style="color: var(--yellow-color);">Sincerely,</h6>
                        <h4 class="text-right" style="color: #ed6479;">Mrs. Mamta. V. Singh</h4>
                        <h6 class="text-right" style="color: var(--blue-color);">Incharge -[ English Medium ] - Sunrise Vidyalaya</h6>
                        <h6 class="text-right" style="color: #5bd7ca;">+91 9824944437</h6>
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