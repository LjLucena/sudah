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
          <li><a class="nav-link scrollto" href="{{route('index',['diagnostic_services'])}}">Services</a></li>
          <li><a class="nav-link scrollto" href="products">Products</a></li>
          <li><a class="nav-link scrollto active" href="{{route('index',['team'])}}">Team</a></li>
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
          <h1>Our Team<span>.</span></h1>
          <h2>Protecting the health of animals and society.</h2>
        </div>
      </div>
    </div>
</section><!-- End Hero -->

<main id="main">
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
            <p>Veterinarians</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="ui/assets/img/team/vetsunset.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.facebook.com/hooraeee"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Robin Alexis Edquiban, DVM</h4>
                        <span>Veterinarian-Sunset Branch<br/><br/>Studied Doctor of Veterinary Medicine at University of the Philippines</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="ui/assets/img/team/vetbamban.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.facebook.com/jirahlyn.dollente"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Jirah Lyn Dollente, DVM</h4>
                        <span>Veterinarian-Bamban Branch<br/><br/>Studied Doctor of Veterinary Medicine at Cagayan State University</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="ui/assets/img/team/vetmagalang.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.facebook.com/ryan.castro.33483"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Ryan Castro, DVM</h4>
                        <span>Veterinarian-Magalang Branch<br/><br/>Studied College of Veterinary Medicine at Pampanga State Agricultural University</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="ui/assets/img/team/vetsf.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.facebook.com/profile.php?id=100052634010683"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Arvin Cuevas, DVM</h4>
                        <span>Veterinarian-San Fernando Branch<br/><br/>Studied Doctor of Veterinary Medicine at Cagayan State University</span>
                    </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="ui/assets/img/team/vetcapas.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Lou Punzalan, DVM</h4>
                        <span>Veterinarian-Capas Branch<br/><br/>Studied College of Veterinary Medicine at Pampanga State Agricultural University</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="ui/assets/img/team/vetdau.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href="https://www.facebook.com/kelvinestacio"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>John Kelvin Estacio, DVM</h4>
                        <span>Veterinarian-Dau Branch<br/><br/>Studied College of Veterinary Medicine at Pampanga State Agricultural University</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="ui/assets/img/team/na.png" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Ata Manalese, DVM</h4>
                        <span>Veterinarian-Hensonville Branch<br/><br/>Studied College of Veterinary Medicine at Pampanga State Agricultural University</span>
                    </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="section-title">
                    <p>Assistant Veterinarians</p>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="ui/assets/img/team/va5.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Norren Cabrera</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="ui/assets/img/team/va1.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jose Abad</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="ui/assets/img/team/va3.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Kevin John Guiao</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="ui/assets/img/team/secsunset.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Selle Sto Domingo</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="ui/assets/img/team/va4.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jay-Ar Guzman</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="ui/assets/img/team/va6.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Ner Sto Domingo</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="ui/assets/img/team/va2.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jeron Villanueva</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="ui/assets/img/team/na.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Ronelle Reyes</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->
</main>
    
@endsection