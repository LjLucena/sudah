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
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
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
          <h2>Appointments</h2>
          <ol>
            <li><a href="/list/appointments">Appointment</a></li>
            <li>List | <a href="/set/appointment"><button class="btn btn-primary btn-sm"> Set Appointment </button></a></li>
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
          <table class="table">
            <thead>
              <tr style="text-transform: uppercase">
                <th>branch Name</th>
                <th>vet Name</th>
                <th>appointment date and time</th>
                <th>pet</th>
                <th>status</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($appointments as $appointment)
                <tr>
                  <td>{{$appointment->AppointmentBranch->name}}</td>
                  <td>
                    @if($appointment->AppointmentVet)
                      {{$appointment->AppointmentVet->UserProfile->first_name}} {{$appointment->AppointmentVet->UserProfile->middle_name}} {{$appointment->AppointmentVet->UserProfile->last_name}}
                    @endif
                  </td>
                  <td>{{$appointment->date_appointment}} {{$appointment->time_appointment}}</td>
                  <td>{{$appointment->AppointmentPet->name}}</td>
                  <td>{{$appointment->status}}</td>
                  <td width="10%">
                      <a href="" class="btn btn-primary btn-sm" data-id="{{$appointment->id}}" data-services="<?=json_encode($appointment->services)?>" data-status="{{$appointment->status}}" data-pet="{{$appointment->AppointmentPet->name}}" data-toggle="modal"  data-target="#appDetails">View</a>
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>
        </p>
      </div>
    </section>

    
  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <div class="modal fade" id="appDetails" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id=""></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
  </div>
</body>
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
  <script src="{{asset('js/app.js')}}"></script>
  <script>
    $(document).ready(function(){
      $('#appDetails').on('shown.bs.modal', function (event) {
              
            var data_id =$(event.relatedTarget).data('id');
            var status =$(event.relatedTarget).data('status');
            var pet =$(event.relatedTarget).data('pet');
            var modal = $(this);
            modal.find('.modal-title').text('Appointment Details for: '+pet);
            modal.find('.modal-body').load('/view/appt/'+data_id);
            if (status == 'Approved') {
              modal.find('.modal-footer').html('<a href="/cancel/appt/'+data_id+'" class="btn btn-md btn-danger">Cancel Appointment?</a>'+
                                                '<button class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>'
              );
            } else {
              modal.find('.modal-footer').html('<a href="/edit/appt/'+btoa(data_id)+'" class="btn btn-md btn-primary">Edit</a>'+
                                                '<a href="/cancel/appt/'+data_id+'" class="btn btn-md btn-danger">Cancel Appointment?</a>'+
                                                '<button class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>'
              );
            }
            //modal.find('.modal-footer').html('<a href="/appointment/'+data_id+'" class="btn btn-md btn-danger">Cancel</a>');
            //modal.find('.modal-footer').html('<a href="/appointment/'+data_id+'" class="btn btn-md btn-danger">Cancel</a>');
           // modal.find('.modal-body input').val(recipient)
        });
    });
  </script>
</html>