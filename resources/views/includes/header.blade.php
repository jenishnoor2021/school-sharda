<div class="header-top-section">
   <div class="header-shape">
      <img src="{{asset('assets/img/header2.png')}}" alt="img">
   </div>
   <div class="container">
      <div class="header-top-wrapper">
         <p>Kindergarten is an early childhood educational environment <a href="{{ route('contact') }}">Learn More</a></p>
         <ul class="header-contact-list">
            <li>
               <i class="fal fa-envelope"></i>
               <a href="mailto:kidza@gmial.com">
                  kidza@gmial.com
               </a>
            </li>
            <li>
               <i class="far fa-phone-alt"></i>
               <a href="tel:+00479394888">
                  +00 (47) 939 4888
               </a>
            </li>
            <li>
               <i class="fa-regular fa-location-dot"></i>
               Graaf Floriss 22A CH NY
            </li>
         </ul>
      </div>
   </div>
</div>
<div id="header-sticky" class="header-1">
   <div class="container">
      <div class="mega-menu-wrapper">
         <div class="header-main">
            <div class="header-left">
               <a href="{{ url('/') }}" class="header-logo">
                  <img src="{{asset('assets/img/logo/logo.png')}}" alt="img">
               </a>

            </div>
            <div class="mean__menu-wrapper">
               <div class="main-menu">
                  <nav id="mobile-menu">
                     <ul>
                        <li class="has-dropdown menu-thumb">
                           <a href="{{ url('/') }}">
                              Home
                           </a>
                        </li>
                        <li class="has-dropdown">
                           <a href="javascript:void(0)">
                              The Institute
                              <i class="fas fa-chevron-down"></i>
                           </a>
                           <ul class="submenu">
                              <li class="has-dropdown">
                                 <a href="javascript:void(0)">
                                    About
                                    <i class="fas fa-angle-right"></i>
                                 </a>
                                 <ul class="submenu">
                                    <li>
                                       <a href="{{ route('about') }}">
                                          About Us
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route('curriculum') }}">
                                          Curriculum
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route('facility') }}">
                                          School Facility
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route('branches') }}">
                                          Branches
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="javascript:void(0)">
                                    Management
                                    <i class="fas fa-angle-right"></i>
                                 </a>
                                 <ul class="submenu">
                                    <li><a href="{{ route('director') }}">Managing Director</a></li>
                                    <li><a href="{{ route('branch_head') }}">Branch Head</a></li>
                                    <li><a href="{{ route('principal') }}">Principal</a></li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="javascript:void(0)">
                                    Our Staff
                                    <i class="fas fa-angle-right"></i>
                                 </a>
                                 <ul class="submenu">
                                    <li><a href="{{ route('teaching_staff') }}">Educators</a></li>
                                    <li><a href="{{ route('office_staff') }}">Office Executive</a></li>
                                    <li><a href="{{ route('non_teaching_staff') }}">Non.Teaching Staff</a></li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="javascript:void(0)">
                                    Prospectus
                                    <i class="fas fa-angle-right"></i>
                                 </a>
                                 <ul class="submenu">
                                    <li><a href="{{ route('transport') }}">Transport</a></li>
                                    <li><a href="{{ route('school_uniform') }}">School Uniform</a></li>
                                    <li><a href="{{ route('infrastructure') }}">Infrastructure</a></li>
                                    <li><a href="{{ route('guidelines_toparents') }}">Guidelines to Parents</a></li>
                                    <li><a href="{{ route('parent_rolein_education') }}">Parent Role in Education</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li><a href="{{ route('planner') }}">Planner</a></li>
                        <li><a href="{{ route('syllabus') }}">Syllabus</a></li>
                        <li><a href="{{ route('academic_activity') }}">Activity</a></li>
                        <li class="has-dropdown">
                           <a href="javascript:void(0)">
                              Gallery
                              <i class="fas fa-chevron-down"></i>
                           </a>
                           <ul class="submenu">
                              <li><a href="{{ route('photo_gallery') }}">Photo Gallery</a></li>
                              <li><a href="{{ route('media_gallery') }}">Media Gallery</a></li>
                              <li><a href="{{ route('video_gallery') }}">Video Gallery</a></li>
                           </ul>
                        </li>
                        <li class="has-dropdown">
                           <a href="javascript:void(0)">
                              Event
                              <i class="fas fa-chevron-down"></i>
                           </a>
                           <ul class="submenu">
                              <li><a href="{{ route('event') }}">Events</a></li>
                              <li><a href="{{ route('achievements') }}">Achievements</a></li>
                           </ul>
                        </li>
                        <li class="has-dropdown">
                           <a href="javascript:void(0)">
                              Admissions
                              <i class="fas fa-chevron-down"></i>
                           </a>
                           <ul class="submenu">
                              <li><a href="{{ route('criteria') }}">Admissions</a></li>
                              <li><a href="{{ route('admission_form') }}">Admission Form</a></li>
                              <li><a href="{{ route('inquiry') }}">Inquiry</a></li>
                              <li><a href="{{ route('Pay_Now') }}">Fees Payment</a></li>
                              <li><a href="{{ route('Refund_And_Cancel_Policy') }}">Refund & Cancel Policy</a></li>
                           </ul>
                        </li>
                        <li class="has-dropdown">
                           <a href="javascript:void(0)">
                              Reach Us
                              <i class="fas fa-chevron-down"></i>
                           </a>
                           <ul class="submenu">
                              <li><a href="{{ route('contact') }}">Contact Us</a></li>
                              <li><a href="{{ route('career') }}">Career</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="header-right d-flex justify-content-end align-items-center">
               <a href="{{ route('inquiry') }}" class="theme-btn">Admission Inquiry <i class="icon-arrow-icon"></i></a>
               <div class="header__hamburger my-auto d-xl-none">
                  <div class="sidebar__toggle">
                     <i class="fal fa-bars"></i>
                  </div>
               </div>
            </div>
            <div class="header-middle">
               <a href="{{ route('inquiry') }}" class="theme-btn">Admission Inquiry <i class="icon-arrow-icon"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>