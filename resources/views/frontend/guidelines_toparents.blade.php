@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Guidelines to Parents</li>
      </ul>
      <h1 class="char-animation">Guidelines to Parents</h1>
    </div>
  </div>
</div>

<section class="about-section section-padding fix">
  <div class="container">
    <div class="about-wrapper">
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="about-image-box">
            <div class="about-image">
              <img src="{{asset('assets/img/about/parents-guidelines.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-title text-left">
              <span class="sub-title wow fadeInUp text-left">Prospectus</span>
              <h2 class="char-animation">
                Guidelines to <span>Parents</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <p class="wow fadeInUp" data-wow-delay=".7s">Guidelines to parents for education at Sharda Vidyalaya..</p>
              <ul>
                <li class="wow fadeInUp" data-wow-delay=".7s">Ensure that your child takes a bath before coming to school.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">The child should always be in proper school uniform.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Personal hygiene needs to be followed which includes clipping of nails, washing of hair and maintaining a neat and tidy appearance.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Girls should oil and tie their hair neatly and avoid fancy clips. Boys should have short hair with no spikes.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Regular exercise is recommended for good physical health and to prevent obesity.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Eight hours of daily sleep keeps your child fresh and healthy.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">A well-balanced diet that is nutritionally rich and includes milk and other proteins should be followed.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Please ensure that your child always drinks boiled or filtered water. It is advisable for your child to bring water from home.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Encourage your child to eat healthy by sending nutritious food only.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Discourage your child to consume food stuff sold by road side vendors.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Do take your child for yearly dental and ophthalmic check up.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">All recommended vaccines should be given to your child.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">If your child is unwell, then you are requested not to send him/her to school.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Please observe the prescribed period of quarantine in case of diseases like Chicken Pox, Mumps, Measles, etc.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Please inform the Class Teacher and the respective Vice Principal in case your child is suffering from a particular allergy.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">In case of chronic diseases like epilepsy,asthma or heart diseases, please inform the Principal in writing.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Fancy watches are not allowed in school.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Fancy and expensive jewellery are not allowed in school.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Mobile phones, iPods or any such digital items are strictly not allowed and will be confiscated if found.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Any kind of disfigurement to school property will not be tolerated.</li>
                <li class="wow fadeInUp" data-wow-delay=".7s">Please report any kind of bullying or malpractices to the school authority.</li>
              </ul>
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