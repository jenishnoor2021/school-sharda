@extends('layouts.front')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('assets/img/breadcrumb-bg.png')}}');">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li> Parent Role in Education</li>
      </ul>
      <h1 class="char-animation">Parent Role in Education</h1>
    </div>
  </div>
</div>

<section class="about-section section-padding fix">
  <div class="container">
    <div class="about-wrapper">
      <div class="row g-4">
        <div class="col-12">
          <div class="about-content">
            <div class="section-title text-center">
              <span class="sub-title wow fadeInUp text-left">Prospectus</span>
              <h2 class="char-animation">
                Parent Role in <span>Education</span>
              </h2>
            </div>
            <div class="content-bottom mt-4 mt-md-0">
              <p class="wow fadeInUp" data-wow-delay=".7s">The objective of this policy is to increase parent's roles and responsibilities as partners in their child’s education and participation in meeting the educational needs of children.</p>
              <div class="mt-4">
                <h3 class="wow fadeInUp mb-3" data-wow-delay=".7s">RATIONALE:</h3>
                <p class="wow fadeInUp" data-wow-delay=".7s">Responsibility, Win Win</p>
                <ul>
                  <li class="wow fadeInUp" data-wow-delay=".7s">The school believes that the child’s education can be best when the school and the parents are in partnership and agreement.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">The parent should arrange for appropriate learning environments at home to enable the children to learn, without which children will not be able to perform to their potential. Therefore it is important to understand that your role as parents must be played responsibly by you.</li>
                </ul>
              </div>
              <div class="mt-4">
                <h3 class="wow fadeInUp mb-3" data-wow-delay=".7s">WHAT WE EXPECT FROM PARENTS:</h3>
                <p class="wow fadeInUp" data-wow-delay=".7s">School Activities & Expectations</p>
                <ul>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Strive to attend all Parent Orientation sessions so as to be familiar with what is new in the upcoming grade.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Strive to attend all the Parent-Teacher Conferences (PTCs) or Student Led Conferences (SLCs). These are the occasions in the year when you can learn about your child’s overall progress.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Attend and participate in various events you have been invited for- class presentations, role plays, exhibitions and school events such as sports day, annual day celebrations.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Volunteering for school events or activities such as arranging for field trips, excursions, camps etc.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Follow schools rules and regulations in intent and spirit.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Support your child to do self-study and homework (but not do the homework for them). Give them the support as outlined in the homework policy.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Take an active interest in the child’s activities in school by understanding what’s really happening – by discussing with the child when they wishes to discuss (not by nagging her to tell you what’s happening).</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Understand which topics are being taught in the various subjects. Help them with surveys, projects, research, communication, presentation but don’t do it for them or outsource them. Help them by asking the right questions, by leading the child to find answers for herself.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Support the child during student led projects like PYP Exhibition, Community Project, Personal Projects etc...</li>
                </ul>
              </div>
              <div class="mt-4">
                <h3 class="wow fadeInUp mb-3" data-wow-delay=".7s">WITH YOUR CHILD:</h3>
                <ul>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Build a culture of reading. Read aloud to them, encourage them to read, make good books available to them, help them find reading buddies or reading club.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Do encourage your child to talk and express themself in their own time and way.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Encourage them to be independent in work, learning habits as well as in their daily routine habits.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Build a relationship with him/her based on mutual trust & respect rather than fear and force.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Getting to know the child’s friends (in and outside of school) to know who he/she values in life.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Exposure to a wide variety of happenings (rather than the standard malls, restaurants and cinema halls) and places inside and outside of Surat.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Give him/her exposure to a variety of activities and yet build his/her talent in 1 or 2 areas if possible.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Have reasonable expectations from your child – don’t expect him/her to fulfill all your unrealized dreams.</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">At the same time, do not over- schedule your child’s free time before and after school. This leads to stress and can be detrimental to your child’s overall development. Apart from activities that enrich the child’s life, the child must also get some time for free unstructured play (such as simply running around in the garden below) and for relaxation.</li>
                </ul>
              </div>
              <div class="mt-4">
                <h3 class="wow fadeInUp mb-3" data-wow-delay=".7s">BUILD A POSITIVE AND EDUCATIONAL FAMILY CULTURE:</h3>
                <ul>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Family-value building: Role model, discuss & help your child build universal human values such as integrity, commitment, respect & tolerance etc...</li>
                  <li class="wow fadeInUp" data-wow-delay=".7s">Balanced Routines: Role model and help your child also maintain balanced routines which include avenues for physical, mental and socio-emotional development.</li>
                </ul>
              </div>
              <div class="mt-4">
                <h3 class="wow fadeInUp mb-3" data-wow-delay=".7s">CONSEQUENCES:</h3>
                <ul>
                  <li class="wow fadeInUp" data-wow-delay=".7s">There are no enforced consequences for lack of proper role played by parents in their child’s education. The consequences suffered shall be the natural ones.</li>
                </ul>
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