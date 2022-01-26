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
<!--section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    <div class="col-xl-6 col-lg-8">
        <h1>Pet Shop<span>.</span></h1>
        <h2>Treat-Love-Care your pet, visit our one-stop shop for your pet needs!</h2>
    </div>
    </div>
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
</div>
</section--><!-- End Hero -->

<main id="main">
<!-- Start Content -->
<!-- Open Content -->
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="ui/assets/img/products/kittycrunchpink3.jpg" alt="Card image cap" id="product-detail">
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
                                            <img class="card-img img-fluid" src="ui/assets/img/products/kittycrunchblue1.jpg" alt="Product Image 1">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="ui/assets/img/products/kittycrunchred1.jpg" alt="Product Image 2">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="ui/assets/img/products/kittycrunchpink1.jpg" alt="Product Image 3">
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
                    <h1 class="h2">KITTY CRUNCH 60g</h1>
                    <p>70php</p>
                    <br/><ul class="list-inline">
                        <li class="list-inline-item">
                            <h6><b>Cat Treats</b></h6>
                        </li>
                    </ul>

                    <h6><b>Description</b></h6>
                    <p>Kit cat kitty crunch are created by nutritionists who are cat lovers and are made with the goodness of carefully selected ingredients. Kitty crunch is produced to perfection for cats. With a range of 6 tasty flavors and 4 fun shapes, these irresistible crunchy bites are not only delicious, but help clean teeth too.
                        <br/><br/>Kit Cat Kitty Crunch are created by nutritionists who are cat lovers and are made with goodness of carefully selected ingredients.

KittyCrunch is produced to perfection for cats. With a range of tasty flavors and 4 fun shapes, these irresistible crunchy bites are not only delicious but help clean teeth too.
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6><b>Avaliable Flavor :</b></h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>Seafood/ Beef/ Tuna</strong></p>
                        </li>
                    </ul>

                    <h6><b>Guaranteed Analysis:</b></h6>
                    <ul class="list-unstyled pb-3">
                        <li>Crude Protein Min 30.0%</li>
                        <li>Crude Fat Min 15.0%</li>
                        <li>Crude Fiber Max 4.0%</li>
                        <li>Crude Ash Max 10.0%</li>
                        <li>Moisture Max 10.0%</li>
                        <li>Calorie : 204.6kcal/bag</li>
                    </ul>

                    <h6><b>Feeding Instructions</b></h6>
                    <ul>
                    <li>Feed 47grams per 2kg of body weight per day.</li>
                    <li>The amount fed can be adjusted according to the age, size and activity of your cat.</li>
                    <li>Remember to provide fresh water for your cat at all time.</li>
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
            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0" href="jerhigh">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0" href="monello" tabindex="-1">Next</a>
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