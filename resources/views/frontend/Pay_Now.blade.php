@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Fees Payment</li>
      </ul>
      <h1 class="char-animation">Fees Payment</h1>
    </div>
  </div>
</div>

<div class="program-section-two section-padding fix">
  <div class="container">
    <div class="section-title text-center mb-0">
      <span class="sub-title wow fadeInUp">Follow Steps</span>
      <h2 class="char-animation">
        Fees<span> Payment</span>
      </h2>
    </div>
    <div class="program-wrapper mt-5">
      <div class="program-wrapper-inner text-center">
        <div class="program-item wow fadeInLeft" data-wow-delay=".2s">
          <div class="program-items">
            <div class="icon-box">
              <div class="program-img">
                <div class="icon">
                  01
                </div>
                <img src="{{asset('assets/img/contact/FP1.png')}}">
              </div>
              <div class="program-waves">
                <div class="waves wave-1"></div>
                <div class="waves wave-2"></div>
                <div class="waves wave-3"></div>
              </div>
              <div class="arrow-shape">
                <img src="{{asset('assets/img/program/arrow-right2.png')}}" alt="shape-image">
              </div>
            </div>
            <div class="program-content">
              <h3>Step 1</h3>
              <p class="text-center">Scan Below QR Code</p>
            </div>
          </div>
        </div>
        <div class="program-item wow fadeInLeft" data-wow-delay=".4s">
          <div class="program-items">
            <div class="icon-box">
              <div class="program-img">
                <div class="icon">
                  02
                </div>
                <img src="{{asset('assets/img/contact/FP2.png')}}">
              </div>
              <div class="program-waves">
                <div class="waves wave-1 "></div>
                <div class="waves wave-2 "></div>
                <div class="waves wave-3 "></div>
              </div>
              <div class="arrow-shape">
                <img src="{{asset('assets/img/program/arrow-right2.png')}}" alt="shape-image">
              </div>
            </div>
            <div class="program-content">
              <h3>Step 2</h3>
              <p class="text-center">Select UPI Like Phonepay or Googlepay</p>
            </div>
          </div>
        </div>
        <div class="program-item wow fadeInLeft" data-wow-delay=".6s">
          <div class="program-items">
            <div class="icon-box">
              <div class="program-img">
                <div class="icon">
                  03
                </div>
                <img src="{{asset('assets/img/contact/FP3.png')}}">
              </div>
              <div class="program-waves">
                <div class="waves wave-1 "></div>
                <div class="waves wave-2 "></div>
                <div class="waves wave-3 "></div>
              </div>
              <div class="arrow-shape">
                <img src="{{asset('assets/img/program/arrow-right2.png')}}" alt="shape-image">
              </div>
            </div>
            <div class="program-content">
              <h3>Step 3</h3>
              <p class="text-center">Enter Your child fees amount</p>
            </div>
          </div>
        </div>
        <div class="program-item wow fadeInLeft" data-wow-delay=".7s">
          <div class="program-items">
            <div class="icon-box">
              <div class="program-img">
                <div class="icon">
                  04
                </div>
                <img src="{{asset('assets/img/contact/FP4.png')}}">
              </div>
              <div class="program-waves">
                <div class="waves wave-1 "></div>
                <div class="waves wave-2 "></div>
                <div class="waves wave-3 "></div>
              </div>
            </div>
            <div class="program-content">
              <h3>Step 4</h3>
              <p class="text-center">Make a Payment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('includes.cat-area')

@include('includes.join')

@include('includes.admission-step')

@endsection