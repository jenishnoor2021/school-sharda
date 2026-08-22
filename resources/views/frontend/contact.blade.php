@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li> Contact Us</li>
            </ul>
            <h1 class="char-animation">Contact Us</h1>
        </div>
    </div>
</div>

<section class="contact-section-inner section-padding" style="background-color: #ffe1bc8f;">
    <div class="container">
        <div class="contact-wrapper mt-0 mb-0 contact-wrapper-two">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <img src="{{ asset('assets/img/contact/contact.png') }}" height="100%" width="100%">
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-info-items">
                        <div class="section-title text-center text-lg-start">
                            <span class="sub-title wow fadeInUp">Get In Touch</span>
                            <h2 class="char-animation">
                                Contact <span>Us For Help</span>
                            </h2>
                        </div>
                        <p class="wow fadeInUp mt-3 mt-md-0 text-center text-lg-start" data-wow-delay=".3s">Dolor sit amet, consectetur adipiscing elit. Nibh <br> ullamcorper felis arcu elementum..</p>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".3s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/contact/phone.svg') }}" alt="icon-image">
                            </div>
                            <div class="content">
                                <span>Call Us</span>
                                <h3>
                                    <a href="tel:+917861988622">+91 78619 88622</a>
                                </h3>
                            </div>
                        </div>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".5s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/contact/share.svg') }}" alt="icon-image">
                            </div>
                            <div class="content">
                                <span>Send Email</span>
                                <h3>
                                    <a href="mailto:support@shardavidhyalya.com">support@shardavidhyalya.com</a>
                                </h3>
                            </div>
                        </div>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".7s">
                            <div class="icon">
                                <img src="{{asset('assets/img/contact/location01.svg')}}" alt="icon-image">
                            </div>
                            <div class="content">
                                <span>Location</span>
                                <h3>
                                    <a href="https://maps.app.goo.gl/JKNTHdowWxLR4QNH9">Jalaram Society 3, Sadar patel circle, Model Town Rd, Dumbhal, Parvat Patiya, Surat, Gujarat 395010</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section-inner section-padding">
    <div class="container">
        <div class="contact-wrapper mt-0 mb-0 contact-wrapper-two">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-from contact-from-two">
                        <h2 class="text-white mb-3">Send Your Message</h2>
                        @if (\Session::has('alert'))
                        <div class="alert alert-success" id="displayhide">
                            {!! \Session::get('alert') !!}
                            <button id="hidAlert">X</button>
                        </div>
                        @endif
                        <form method="post" action="/contactstore" id="contact_form" class="contFrm contFrm-two">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                                    <span>Name*</span>
                                    <input type="text" name="username" placeholder="Your Name" id="username" class="inptFld" required>
                                </div>

                                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".4s">
                                    <span>Your Email*</span>
                                    <input type="email" name="email" placeholder="Email Address" id="email" class="inptFld" required>
                                </div>

                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                                    <span>Phone*</span>
                                    <input type="tel" name="phone" placeholder="Phone Number" id="phone" class="inptFld" required>
                                </div>

                                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s">
                                    <span>Subject</span>
                                    <input type="text" name="subject" placeholder="Your department" id="subject" class="inptFld" required>
                                </div>

                                <div class="col-sm-12 wow fadeInUp" data-wow-delay=".6s">
                                    <span>Your message</span>
                                    <textarea class="inptFld inptFld-2 mb-0" name="fdetail" id="fdetail" placeholder="Your Message..." required></textarea>
                                </div>
                            </div>
                            <div class="contact-button wow fadeInUp" data-wow-delay=".7s">
                                <button type="submit" class="theme-btn">Submit<i class="icon-arrow-icon"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="map-section">
                        <div class="map-items">
                            <div class="googpemap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.1683005436903!2d72.86149240000002!3d21.1854722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fc41848a7e7%3A0xc0abc451d785af05!2sSharda%20Hindi%20Vidhyalaya!5e0!3m2!1sen!2sin!4v1777395164427!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection