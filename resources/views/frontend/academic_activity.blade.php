@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li> Academic Activities</li>
            </ul>
            <h1 class="char-animation">Academic Activities</h1>
        </div>
    </div>
</div>

<section class="news-section section-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp text-left">Sharda Vidyalaya</span>
                    <h2 class="char-animation">
                        Academic <span>Activities</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".1s">
                <div class="news-card-items mt-0">
                    <div class="news-image">
                        <img src="{{asset('assets/img/news/news1.jpg')}}" alt="news-image">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news1.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news1.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news1.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news1.jpg')}}');"></div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".7s">
                            Yoga
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".7s">“Yoga is the journey of the self, through the self, to the self”- The Bhagwat Gita From first graders to college seniors, students may have youth on their side— but that doesn't mean their lives are pressure-free. Children deal with many distractions, temptations, overstimulation and peer pressure. Stress is a major obstacle to academic achievement, and yoga's stress relief powers have been shown to boost student performance.</p>
                        <p class="wow fadeInUp" data-wow-delay=".7s">Keeping all these factors in mind, Sharda Vidyalaya has implemented yoga in our classrooms. Students are training life-enhancing abilities that can positively impact their life and enhance their overall growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items mt-0">
                    <div class="news-image">
                        <img src="{{asset('assets/img/news/news2.jpg')}}" alt="news-image">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news2.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news2.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news2.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news2.jpg')}}');"></div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".7s">
                            Dance
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".7s">Dance is a language that body speaks. It is a beautiful form of art that helps you to express yourself without saying a word. At Sharda Vidyalaya we give regular training in dance where students learn teamwork, focus, and improvisational skills. We also conduct competitions to keep our students motivated.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="news-card-items mt-0">
                    <div class="news-image">
                        <img src="{{asset('assets/img/news/news3.jpg')}}" alt="news-image">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news3.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news3.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news3.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news3.jpg')}}');"></div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".7s">
                            Skating
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".7s">Sharda Vidyalaya provides skating lessons to students. It is a great way to alleviate back to school stress, and it provides welcome distraction from everyday worries. It keeps mind calm, and students get a sense of accomplishment which provides confidence boost that carries over to classroom.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="news-card-items mt-0">
                    <div class="news-image">
                        <img src="{{asset('assets/img/news/news11.jpg')}}" alt="news-image">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news11.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news11.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news11.jpg')}}');"></div>
                            <div class="news-layer-image" style="background-image: url('{{asset('assets/img/news/news11.jpg')}}');"></div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".7s">
                            Karate
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".7s">As an option for self protection we teach karate to our students. Karate is a striking art using punching, kicking, knee strikes, elbow strikes and open hand techniques such as knife-hands, spear-hands and plum-heel strikes. And some styles, grappling, throws, joint locks, restrains and vital point strikes are also taught.</p>
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