@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li> School Facility</li>
            </ul>
            <h1 class="char-animation">School Facility</h1>
        </div>
    </div>
</div>

<section class="about-section section-padding fix">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-box">
                        <div class="about-image">
                            <img src="{{asset('assets/img/about/facility-1.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title text-left">
                            <span class="sub-title wow fadeInUp text-left">School Facility</span>
                            <h2 class="char-animation">
                                School <span>Premises</span>
                            </h2>
                        </div>
                        <div class="content-bottom mt-4 mt-md-0">
                            <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                                <ul>
                                    <li class="mb-3">Our school is very well protected and surrounded by greenery and bounded by walls from all the four corners. It is three storied.A computer room is avail on the first floor.</li>
                                    <li class="mb-3">There are large spacious classrooms with computerizes projector teaching and plenty of sunlight and fresh air.</li>
                                    <li class="mb-3">There is a huge natural green garden for children to play. There is a big playground in front of the school premises,which encourage children to come out with their sports talent.</li>
                                    <li class="mb-3">There is an auditorium to explore the child potential or for extracurricular activities.</li>
                                    <li class="mb-3">There is a regular medical check-up concerning about child's health.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section section-padding fix">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title text-left">
                            <span class="sub-title wow fadeInUp text-left">School Facility</span>
                            <h2 class="char-animation">
                                Educational <span>Facility</span>
                            </h2>
                        </div>
                        <div class="content-bottom mt-4 mt-md-0">
                            <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                                <ul>
                                    <li class="mb-3">Highly qualified and experienced staff.</li>
                                    <li class="mb-3">Improving communication skills in English.</li>
                                    <li class="mb-3">Improving writing and reading skills.</li>
                                    <li class="mb-3">Weekly tests are conducted for all subjects.</li>
                                    <li class="mb-3">Group discussions are arranged among the students.</li>
                                    <li class="mb-3">Personal care is taken for dull students.</li>
                                    <li class="mb-3">Teachers will be in touch through PTM.</li>
                                    <li class="mb-3">Motivational seminars are conducted for students.</li>
                                    <li class="mb-3">Students weekly progress sent by SMS.</li>
                                    <li class="mb-3">Continuous observation by C.C.T.V camera and recording.</li>
                                    <li class="mb-3">ISO 9001-2008 certified quality management.</li>
                                    <li class="mb-3">Limited students in each class.</li>
                                    <li class="mb-3">Activities are conducted for easy learning process.</li>
                                    <li class="mb-3">Safe transportation facility.</li>
                                    <li class="mb-3">Good approachable management.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-box">
                        <div class="about-image">
                            <img src="{{asset('assets/img/about/facility-2.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section section-padding fix">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-box">
                        <div class="about-image">
                            <img src="{{asset('assets/img/about/facility-3.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title text-left">
                            <span class="sub-title wow fadeInUp text-left">School Facility</span>
                            <h2 class="char-animation">
                                Mineral <span>Water Plant</span>
                            </h2>
                        </div>
                        <div class="content-bottom mt-4 mt-md-0">
                            <div class="about-list wow fadeInUp" data-wow-delay=".8s">
                                <ul>
                                    <li class="mb-3">Nothing comes above good health. The students and the staff at Seven Steps Pre-School have a facility to get the pure and the safe Mineral Water available all the time. 90% of human diseases are caused due to contaminated water. So Seven Steps Pre-School ensures the supply of Mineral Water to all its students and staff.</li>
                            </div>
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