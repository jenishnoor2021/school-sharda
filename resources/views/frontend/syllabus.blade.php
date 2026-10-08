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
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image">
                        <img src="{{ asset('assets/img/about/gujarati.png') }}" alt="classes-image">
                    </div>
                    <div class="classes-content">
                        <h2>
                            Gujarati Medium
                        </h2>
                        <ul>
                            @forelse($sylabugujs as $sylabu)
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    @php
                                        $label = $sylabu->std . (!str_contains(strtoupper($sylabu->std), 'GUJARATI') ? ' GUJARATI MEDIUM' : '');
                                    @endphp
                                    @if($sylabu->hasPdf())
                                        <a href="{{ asset($sylabu->file) }}" target="_blank" title="View Syllabus PDF">
                                            {{ $label }}
                                            <i class="fa fa-file-pdf-o text-danger" style="margin-left: 6px;"></i>
                                        </a>
                                    @else
                                        <span>{{ $label }}</span>
                                    @endif
                                </li>
                            @empty
                                <li>No syllabus available</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image">
                        <img src="{{ asset('assets/img/about/english.png') }}" alt="classes-image">
                    </div>
                    <div class="classes-content">
                        <h2>
                            English Medium
                        </h2>
                        <ul>
                            @forelse($sylabuengs as $sylabu)
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    @php
                                        $label = $sylabu->std . (!str_contains(strtoupper($sylabu->std), 'ENGLISH') ? ' ENGLISH MEDIUM' : '');
                                    @endphp
                                    @if($sylabu->hasPdf())
                                        <a href="{{ asset($sylabu->file) }}" target="_blank" title="View Syllabus PDF">
                                            {{ $label }}
                                            <i class="fa fa-file-pdf-o text-danger" style="margin-left: 6px;"></i>
                                        </a>
                                    @else
                                        <span>{{ $label }}</span>
                                    @endif
                                </li>
                            @empty
                                <li>No syllabus available</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image">
                        <img src="{{ asset('assets/img/about/hindi.png') }}" alt="classes-image">
                    </div>
                    <div class="classes-content">
                        <h2>
                            Hindi Medium
                        </h2>
                        <ul>
                            @forelse($sylabuhins as $sylabu)
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    @php
                                        $label = $sylabu->std . (!str_contains(strtoupper($sylabu->std), 'HINDI') ? ' HINDI MEDIUM' : '');
                                    @endphp
                                    @if($sylabu->hasPdf())
                                        <a href="{{ asset($sylabu->file) }}" target="_blank" title="View Syllabus PDF">
                                            {{ $label }}
                                            <i class="fa fa-file-pdf-o text-danger" style="margin-left: 6px;"></i>
                                        </a>
                                    @else
                                        <span>{{ $label }}</span>
                                    @endif
                                </li>
                            @empty
                                <li>No syllabus available</li>
                            @endforelse
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