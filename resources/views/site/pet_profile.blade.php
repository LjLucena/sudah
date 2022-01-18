<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUDAH - Pet Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('ui/assets/img/logo.jpg')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ui/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('ui/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">SUDAH<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/list/appointments">Appointment</a></li>
          <li><a class="nav-link scrollto" href="/list/pets">Pets Section</a></li>
          <li><a class="nav-link scrollto" href="/my-account">My Account</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/login" class="get-started-btn scrollto">Logout</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pet Profile</h2>
          <ol>
            <li><a href="/list/pets ">List</a></li>
            <li>Pet Profile</li>
            <li>{{$pet->name}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
    
          @if(session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-3">

                        <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/'.$pet->image)}}" class="card-img-top"  />
                            <div class="card-body">
                              <h5 class="card-title"><strong>Name:</strong>{{$pet->name}}</h5>
                            </div>
                          </div>
                          <br />
                    </div>
                    <div class="col-md-9">
                        <h2>Pet Information</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Species:</strong></td>
                                            <td>{{$pet->pet_breed->pet_species->species_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Breed:</strong></td>
                                            <td>{{$pet->pet_breed->breed_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Color:</strong></td>
                                            <td>{{$pet->pet_color->color_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Weight:</strong></td>
                                            <td>{{$pet->weight}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date of Birth</strong></td>
                                            <td>{{$pet->bday}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                              <a href="/edit/pet/{{base64_encode($pet->id)}}" class="btn btn-primary">Edit Pet</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                      
                        <h4>Medical Record</h4>  
                        <table class="table">
                        <thead>
                            <tr>
                            <th>Appointment Schedule</th>
                            <th>Assessment Completion</th>
                            <th>Assessment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($med_records as $med_record)            
                            <tr>
                            <td>{{$med_record->appointment_details->date_appointment}} {{$med_record->appointment_details->time_appointment}}</td>
                            <td>{{$med_record->created_at->format("Y-m-d h:iA")}}</td>
                            <td width='50%'>{{$med_record->assessment}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>       
                    </div>
                </div>
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="fixed-bottom">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MCC</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('ui/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ui/assets/js/main.js')}}"></script>

</body>

</html>