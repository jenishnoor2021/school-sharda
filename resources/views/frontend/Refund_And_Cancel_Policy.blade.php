@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Refund & Cancel Policy</li>
      </ul>
      <h1 class="char-animation">Refund & Cancel Policy</h1>
    </div>
  </div>
</div>

<section class="about-section section-padding fix" style="background-color:#ffe1bc8f;">
  <div class="container">
    <div class="about-wrapper">
      <div class="row g-4">
        <div class="col-lg-12">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Our Policy</span>
              <h2 class="char-animation">
                Refund & Cancel <span>Policy</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <h3 class="wow fadeInUp" data-wow-delay=".7s" style="margin-bottom:16px;">Fees Once Paid Are Neither Refundable Nor Transferable</h3>
              <ul>
                <li class="wow fadeInUp" data-wow-delay=".7s">The notice of withdrawal must be submitted in written addressed to the Principal. The Principal shall acknowledge the receipt of the same. Telephone messages are NOT acceptable.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Note: Parents are requested to intimate the school about their decision to withdraw the child well in advance, in order to avoid payment of fine towards late intimation. The Transfer Certificate (TC) of child/children, likely to be withdrawn, will be issued only after full settlement of accounts/dues.</li>
              </ul>
            </div>
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