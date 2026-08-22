@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
   <div class="container">
      <div class="page-heading">
         <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
            <li>
               <a href="{{ url('/') }}">Home</a>
            </li>
            <li> Branch Head</li>
         </ul>
         <h1 class="char-animation">Branch Head</h1>
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
                     <img src="{{asset('assets/img/managing-director.png')}}" alt="about-image" class="wow fadeInUp" data-wow-delay=".5s">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-content">
                  <div class="section-title text-left">
                     <span class="sub-title wow fadeInUp text-left">Sharda Vidyalaya</span>
                     <h2 class="char-animation">
                        Branch Head's <span>Message</span>
                     </h2>
                  </div>
                  <div class="content-bottom mt-4 mt-md-0">
                     <p class="wow fadeInUp" data-wow-delay=".7s">Let me take this time to say what an absolute pleasure and privilege to welcome you to Sharda Vidyalaya. The school lays a strong emphasis on value based education, talent development, shaping its students into good citizens and responsible human beings. Each child is gifted with special talents and abilities and hence considered unique. We try our best to provide a school environment where children are safe, secure, happy, and co-operative and where our key focus is on learning.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s">Among the many goals we have as educators it is at our core that we want to provide our students the opportunities to learn and grow socially. Achieving these goals requires strong communication, focus on student achievement and social development, and a dedication to our school community. At Sharda Vidyalaya, we will achieve all of these together.</p>
                     <p class="wow fadeInUp" data-wow-delay=".7s">We encourage and value parents and community involvement in the school. It is the close co-operation between parents and teachers that ensures quality educational experiences for our students. On behalf of Sharda Vidyalaya family I appreciate the co-operation of parents that lead us to achieve our goals as an education institution.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="legacy-info">
                  <span>Sincerely,</span>
                  <h4>Mr. Hareshbhai Baldaniya</h4>
                  <h6>Managing Director - Sharda Vidyalaya</h6>
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