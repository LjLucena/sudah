@extends('layouts.site_ui')

@section('content')

<!-- ======= Header ======= -->
<header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{route('index')}}">Sudah<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('index')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('index',['#about'])}}">About</a></li>
          <li><a class="nav-link scrollto active" href="diagnostic_services">Services</a></li>
          <li><a class="nav-link scrollto" href="products">Products</a></li>
          <li><a class="nav-link scrollto" href="{{route('index',['#team'])}}">Team</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="{{route('index',['#contact'])}}">Contact</a></li>
          <li><a class="nav-link scrollto" href="register">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/login" class="get-started-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Diagnostic Services<span>.</span></h1>
          <h2>Diagnostic testing can identify problems your pet may be experiencing
            so that proper treatment can begin before a condition worsens.</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <!--
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="#">Product Catalog</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Dolor Sitema</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Sedare Perspiciatis</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Magni Dolores</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">Nemos Enimade</a></h3>
          </div>
        </div>
      </div>-->

    </div>
  </section><!-- End Hero -->

  <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/laboratory.png");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                  <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <h4>Laboratory Services</h4>
                    <p>
                      To ensure a correct diagnosis, we first examine your pet's eyes, ears, 
                      and skin before checking their cardiovascular, neurological, 
                      gastrointestinal,and skeletal systems for any abnormalities. 

                      If blood and/or urine tests are required, we will examine their 
                      kidneys, liver, pancreas, and endocrine system. 

                      We may suggest additional diagnostic testing based on your pet's condition.<br> <br>
                      -Complete blood count <br>
                      -Blood Chemistry <br>
                      -Urinalysis <br>
                      -X-Ray/Radiography
                    </p>
                  </div>
                </div>
            </div>

            <div class="row mt-5">
              <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/ultra.png");' data-aos="fade-right"></div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                  <h4>Ultrasound</h4>
                  <p>
                    A veterinary ultrasound is a valuable tool for assessing heart conditions. It can detect changes in abdominal organs and aid in the identification of cysts and tumors that may be present. X-rays are frequently used in conjunction with ultrasound to reveal the size, dimension, and position of the organ. Ultrasounds, which are capable of real-time monitoring, are also used for pregnancy diagnosis and development monitoring.
                    <br> <br>
                    The exam is completely painless. Light sedation may used to help the patient lie comfortably while the scan is being performed. Your pet may need to be shaved in the area of interest, as veterinary ultrasound images are of better quality if they have complete contact with the skin.

                  </p>
                </div>
              </div>
            </div>

            
            <div class="row mt-5">
              <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/radiograph.png");' data-aos="fade-right"></div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                  <h4>Radiography</h4>
                  <p>
                    Radiography, also known as X-rays, is one of the most common and valuable medical diagnostic tools. X-rays are highly useful for screening areas of the body that have contrasting tissue densities, or when evaluating solid tissues.
                    <br> <br>
                    X-rays can be used to detect a variety of ailments in animals including arthritis, tumors, bladder and kidney stones, and lung abnormalities such as pneumonia. They are also used to evaluate bone damage, the gastrointestinal tract, respiratory tract, genitourinary system, organ integrity, and even identify foreign objects that may have been ingested. Dental radiographs help distinguish healthy teeth from those that may need to be extracted, and identify any abnormalities beneath the gums including root damage, tumors, and abscesses. In some cases, we may need to sedate your pet or use short-acting general anesthesia.
                  </p>
                </div>
              </div>
            </div>

            <div class="row mt-5 ">
              <div class="col d-flex justify-content-between">
                <a class="serv-btn btn-lg" href="other_services">Other Services</a>
                <a class="serv-btn btn-lg" href="general_wellness_services">General Wellness Services</a>
              </div>
            </div>
          </div>
        </section><!-- End Features Section -->
  </main>
  
@endsection