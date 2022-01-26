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
</p><p>
@if(session('fail'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            {{session('fail')}}
                        </div>
                    </div>
                </div>
                @endif
</p>
                
                <div class="row">
                    <div class="col-md-8 border-end">
                        <h2>Appointment Details for Pet: <b>{{$appointment->AppointmentPet->name}}</b></h2>
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Branch:</strong></td>
                                            <td>{{$appointment->AppointmentBranch->name}}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Vet:</strong></td>
                                            <td>{{$appointment->AppointmentVet->UserProfile->first_name}} {{$appointment->AppointmentVet->UserProfile->middle_name}} {{$appointment->AppointmentVet->UserProfile->last_name}} {{$appointment->AppointmentVet->UserProfile->suffix}}</td>
                                            <td></td>
                                          </tr>
                                        <tr>
                                            <td><strong>Date:</strong></td>
                                            <td>{{$appointment->date_appointment}}</td>
                                            <td class="text-center"><button class="btn btn-sm btn-secondary" onclick="showDateForm()">Change</button></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Time:</strong></td>
                                            <td>{{$appointment->time_appointment}}</td>
                                            <td class="text-center"><button class="btn btn-sm btn-secondary" onclick="showTimeForm({{$appointment->id}})">Change</button></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Reason:</strong></td>
                                            <td>{{$appointment->reason}}</td>
                                            <td class="text-center"><button class="btn btn-sm btn-secondary" onclick="showReasonForm()">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Services Requested:</strong></td>
                                            <td>
                                              @foreach ($services as $service)
                                                  {{$service->service}} @if($services->count() > 1) | @endif
                                              @endforeach
                                            </td>
                                            <td class="text-center"><button class="btn btn-sm btn-secondary" id="showServices" data-id="{{$services}}">Edit</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4" id="show">
                              <div class="row" id="changeDateForm">
                              <h4>Change Date of Appointment</h4>
                                  <form action="/edit/apptDate" method="post">
                                    @csrf
                                    <div class="col-md">
                                        <input type="hidden" name="branch_id" value="{{$appointment->branch_id}}">
                                        <input type="hidden" name="appt_id" value="{{$appointment->id}}">
                                        Date of Appointment
                                        <input type="date"  onchange="CheckAvailabilty(document.getElementById('app_date').value,{{$appointment->branch_id}})" name="date_appointment" min='<?php echo date("Y-m-d"); ?>' class="form-control" id="app_date" required>
                                    </div>
                                    <div class="col-md" id="showAvail">

                                    </div>
                                    
                                    <div class="col-md" id="showSlot">

                                    </div>
                                    <div class="col-md">
                                          <button type="submit" id="submitBtn" class="btn btn-sm btn-success mt-3 float-right">Save</button>
                                    </div>
                                  </form>
                              </div>
                              <div class="row" id="changeTimeForm">
                                  
                              </div>
                              <div class="row" id="changeReasonForm">
                                <h4>Update Reason</h4>
                                  <form action="/update/reason" method="post">
                                    @csrf 
                                    <input type="hidden" name="appt_id" value="{{$appointment->id}}">
                                    <label for="reason">Reason:</label>
                                    <input type="textarea" name="reason" class="form-control">
                                    <button type="submit" class="mt-3 btn btn-sm btn-success">Save</button>
                                  </form>
                              </div>
                              <div class="row" id="changeServicesForm">  
                                <h4>Update Services</h4>
                                <form action="/update/services" method="post">
                                  @csrf 
                                  <div class="col-md-6">
                                    <input type="hidden" name="appt_id" value="{{$appointment->id}}">
                                    <input type="checkbox" class="service1" name="services[]" id="s1" value="1"> <label for="s1">Consultation (Php 100)</label><br />                       
                                    <input type="checkbox" class="service2" name="services[]" id="s2" value="2"> <label for="s2">Vaccination (Php 350)</label><br />                 
                                    <input type="checkbox" class="service3" name="services[]" id="s3" value="3"> <label for="s3">Deworming (Php 100)</label><br />         
                                    <input type="checkbox" class="service4" name="services[]" id="s4" value="4"> <label for="s4">Pet Grooming (Php 300)</label><br />   
                                    <input type="checkbox" class="service5" name="services[]" id="s5" value="5"> <label for="s5">Vet Dental Care</label><br />             
                                    <input type="checkbox" class="service10" name="services[]" id="s10"value="10"> <label for="s10"> Pet Lodging</label><br />     
                                    <input type="checkbox" class="service11" name="services[]" id="s11"value="11"> <label for="s11"> Pet Wellness</label><br />
                                    <button type="submit" class="btn btn-sm btn-success mt-4" >Save</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                </div>  
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
      $(document).ready(function(){

        $('#changeDateForm').hide();
        $('#submitBtn').hide();
        $('#changeReasonForm').hide();
        $('#changeServicesForm').hide();

        $('#app_time').change(function(){
            var d = document.getElementById('app_date').value;
                var time = $('#app_time option:selected').val();
                if (time == "08:00AM - 12:00AM") {
                    var am = $('#amMax').val();
                    $('#slot').html('Slot:<input type="text" placeholder="'+am+'" class="form-control" disabled>');
                } else {
                    var pm = $('#pmMax').val();
                    $('#slot').html('Slot:<input type="text" placeholder="'+pm+'" class="form-control" disabled>');
                }
            });
        
            $('#showServices').click(function(){
              $('#changeDateForm').hide();
                $('#changeTimeForm').hide();
                $('#changeReasonForm').hide();
                $('#changeServicesForm').show();
                var services = $('#showServices').data('id');
                for (let index = 0; index < services.length; index++) {
                  var one = document.getElementById('s1');
                  var two = document.getElementById('s2');
                  var three = document.getElementById('s3');
                  var four = document.getElementById('s4');
                  var five = document.getElementById('s5');
                  var six = document.getElementById('s10');
                  var seven = document.getElementById('s11');
                  if(services[index]['id'] == 1) one.checked = true;
                  else if(services[index]['id'] == 2) two.checked = true;
                  else if(services[index]['id'] == 3) three.checked = true;
                  else if(services[index]['id'] == 4) four.checked = true;
                  else if(services[index]['id'] == 5) five.checked = true;
                  else if(services[index]['id'] == 10) six.checked = true;
                  else if(services[index]['id'] == 11) seven.checked = true;
                }
            });
       
            
      });

      function CheckAvailabilty(date,branch){
        $('#showAvail').load('/show/vet/'+btoa(date)+'/'+btoa(branch));
        //$('#showSlot').hide();
      }

      function showDateForm(){
        $('#changeTimeForm').hide();
        $('#changeReasonForm').hide();
        $('#changeServicesForm').hide();
        $('#changeDateForm').show();
      }

      function showTimeForm(id){
        $('#changeDateForm').hide();
        $('#changeReasonForm').hide();
        $('#changeServicesForm').hide();
        $('#changeTimeForm').show();
        $('#changeTimeForm').load('/edit/apptTime/'+id);
      }

      function showReasonForm(){
        $('#changeDateForm').hide();
        $('#changeTimeForm').hide();
        $('#changeServicesForm').hide();
        $('#changeReasonForm').show();
      }

      

      
    function showAvail(){
            var vet = $('#vet option:selected').val();
            var d = document.getElementById('app_date').value;
            var branch = $('#sched_branch').data('id');
            if (vet != null) {
              $('#showSlot').show();
              $('#showSlot').load('/show/slot/'+btoa(vet)+'/'+btoa(branch)+'/'+btoa(d));
            }
    }
        
  </script>
</body>

</html>