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
          <li><a class="nav-link scrollto active" href="services">Services</a></li>
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
          <h1>General Wellness<span>.</span></h1>
          <h2>Annual wellness exams evaluate your pets overall health,
            detect problems before they become serious,
            and keep them on track to live a long, healthy life.</h2>
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
                <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/laboratory.jpg");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                  <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <h4>Vet Dental</h4>
                    <p>
                        Annual dental exams and cleanings are recommended to protect your pet from many health problems and help them maintain a healthy and clean mouth. <br>
                        Many health problems start in the mouth. Plaque, tartar, periodontal disease, and infected teeth serve as a source of inflammation and infection for the rest of the body. Dental disease is one of the most common problems that we see in dogs and cats. It can cause drooling, reluctance to eat, swelling, bad breath, redness of the gums, loose teeth and tooth discoloration.
                        <br><br>
                        -Minor Oral Surgery <br>
                        -Tooth Extractions <br>
                        -Teeth Exams <br>
                        -Cleaning and Polishing
                    </p>
                  </div>
                </div>
            </div>

            <div class="row mt-5">
              <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/ultrasound.png");' data-aos="fade-right"></div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                  <h4>Vaccination</h4>
                  <p>
                    Vaccinations are vital to the health and protection of your pet, and serve as a preventive measure in combating viral diseases like Parvovirus, Parainfluenza virus, Distemper, Lyme, Panleukopenia, Feline Leukemia Virus, and Rabies.
                    <br> <br>
                    Vaccines help to combat diseases by exposing the pet's immune system to inactive or small amounts of a particular form of bacteria or virus. Vaccines are administered through a subcutaneous injection (under the skin), orally, or intra-nasally, depending on the vaccine.
                  </p>
                </div>
              </div>
            </div>

            
            <div class="row mt-5">
              <div class="image col-lg-6" style='background-image: url("ui/assets/img/services/radiography.jpg");' data-aos="fade-right"></div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                  <h4>Deworming, Anti Fleas and Ticks</h4>
                  <p>
                    Deworming is an important preventative care regime for reducing parasites (internal and external) and improving your pet's health. It is also important to help to prevent transmission of parasites to you and your human family members
                        <br> <br>
                    Parasites such as fleas and ticks can be very damaging to your pet’s health. Preventive measures should be taken year-round to inhibit potential outbreaks.
                        <br> <br>
                        <b>Fleas:</b> Flea infestations can lead to anemia and fleas are also capable of transmitting serious diseases.
                        <br> <br>
                        <b>Ticks:</b>  Some tick bites only cause mild irritation or swelling at the site, but other tick bites can infect your pet with serious illnesses. If left untreated, these diseases, such as lyme, can lead to more severe health problems or even be fatal.
                  </p>
                </div>
              </div>
            </div>

            <div class="row mt-5 ">
              <div class="col d-flex justify-content-between">
                <a class="serv-btn btn-lg" href="diagnostic_services">Diagnostic Services</a>
                <a class="serv-btn btn-lg" href="other_services">Surgery & Other Services</a>
              </div>
            </div>
          </div>
        </section><!-- End Features Section -->
  </main>
  
@endsection