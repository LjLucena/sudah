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
<!-- section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    <div class="col-xl-6 col-lg-8">
        <h1>Pet Shop<span>.</span></h1>
        <h2>Treat-Love-Care your pet, visit our one-stop shop for your pet needs!</h2>
    </div>
    </div>
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
</div>
</section><End Hero -->

<main id="main">
<!-- Start Content -->
<!-- Open Content -->
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="ui/assets/img/products/royalcaninpersianAdult10kg-1.jpg" alt="Card image cap" id="product-detail">
                </div>
                <div class="row">
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-dark bi-chevron-left"></i>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                    <!--End Controls-->
                    <!--Start Carousel Wrapper-->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <div class="carousel-inner product-links-wap" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="ui/assets/img/products/royalcaninpersianAdult10kg-1.jpg" alt="Product Image 1">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="ui/assets/img/products/royalcaninpersianAdult10kg-2.jpg" alt="Product Image 2">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="ui/assets/img/products/royalcaninpersianAdult10kg-3.jpg" alt="Product Image 3">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Carousel Wrapper-->
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="next">
                        <i class="text-dark bi-chevron-right"></i>
                        <span class="sr-only"></span>
                    </a>
                </div>
                <!--End Controls-->
            </div>
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">Royal Canin Small Puppy 10kg</h1>
                    <p>5,090php</p>
                    <br/>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6><b>Cat Food</b></h6>
                        </li>
                    </ul>

                    <h6><b>Description</b></h6>
                    
                    <p>
                    Royal Canin Adult Persian Dry Cat Food is a breed-specific diet for Persian pure breeds. Specialized kibble allows them to easily pick up, chew, and crunch away tartar buildup. Amino acids, vitamins, and omega-6 and omega-3 fatty acids promote healthy skin and a healthy coat. A complex blend of fibers helps control hairballs. And highly digestible proteins and prebiotics promote digestive health.
                        <br/><br/><h6><b>FORMULATED FOR PUREBRED PERSIAN CATS:</b></h6>
                        Royal Canin Persian Adult Cat Food is formulated to meet the nutritional needs of purebred Persian cats 1 year and older
                        <br/><br/><strong>SKIN AND COAT:</strong> Breed-specific nutrients promote skin and coat health, helping to keep a Persian's long hair soft and shiny
                        <br/><br/><strong>HAIRBALL MAINTENANCE:</strong> A complex blend of fibers to help cats pass ingested hair and reduce hairball formation
                        <br/><br/><strong>DIGESTIVE HEALTH:</strong> Highly digestible proteins and prebiotics help maintain healthy digestion
                        <br/><br/><strong>SPECIALIZED KIBBLE:</strong> Unique kibble is designed for the shortened jaw of a Persian cat and encourages chewing to help with oral care
                    </p>

                    <h6><b>Guaranteed Analysis:</b></h6>
                    <ul class="list-unstyled pb-3">
                        <li>Crude Protein (min.) 28.0%</li>
                        <li>Crude Fat (min.) 20.0%</li>
                        <li>Crude Fiber (max.) 6.0%</li>
                        <li>Moisture (max.) 8.0%</li>
                        <li>Omega-6 fatty acids* (min.) 2.7%</li>
                        <li>Omega-3 fatty acids* (min.) 0.49%</li>
                    </ul>

                    
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- Close Content -->

<div div="row">
    <ul class="pagination pagination-lg justify-content-end">
        <li class="page-item">
            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0" href="royal_kitten">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0" href="carrier" tabindex="-1">Next</a>
        </li>
    </ul>
</div>

<!-- Start Script-->
<script src="ui/assets/js/jquery-1.11.0.min.js"></script>
    <script src="ui/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="ui/assets/js/bootstrap.bundle.min.js"></script>
    <script src="ui/assets/js/templatemo.js"></script>
    <script src="ui/assets/js/custom.js"></script>
    <!-- End Script -->

<!-- Start Slider Script -->
<script src="ui/assets/js/slick.min.js"></script>
<script>
$('#carousel-related-product').slick({
infinite: true,
arrows: false,
slidesToShow: 4,
slidesToScroll: 3,
dots: true,
responsive: [{
    breakpoint: 1024,
    settings: {
        slidesToShow: 3,
        slidesToScroll: 3
    }
},
{
    breakpoint: 600,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 3
    }
},
{
    breakpoint: 480,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 3
    }
}
]
});
</script>

@endsection