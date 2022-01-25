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
          <h1>Surgery and Other Services<span>.</span></h1>
          <h2>Surgeries are performed under anesthesia for various conditions.
            Our full-service hospitals offer a variety of outpatient surgeries for pets.</h2>
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
                <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/spay.png");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                  <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <h4>Spay and Neuter</h4>
                    <p>
                        Spaying or neutering your pet can help it live a longer, healthier life, reduce behavioral issues, and help control the population of unwanted dogs and cats.
                        <br> <br>
                        There are many benefits that come with spaying your female companion animal. They include helping to control the stray dog and cat population, eliminating the sometimes 'messy' heat cycles that attract male dogs, and preventing diseases in your pet such as pyometra (infection in the uterus) and mammary cancer. Additionally, research has shown that spayed pets live longer than pets that have not been spayed.
                        <br><br>
                        There are also many benefits that come with castrating your male companion animal. These benefits include helping to control the stray dog and cat population, eliminating undesirable and embarrassing behavior, and preventing diseases in your pet such as prostate disease and testicular cancer.
                    </p>
                  </div>
                </div>
            </div>

            <div class="row mt-5">
              <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/grooming.png");' data-aos="fade-right"></div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                  <h4>Grooming</h4>
                  <p>
                    Even if your pet doesn’t look particularly scruffy, grooming provides many health benefits for them which may not be immediately obvious. Brushing your pet ventilates their coat, helping it grow healthy and strong and takes away old and damaged hair. Grooming also ensures that your pet’s skin can breathe and keeps down the level of grease in their coat. Too much grease can block pores and cause irritation and all sorts of skin problems. Running a brush through their coat acts as a nice massage which promotes healthy blood circulation.
                   <br><br>
                   Inclusions: <br>
                    Bath <br>
                    Nail trimming <br>
                    Ear cleaning <br>
                    Blow and dry
                  </p>
                </div>
              </div>
            </div>

            <div class="row mt-5">
                <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/pick.png");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                  <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <h4>Home Service <br>

                        Pick and Drop Off Grooming <br>
                        
                        Pet Boarding and Lodging</h4>
                    <p></p>
                  </div>
                </div>
              </div>

            <div class="row mt-5">
              <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/emergency.png");' data-aos="fade-right"></div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                  <h4>Emergency Services <br>

                    Consultation</h4>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="row mt-5">
                <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/supplies.png");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                  <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <h4>Pet Supplies
                        and
                        Pharmacy</h4>
                    <p></p>
                  </div>
                </div>
              </div>

            <div class="row mt-5 ">
                <div class="col d-flex justify-content-between">
                    <a class="serv-btn btn-lg" href="general_wellness_services">General Wellness Services</a>
                    <a class="serv-btn btn-lg" href="diagnostic_services">Diagnostic Services</a>
                </div>
            </div>
          </div>
        </section><!-- End Features Section -->
  </main>
  
@endsection