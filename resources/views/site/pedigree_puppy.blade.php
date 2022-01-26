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
</section>< End Hero -->

<main id="main">
<!-- Start Content -->
<!-- Open Content -->
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="ui/assets/img/products/pedigreepuppy3kg-1.jpg" alt="Card image cap" id="product-detail">
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
                                            <img class="card-img img-fluid" src="ui/assets/img/products/pedigreepuppy3kg-2.jpg" alt="Product Image 1">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="ui/assets/img/products/pedigreepuppy3kg-3.jpg" alt="Product Image 2">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="ui/assets/img/products/pedigreepuppy3kg-1.jpg" alt="Product Image 3">
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
                    <h1 class="h2">Pedigree Puppy Chicken, Egg and Milk 3kg</h1>
                    <p>510php</p>
                    <br/><ul class="list-inline">
                        <li class="list-inline-item">
                            <h6><b>Dog Food</b></h6>
                        </li>
                    </ul>

                    <h6><b>Description</b></h6>
                    <p>The immunity system from mother’s milk is the best armor for puppies to help them grow up with proper physical and cognitive development. Pedigree puppy is the right choice after mother’s milk for puppies, contains Vitamin E, Protein, Calcium and Phosphorus which help strengthen his immune system, support strong teeth and bones plus DHA and Choline combination essential to nourish his brain. Pedigree puppy helps him grow strong and lets him enjoy all his puppy adventures.</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6><b>Avaliable Flavor :</b></h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>Chicken, Egg and Milk</strong></p>
                        </li>
                    </ul>

                    <h6><b>Guaranteed Analysis:</b></h6>
                    <ul class="list-unstyled pb-3">
                        <li>Crude protein 26% min</li>
                        <li>Crude fat 12% min</li>
                        <li>Crude fiber 5% max</li>
                        <li>Moisture 12%max</li>
                    </ul>

                    <h6><b>Feeding Guide</b></h6>
                    <ul>
                        <li>Toy dogs 3mos. (15-115g/day), 3-6mos. (35-130g/day), 6-9mos. (40-130g/day), 9-12mos. change to pedigree adult food</li>
                        <li>Small dogs 3mos. (50-195g/day), 3-6mos. (115-220g/day), 6-9mos. (130-220g/day).</li>
                        <li>Medium dogs 3mos. (90-375g/day), 3-6mos. (195-440g/day), 6-9mos. (220-440g/day), 9-12mos. (220-430g/day).</li>
                        <li>Large dogs 3mos. (150-550g/day), 3-6mos. (375-731g/day), 6-9mos. (440-735g/day), 9-12mos. (440-740g/day), 12-18mos. (430-695g/day).</li>
                        <li>You can increase or decrease the daily amount according to your dog’s activity level.</li>
                        <br/><br/>
                        <p>Always ensure fresh clean water is available.</p>
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
            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0" href="pedigree_adult">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0" href="royal_puppy" tabindex="-1">Next</a>
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