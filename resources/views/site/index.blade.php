@extends('layouts.site_ui')
@section('content')
 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="">Sudah<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="diagnostic_services">Services</a></li>
          <li><a class="nav-link scrollto" href="products">Products</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
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
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
          <h1>Sudah Veterinary<span>.</span></h1>
          <h2>From Large to Small We Give Quality Care to All.</h2>
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
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="ui/assets/img/blog6.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>ABOUT US</h3>
            <p class="fst-italic">
              Sudah Veterinary Clinic is committed to provide wellness, primary healthcare, medical and surgical diagnosis, treatment, and your one-stop shop for your pet needs.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> <b>Our Mission</b> <br>
                “Our unwavering commitment to improving the lives of our patient’s and helping each and every one of them enjoy their healthy years as possible. It is this effort that enables us to give the most effective, comprehensive care available.”</li>
              <li><i class="ri-check-double-line"></i> <b>Our Vision</b> <br>
                “Our Branches are clean, spacious and equipped for all of your pet’s veterinary care needs.”</li>
              <li><i class="ri-check-double-line"></i> <b>Our Story</b> <br>
                Sudah Vet is a veterinary clinic owned by Ms. Glenda David. The first was established in June 23, 2014 and it is located in Dau, Mabalacat, Pampanga. It has seven branches in total, and its main office is located in Angeles City. Back then, it was a mere grooming area and pet supplies, but as the demand of veterinary grows, licensed Veterinarians started to come by and catered to various animals and the services grew larger. It offers an affordable consultation fee for pet owners, and licensed veterinary doctors handle pets.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col pt-4 pt-lg-0 order-2 order-lg-1 content text-center" data-aos="fade-right" data-aos-delay="100">
            <h3>Clinic Hours</h3>
            <p class="fst-italic">
              Monday - Sunday: 8am to 7pm
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Clients Section ======= 
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="ui/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>< End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("ui/assets/img/blog7.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-home-smile"></i>
              <h4>Home Service</h4>
              <p>We care for you and value your safety in this time of pandemic. That is why we offers HOME SERVICE vaccination and deworming for your furbabies.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-heart-circle"></i>
              <h4>Vet Dental Care</h4>
              <p>Dental health is a very important part of your pet's overall health, and dental problems can cause, or be caused by, other health problems. Your pet's teeth and gums should be checked at least once a year by your veterinarian to check for early signs of a problem and to keep your pet's mouth healthy.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-book-open"></i>
              <h4>Pet Boarding & Lodging</h4>
              <p>Rather than merely housing your pet and making sure it gets the basic-food, water, and shelter-a pet boarding service ensures your pet is happy, active, and well-adjusted while you're away.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= --> 
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-message-alt-edit"></i></div>
              <h4><a href="diagnostic_services">Diagnostic Services</a></h4>
              <p>Diagnostic testing can identify problems your pet may be experiencing so that proper treatment can begin before a condition worsens.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-heart-square"></i></div>
              <h4><a href="general_wellness_services">General Wellness</a></h4>
              <p>Annual wellness exams evaluate your pets overall health, detect problems before they become serious, and keep them on track to live a long, healthy life.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bone"></i></div>
              <h4><a href="other_services">Surgery and Other Services</a></h4>
              <p>Surgeries are performed under anesthesia for various conditions. Our full-service hospitals offer a variety of outpatient surgeries for pets.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h6>EMERGENCY?</h6>
          <p> If your pet needs IMMEDIATE ATTENTION, Please contact us in our Emergency Hotlines.</p>
          <a class="cta-btn nav-link scrollto" href="#contact">Contact Us</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Gallery</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Service</li>
              <li data-filter=".filter-card">Pet</li>
              <li data-filter=".filter-web">Other</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="ui/assets/img/gallery/gal.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Magaling na ang may PARVO!</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="ui/assets/img/gallery/gal.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="ui/assets/img/gallery/blog1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>No bad hair day for Snow!</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="ui/assets/img/gallery/blog1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="ui/assets/img/gallery/blog3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Meet handsome Jaspher.</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="ui/assets/img/gallery/blog3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="ui/assets/img/gallery/blog4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sunday Grooming</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="ui/assets/img/gallery/blog4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="ui/assets/img/gallery/blog5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Now Open!!</h4>
                <p>HENSONVILLE BRANCH</p>
                <div class="portfolio-links">
                  <a href="ui/assets/img/gallery/blog5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="ui/assets/img/gallery/blog8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Emergency CS for today!</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="ui/assets/img/gallery/blog8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ui/assets/img/testimonials/irma.jpg" class="testimonial-img" alt="">
                <h3>Irma Pandong</h3>
                <h4>Client from Sunset, Angeles City</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I was worried when my cat lost so much. I am grateful that you were able to diagnosis her issue and start a treatment. I had no idea cats could have hyperactive thyroid! Thank you for being so thorough when explaining the various treatment options. This helped make my decision of choosing which treatment easier.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ui/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Pauline Valencia</h3>
                <h4>Client from Dau, Mabalacat City</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Thank you for all of the care you’ve provided for my dog, [dog’s name] over the years. I want to thank you for being there for me and him when he got sick. It was very sad and I appreciate the time you let me cry in the office.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ui/assets/img/testimonials/jud.jpg" class="testimonial-img" alt="">
                <h3>Jud Dizon</h3>
                <h4>Client from Hensonville, Angeles City</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I appreciate you and the office staff. Helping the stray mom cat and her kittens has been more involved than I ever thought possible. Thank you for giving us the stray cat discount to get them all tested for the bad cat viruses. I am so relieved that they are all okay!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ui/assets/img/testimonials/ghie.jpg" class="testimonial-img" alt="">
                <h3>Girlie Valencia</h3>
                <h4>Clienf from Magalang, Pampanga</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Thank you for figuring out what was wrong with Violet! She had been so itchy lately. The allergy medicine is working already and she seems much more comfortable.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ui/assets/img/testimonials/lj.jpg" class="testimonial-img" alt="">
                <h3>Lj Lucena</h3>
                <h4>Client from Bamban, Tarlac</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I want to let you know how much I appreciate the staff at the office. They are friendly and always take the time to answer my latest cat question. And they are very good about fitting in my cat at the last minute when they are sick.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Our Team</p>
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
                <span>Veterinarian-Sunset branch<br/><br/>Studied Doctor of Veterinary Medicine at University of the Philippines</span>
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
                <span>Veterinarian-Bamban branch<br/><br/>Doctor of Veterinary Medicine at Cagayan State University</span>
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
                <span>Veterinarian-Magalang branch<br/><br/>Studied College of Veterinary Medicine at Pampanga State Agricultural University</span>
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
                <span>Veterinarian-San Fernando branch<br/><br/>Studied Doctor of Veterinary Medicine at Cagayan State University</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 ">
          <div class="col d-flex justify-content-center">
            <a class="serv-btn btn-lg" href="teams">View Team</a>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/d/embed?mid=1KOe-WbrcmBv3OR3CaqmgkZWnwxIC8DCz" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

            <div class="info">

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Locations:</h4>
<br>
                <div class="row">
                  <div class="col">
                    <h5>Sunset, Angeles City</h5>
                    <p>Friendship Highway, Cutcut, 2009</p>
                    <p>09676894144</p>
                  </div>
  
                  <div class="col">
                    <h5>San Fernando, Pampanga</h5>
                    <p>San Isidro, San Fernando City</p>
                    <p>09653000490</p>
                  </div>
  
                  <div class="col">
                    <h5>Hensonville, Angeles City</h5>
                    <p>#6 Richtofen St., Hensonville Brgy. Malabanias</p>
                    <p>09656378480</p>
                  </div>
  
                  <div class="col">
                    <h5>Bamban, Tarlac</h5>
                    <p>MacArthur Highway, Anupul Bamban</p>
                    <p>09951398681</p>
                  </div>

                  <div class="col">
                    <h5>Capas, Tarlac</h5>
                    <p>Villa San Jose Subdivision, Cutcut 1</p>
                    <p>09676014071</p>
                  </div>

                <div class="col">
                  <h5>Dau, Mabalacat City</h5>
                  <p>717 Lakandula St., Dau, Mabalacat 2010</p>
                  <p></p>
                </div>
  
                <div class="col">
                  <h5>Magalang, Pampanga</h5>
                  <p>GR Bank Bldg., San Nicolas 1, Magalang</p>
                  <p>09633869717</p>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col">

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Emergency Hotlines:</h4>
                  <p>09676894144</p>
                </div>

              </div>

              <div class="col">

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><a href="mailto:sudahveterinary@gmail.com">sudahveterinary@gmail.com</a><p>
                </div>

              </div>

            </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection