<?php

use App\Models\Admission;

$count = Admission::count();
$countnumber = $count + 1;
?>
@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Admission Form</li>
      </ul>
      <h1 class="char-animation">Admission Form</h1>
    </div>
  </div>
</div>

<!-- Contact Section Start -->
<section class="contact-section-inner section-padding">
  <div class="container">
    <div class="contact-wrapper mt-0 mb-0 contact-wrapper-two">
      <div class="row">
        <div class="section-title text-center">
          <span class="sub-title wow fadeInUp">Sharda Vidhyalaya</span>
          <h2 class="char-animation">
            Admission <span>Form</span>
          </h2>
        </div>
      </div>
      <div class="row g-4 align-items-center">
        <div class="col-xl-5 col-lg-6">
          <img src="{{asset('assets/img/contact/admission.png')}}" height="100%" width="100%">
        </div>
        <div class="col-xl-7 col-lg-6">
          <div class="contact-from contact-from-two">
            <h2 class="text-white mb-3">Fill Up Form</h2>

            @if (\Session::has('alert'))
            <div class="alert alert-success" id="displayhide">
              {!! \Session::get('alert') !!}
              <button id="hidAlert">X</button>
            </div>
            @endif

            <form method="POST" action="/admissionformstore" id="admission_form" class="contact-form bg-form" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Form No.*</span>
                  <input type="number" name="fnumber" placeholder="e.g. 1" class="inptFld" id="fnumber" value="{{$countnumber}}" readonly required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Admission Date*</span>
                  <input type="date" name="date" id="date" placeholder="Admission Date" class="inptFld" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Name of the Student*</span>
                  <input type="text" name="sname" placeholder="Name of the Student" class="inptFld" id="sname" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Father's Name*</span>
                  <input type="text" name="fathername" placeholder="Father's Name" class="inptFld" id="fathername" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Mother's Name*</span>
                  <input type="text" name="mothername" placeholder="Mother's Name" class="inptFld" id="mothername" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Date of Birth*</span>
                  <input type="date" name="bod" placeholder="Date of Birth" class="inptFld" id="bod" required>
                </div>

                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                  <span>Caste / Sub-Caste*</span>
                  <select name="cast" id="position" required="required" class="inptFld" aria-invalid="false">
                    <option value="">-- Select --</option>
                    <option value="General / OBC">General / OBC</option>
                    <option value="ST">ST</option>
                    <option value="SC">SC</option>
                  </select>
                </div>

                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                  <span>Desire to join Std.*</span>
                  <select name="adm_std" id="adm_std" required="required" class="inptFld" aria-invalid="false">
                    <option value="">-- Select --</option>
                    <option value="Nursery">Nursery </option>
                    <option value="JR.KG">JR.KG </option>
                    <option value="SR.KG">SR.KG </option>
                    <option value="std-1">Standard - 1 </option>
                    <option value="std-2">Standard - 2 </option>
                    <option value="std-3">Standard - 3 </option>
                    <option value="std-4">Standard - 4 </option>
                    <option value="std-5">Standard - 5 </option>
                    <option value="std-6">Standard - 6 </option>
                    <option value="std-7">Standard - 7 </option>
                    <option value="std-8">Standard - 8 </option>
                    <option value="std-9">Standard - 9 </option>
                    <option value="std-10">Standard - 10 </option>
                    <option value="std-11-commerce">Standard - 11 - Commerce </option>
                    <option value="std-12-commerce">Standard - 12 - Commerce </option>
                  </select>
                </div>

                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                  <span>Medium*</span>
                  <select name="medium" id="medium" required="required" class="inptFld" aria-invalid="false">
                    <option value="">-- Select --</option>
                    <option value="English">English </option>
                    <option value="Gujarati">Gujarati </option>
                  </select>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Last School Name(With Address)*</span>
                  <input type="text" name="lschool" placeholder="Last School Name(With Address)" class="inptFld" id="lschool" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Residential Address*</span>
                  <input type="text" name="address" placeholder="Residential Address" class="inptFld" id="address" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                  <span>Occupation of Father / Guardian*</span>
                  <input type="text" name="occupation" placeholder="Occupation of Father / Guardian" class="inptFld" id="occupation" required>
                </div>

                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                  <span>Phone*</span>
                  <input type="tel" name="phonenumber" placeholder="Phone Number" class="inptFld" id="phonenumber" required>
                </div>

                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                  <span>Leaving Certificate & Birth Certificate</span>
                  <input type="file" name="file" placeholder="Leaving Certificate & Birth Certificate" class="inptFld" id="file" required>
                </div>

                <div class="col-sm-12 wow fadeInUp" data-wow-delay=".6s">
                  <span>Your message</span>
                  <textarea class="inptFld inptFld-2 mb-0" name="message" placeholder="Your Message..." id="message"></textarea>
                </div>
              </div>

              <div class="contact-button wow fadeInUp" data-wow-delay=".7s">
                <button type="submit" class="theme-btn">Submit Now<i class="icon-arrow-icon"></i></button>
              </div>

            </form>

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