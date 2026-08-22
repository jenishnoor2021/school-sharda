@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> School Uniform</li>
      </ul>
      <h1 class="char-animation">School Uniform</h1>
    </div>
  </div>
</div>

<!-- About Section Start -->
<section class="about-section section-padding fix">
  <div class="container">
    <div class="about-wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-12">
          <div class="about-content">
            <div class="section-title text-center">
              <span class="sub-title wow fadeInUp text-left">Prospectus</span>
              <h2 class="char-animation">
                School <span>Uniform</span>
              </h2>
            </div>
            <table class="table table-bordered" style="border-color: #e8b77b;">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" style="background-color: #6a3c2a;color: #fff;">STANDARD</th>
                  <th scope="col" style="background-color: #6a3c2a;color: #fff;">MEDIUM</th>
                  <th scope="col" style="background-color: #6a3c2a;color: #fff;">DETAIL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" rowspan="4">Nur. to Sr.kg.</th>
                  <td rowspan="2">Gujarati</td>
                  <td><strong>Girls:-</strong> Yellow t-shirt with across line collar, blue,red and yellow across lines skirt,belt, shoes with velcro.</td>
                </tr>
                <tr>
                  <td><strong>Boys:-</strong> Yellow t-shirt with across line collar, blue,red and yellow across lines half pant,belt, shoes with velcro.</td>
                </tr>
                <tr>
                  <td rowspan="2">English</td>
                  <td><strong>Girls:-</strong> White t-shirt with across line collar, blue,red and white across lines skirt,belt, shoes with velcro,Red winter sweater.</td>
                </tr>
                <tr>
                  <td><strong>Girls:-</strong> White t-shirt with across line collar, blue,red and white across lines skirt,belt, shoes with velcro,Red winter sweater.</td>
                </tr>

                <tr>
                  <th scope="row" rowspan="6">1st to 12th</th>
                  <td rowspan="3">Gujarati</td>
                  <td><strong>Girls:-</strong> Brown Pinak skirt with white lining border,white shirt with brown line n brown border, brown tie with cross white line,Belt,Black shoes with lace,Brown socks.</td>
                </tr>
                <tr>
                  <td><strong>Boys:-</strong> Brown full pant,white shirt with brown line n brown border, brown tie with cross white line,Belt with school logo,Black shoes with lace,Brown socks.</td>
                </tr>
                <tr>
                  <td><strong>Girls &amp; Boys Sports Uniform:-</strong> Hosiery Dark blue track pants,Hosiery light blue t-shirt.</td>
                </tr>
                <tr>
                  <td rowspan="3">English</td>
                  <td><strong>Girls:-</strong> Blue Pinak skirt with white lining border,white shirt with blue line n brown border, Blue tie with cross white line,Belt,Black shoes with lace,Blue socks.</td>
                </tr>
                <tr>
                  <td><strong>Boys:-</strong> Blue full pant,white shirt with Blue line n Blue border,Blue tie with cross white line,Belt with school logo,Black shoes with lace,Blue socks.</td>
                </tr>
                <tr>
                  <td><strong>Girls &amp; Boys Sports Uniform:-</strong> Hosiery Dark Black track pants,Hosiery white t-shirt with black border.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section Start -->
<div class="gallery-section m-2 mt-0 mb-0 fix section-padding pt-0">
  <div class="session-content text-center">
    <div class="section-title">
      <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
      <h2 class="char-animation">
        <span>English</span> Medium
      </h2>
    </div>
  </div>
  <div class="gallery-wrapper">
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
    </div>
  </div>
</div>

<!-- Gallery Section Start -->
<div class="gallery-section m-2 mt-0 mb-0 fix section-padding pt-0">
  <div class="session-content text-center">
    <div class="section-title">
      <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
      <h2 class="char-animation">
        <span>Gujarati</span> Medium
      </h2>
    </div>
  </div>
  <div class="gallery-wrapper">
    <div class="item-bg">
      <img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image">
    </div>
    <div class="item-bg-2">
      <img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image">
    </div>
    <div class="row g-2">
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
    </div>
  </div>
</div>

@include('includes.cat-area')

@include('includes.admission-step')

@include('includes.join')

@endsection