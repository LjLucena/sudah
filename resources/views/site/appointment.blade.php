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

      <a href="/logout" class="get-started-btn scrollto">Logout</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Set Appointment</h2>
          <ol>
            <li><a href="/list/appointments">Appointment</a></li>
            <li>Set Appointment</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          @if(session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    </div>
                </div>
                @endif
          <form action="" method="post">
            @csrf
              <div class="row">
                  <div class="col-md-12">
                    <h3>Appointment Details</h3>
                      <div class="row">
                          <div class="col-md-12">
                              
                            Select Pet:
                            <select name="patient_id" id="" class="form-control" required>
                                <option value="">-- Select Pet --</option>
                                @foreach ($patients as $patient)
                                    <option value="{{$patient->id}}">{{$patient->name}}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            Select Branch:
                            <select name="branch_id" id="" class="form-control" required>
                                <option value="">-- Select Branch --</option>
                                @foreach ($branches as $branch)
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            Select Veterinarian:
                            <select name="vet_id" id="vet_data" class="form-control" onChange="CheckSlot()" required>
                                <option value="">-- Select Veterinarian --</option>
                                @foreach ($vets as $vet)
                                    <option value="{{$vet->id}}">{{$vet->UserProfile->first_name}} {{$vet->UserProfile->middle_name}} {{$vet->UserProfile->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-4">
                            Date of Appointment
                            <input type="date"  onChange="CheckSlot()" name="date_appointment" min='{{date('Y')}}-{{date('m')}}-{{(date('d')+1)<=9 ? '0'.date('d')+1 : date('d')+1}}' class="form-control" id="app_date" required>
                        </div>
                        <div class="col-md-4">
                            Time of Appointment
                            <select name="time_appointment" id="app_time" class="form-control" onChange="CheckSlot()">
                                <option value="">-- Selct Time --</option>
                                <option value="08:00AM - 11:00AM">Morning (08:00AM - 11:00AM)</option>
                                <option value="01:00PM - 04:00PM">Afternoon (01:00PM - 04:00PM)</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            Slot
                            <div id='slot'></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Reason
                          <textarea name="reason" placeholder="Enter Reason" class="form-control" required></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h3>Services</h3>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="checkbox" name="services[]" id="s1" value="1"> <label for="s1">Consultation (Php 100)</label><br />                       
                              <input type="checkbox" name="services[]" id="s2" value="2"> <label for="s2">Vaccination (Php 350)</label><br />                 
                              <input type="checkbox" name="services[]" id="s3" value="3"> <label for="s3">Deworming (Php 100)</label><br />         
                              <input type="checkbox" name="services[]" id="s4" value="4"> <label for="s4">Pet Grooming (Php 300)</label><br />   
                              <input type="checkbox" name="services[]" id="s5" value="5"> <label for="s5">Vet Dental Care</label><br />
                              <input type="checkbox" name="services[]" id="s6" value="6"> <label for="s6"> Test</label><br />
                            </div>
                            <div class="col-md-6">
                              <input type="checkbox" name="services[]" id="s7" value="7"> <label for="s7">Surgery</label><br />                     
                              <input type="checkbox" name="services[]" id="s8" value="8"> <label for="s8"> Confinement (Php 1200)</label><br />            
                              <input type="checkbox" name="services[]" id="s9" value="9"> <label for="s9"> X-Ray (Php 900)</label><br />              
                              <input type="checkbox" name="services[]" id="s10"value="10"> <label for="s10"> Pet Lodging</label><br />     
                              <input type="checkbox" name="services[]" id="s11"value="11"> <label for="s11"> Pet Wellness</label><br />
                            </div>
                          </div>                                    

                        </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <br>
                    <button class="btn btn-primary" id="appoint" disabled="disable" type="submit">Set Appointment</button> <span id="error" style="color:#F00"></span>
                </div>
            </div>
              </div>
            </div>
            
          </form>
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" >

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
  <script src="{{asset('ui/assets/vendor/glightbox/js/glightbox.min.js')}}"(></script>)
  <script src="{{asset('ui/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ui/assets/js/main.js')}}"></script>

  
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script>
    function CheckSlot(){
      var v = document.getElementById('vet_data').value;
      var d = document.getElementById('app_date').value;
      var t = document.getElementById('app_time').value;
      if(!(v=="" || d=="" || t=="")){
        // console.log('/slot/available/'+btoa(v)+'/'+btoa(d)+'/'+btoa(t));
        $("#slot").load('/slot/available/'+btoa(v)+'/'+btoa(d)+'/'+btoa(t));
        // console.log($("#slot").text());
        if($("#slot").html() == "" ){
          $("#appoint").removeAttr('disabled');
          $("#error").html('');
        }
        else if($("#slot").html() != "0" ){
          $("#appoint").attr('disabled','disabled');
          $("#error").html('<strong>Slot Not Avaliable</strong>');
        }
        else{
          $("#appoint").removeAttr('disabled');
          $("#error").html('');
        }
      }
      else{
        $("#slot").text("");
      } 
    }
  </script>
</body>

</html>