@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li> Our Branches</li>
            </ul>
            <h1 class="char-animation">Our Branches</h1>
        </div>
    </div>
</div>

<section class="choose-us-section-2 section-padding fix">
    <div class="container">
        <div class="choose-us-wrapper-two">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
                <h2 class="char-animation">
                    Our <span>Branches</span>
                </h2>
            </div>
            <div class="row g-4">
                @foreach($allbranches as $allbranche)
                <div class="choose-item col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".7s">
                    <div class="choose-img-items bg{{$loop->index+1}}">
                        <div class="icon-box">
                            <img src="https://sunrisegroupofschools.org/{{$allbranche['image']}}" alt="svg-image">
                            <h3>{{$allbranche['school_name']}}</h3>
                            <h6>{{$allbranche['branch']}}</h6>
                            <ul>
                                <li>
                                    <a target="_blank" href="{{$allbranche['website']}}">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$allbranche['address']}}
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="tel:{{$allbranche['mobile']}}">
                                        <i class="fas fa-phone-alt"></i>
                                        {{$allbranche['mobile']}}
                                    </a>
                                </li>
                            </ul>
                            <div class="view-branch">
                                <a target="_blank" href="{{$allbranche['website']}}" class="theme-btn">
                                    <i class="fa-light fa-arrow-up-right-from-square"></i>
                                    Click to View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>


@include('includes.cat-area')

@include('includes.join')

@include('includes.admission-step')

@endsection