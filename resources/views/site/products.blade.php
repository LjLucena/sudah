@extends('layouts.site_ui')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title>Zay Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="ui/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="ui/assets/img/favicon.ico">

    <link rel="stylesheet" href="ui/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="ui/assets/css/templatemo.css"-->

  
</head>

<body>
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
<!-- Start Content -->
<div class="container py-5">
<div class="row">
        <!--div class="col-lg-3">
            <div class="input-group">
                <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                <div class="input-group-text">
                    <i class="fa fa-bw fa-search"></i>
                </div>
            </div>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h5 text-decoration-none" href="products">
                        Food and Treats
                        <i class="bi bi-fw bi-chevron-circle-down mt-1"></i>
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h5 text-decoration-none" href="products_health">
                    Pet Health and Wellness
                        <i class="pull-right bi bi-fw bi-chevron-circle-down mt-1"></i>
                    </a>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h5 text-decoration-none" href="products_others">
                    Accessories and Others
                        <i class="pull-right bi bi-fw bi-chevron-circle-down mt-1"></i>
                    </a>
                </li>
            </ul>
        </div-->

        <div class="col-lg">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/jerhighred1.jpg">
                        </div>
                        <div class="card-body">
                            <a href="jerhigh" class="h4 text-decoration-none">Jerhigh Strawberry</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li> 70g</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">90php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/kittycrunchpink3.jpg">
                        </div>
                        <div class="card-body">
                            <a href="kittycrunch" class="h4 text-decoration-none">KittyCrunch</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li> 60g</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">70php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/monello7kg-1.jpg">
                        </div>
                        <div class="card-body">
                            <a href="monello" class="h4 text-decoration-none">Monello Cat</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li> 1kg</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">160php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/pedigreeadult3kg-1.jpg">
 
                        </div>
                        <div class="card-body">
                            <a href="pedigree_adult" class="h4 text-decoration-none">Pedigree Adult</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>3kg</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">510php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/pedigreepuppy3kg-1.jpg">
 
                        </div>
                        <div class="card-body">
                            <a href="pedigree_puppy" class="h4 text-decoration-none">Pedigree Puppy</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>3kg</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">510php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/royalpuppy1.jpg">
 
                        </div>
                        <div class="card-body">
                            <a href="royal_puppy" class="h4 text-decoration-none">Royal Canin Puppy </a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>10kg</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">821php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/royalcaningreenadult10kg-1.jpg">
 
                        </div>
                        <div class="card-body">
                            <a href="royal_mini" class="h4 text-decoration-none">Royal Canin Mini</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>85g</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">615php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/royalcaninpersiakitty10kg-1.jpg">
 
                        </div>
                        <div class="card-body">
                            <a href="royal_kitten" class="h4 text-decoration-none">Royal Canin Kitten</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>10kg</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">5,090php</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="ui/assets/img/products/royalcaninpersianAdult10kg-1.jpg">
 
                        </div>
                        <div class="card-body">
                            <a href="royal_adult" class="h4 text-decoration-none">Royal Canin Adult</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>10kg</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                             
                            <p class="text-center mb-0">5,090php</p>
                        </div>
                    </div>
                </div>
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="products" tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="products_others">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="products_health">3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->

</body>

    <!-- Start Script-->
    <script src="ui/assets/js/jquery-1.11.0.min.js"></script>
    <script src="ui/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="ui/assets/js/bootstrap.bundle.min.js"></script>
    <script src="ui/assets/js/templatemo.js"></script>
    <script src="ui/assets/js/custom.js"></script>
    <!-- End Script -->
@endsection