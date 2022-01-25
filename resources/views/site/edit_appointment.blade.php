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
          <li><a class="nav-link scrollto active" href="/list/appointments">Appointment</a></li>
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
          <h2>Edit Appointment</h2>
          <ol>
            <li><a href="/list/appointments">Appointment</a></li>
            <li>Edit Appointment</li>
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
                @if(session('fail'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            {{session('fail')}}
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col">
                            <div class="row">
                                    <h4>
                                        Pet Name: {{$appointment->AppointmentPet->name}}
                                    </h4>
                                <div class="col-md-6">
                                    <label for="branch">Branch:</label> 
                                    <select id="branch" onchange="seeForm()" class="form-control" required>
                                        <option value="{{$appointment->branch_id}}" selected="true">{{$appointment->AppointmentBranch->name}}</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="showForm">

                            </div>
                        
                            <div class="row" id="Form">
                            <form action="" method="post"> @csrf
                                
                            <div class="row" id="row1">
                                <div class="col-md">
                                    <input type="hidden" name="branch_id" value="{{$appointment->branch_id}}">
                                    Date of Appointment
                                    <input type="date"  onchange="CheckAvailabilty()" name="date_appointment" min='<?php echo date("Y-m-d"); ?>' value="{{$appointment->date_appointment}}" class="form-control" required>
                                </div>
                                <div class="col-md">
                                        Veterinarian:
                                        <select name="vet" id="vet" onchange="showAvail()" class="form-control" required>
                                        @if($appointment->VetName)
                                            <option value="{{$appointment->vet_id}}" selected="true">{{$appointment->VetName->UserProfile->first_name}} {{$appointment->VetName->UserProfile->middle_name}} {{$appointment->VetName->UserProfile->last_name}} {{$appointment->VetName->UserProfile->suffix}}</option>
                                        @endif
                                        </select>
                                </div>
                            </div>
                            <div class="row" id="row2">
                                @if($appointment->time_appointment == "08:00AM - 12:00AM")
                                    <div class="col-md-6">
                                        Time of Appointment
                                        <input type="hidden" name="sched" value="{{$slot->id}}">
                                        <select name="time_appointment" id="app_time" class="form-control" required>
                                            <option value="08:00AM - 12:00AM" selected="true">Morning (08:00AM - 11:00AM)</option>
                                            <option value="01:00PM - 05:00PM">Afternoon (01:00PM - 04:00PM)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" id="slot">
                                    
                                    </div>
                                @else
                                    <div class="col-md-6">
                                        Time of Appointment
                                        <select name="time_appointment" id="app_time" class="form-control" required>
                                            <option value="08:00AM - 12:00AM">Morning (08:00AM - 11:00AM)</option>
                                            <option value="01:00PM - 05:00PM" selected="true">Afternoon (01:00PM - 04:00PM)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" id="slot">
                                    
                                    </div>
                                @endif
                                <div class="col-md">
                                    Reason
                                    <textarea name="reason" id="reason" value="{{$appointment->reason}}" placeholder="{{$appointment->reason}}" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="row">  
                                <h3>Services</h3>
                                <div class="col-md-6">
                                <input type="checkbox" name="services[]" id="s1" value="1" Checked> <label for="s1">Consultation (Php 100)</label><br />                       
                                <input type="checkbox" name="services[]" id="s2" value="2"> <label for="s2">Vaccination (Php 350)</label><br />                 
                                <input type="checkbox" name="services[]" id="s3" value="3"> <label for="s3">Deworming (Php 100)</label><br />         
                                <input type="checkbox" name="services[]" id="s4" value="4"> <label for="s4">Pet Grooming (Php 300)</label><br />   
                                <input type="checkbox" name="services[]" id="s5" value="5"> <label for="s5">Vet Dental Care</label><br />             
                                <input type="checkbox" name="services[]" id="s10"value="10"> <label for="s10"> Pet Lodging</label><br />     
                                <input type="checkbox" name="services[]" id="s11"value="11"> <label for="s11"> Pet Wellness</label><br />
                                </div>
                            </div>


                        </form>

                            </div>
                    </div>
                </div>
          
        </p>
      </div>
    </section>

  </main><!-- End #main -->

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
    

    function seeForm(){
      var branch = document.getElementById('branch').value;
      $('#Form').remove();
      $('#showForm').load('/show/appointment/form/'+branch);
    }

    function CheckAvailabilty(){
      var branch = document.getElementById('branch_id').value;
      var d = document.getElementById('app_date').value;
      $('#showAvail').load('/show/avail/'+btoa(d)+'/'+btoa(branch));
      $('#showSlot').hide();
    }

    function showAvail(){
      var vetData = $('#vet option:selected').val();
            var d = document.getElementById('app_date').value;
            var branch = document.getElementById('branch').value;
            if (vetData != null) {
              $('#showSlot').show();
              $('#showSlot').load('/show/time/'+btoa(vetData)+'/'+btoa(branch)+'/'+btoa(d));
            } 
    }
        
  </script>
</body>

</html>