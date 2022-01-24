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
          <li><a class="nav-link scrollto" href="diagnostic_services">Services</a></li>
          <li><a class="nav-link scrollto active" href="products">Products</a></li>
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
        <h1>Pet Shop<span>.</span></h1>
        <h2>Treat-Love-Care your pet, visit our one-stop shop for your pet needs!</h2>
    </div>
    </div>
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
</div>
</section><!-- End Hero -->

<main id="main">
<!-- ======= Products Page ======= -->
<section id="categoryWomen">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Shop By Category</h5>
            </div>
            <div class="col-12">
              <nav>
                <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="true">For Women</button>
                  <button class="nav-link" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">For Men</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentWomen">
                      <div class="tab-pane fade" id="pills-dresses" role="tabpanel" aria-labelledby="pills-dresses-tab">
                        <div class="carousel slide" id="carouselCategoryDresses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/jerhighred1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/jerhighviolet1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/jerhighyellow1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/kittycrunchblue1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/kittycrunchpink1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/kittycrunchred1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/kittycrunchyellow1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/Monello2.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item active" data-bs-interval="10000">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="ui/assets/img/products/Monello7kg-1.jpg" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              <div class="carousel-item active" data-bs-interval="10000">
                              </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endsection