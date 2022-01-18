<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUDAH - Register</title>
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
  <link href="{{asset('ui/assets/css/styles.css')}}" rel="stylesheet">

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
          <li><a class="nav-link scrollto" href="{{route('index')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('index',['#about'])}}">About</a></li>
          <li><a class="nav-link scrollto " href="diagnostic_services">Services</a></li>
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
          <li><a class="nav-link scrollto active" href="register">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/login" class="get-started-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Registration</li>
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
          <form action="/add/new/account/1" method="post">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <input type="hidden" name="role_id" value='1'>
            <div class="row">
              <div class="col-md-12">
                <h3>Account Details</h3>
              </div>
            </div>
                <div class="row">
                  <div class="col-md-4">
                      <label for="u">Username</label>
                      <input type="text" name="u" id="u" class="form-control"  placeholder="Enter Username" required>
                  </div>
                  <div class="col-md-4">
                      <label for="p">Password</label>
                      <input type="password" name="p" id="p" class="form-control" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </div>
                  <div class="col-md-4">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control"  placeholder="Enter Email" required>
                  </div>
              </div>

                <div id="message">
                  <h6x>Password must contain the following:</h6>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
              
            <div class="row">
              <div class="col-md-12">
                <h3><br />Basic Infomation</h3>
              </div>
            </div>
              <div class="row">
                  <div class="col-md-3">
                      <label for="ln">Last Name</label>
                      <input type="text" name="ln" id="ln" class="form-control"  placeholder="Enter Last Name" required>
                  </div>
                  <div class="col-md-3">
                      <label for="fn">First Name</label>
                      <input type="text" name="fn" id="fn" class="form-control"  placeholder="Enter First Name" required>
                  </div>
                  <div class="col-md-3">
                      <label for="mn">Middle Name</label>
                      <input type="text" name="mn" id="mn" class="form-control"  placeholder="Enter Middle Name">
                  </div>
                  <div class="col-md-3">
                      <label for="s">Suffix</label>
                      <input type="text" name="s" id="s" class="form-control"  placeholder="Enter Suffix">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <label for="house">House Street</label>
                      <input type="text" name="house" id="house" class="form-control"  placeholder="Enter House Street" required>
                  </div>
                  <div class="col-md-3">
                      <label for="barangay">Barangay</label>
                      <input type="text" name="barangay" id="barangay" class="form-control"  placeholder="Enter Barangay" required>
                  </div>
                  <div class="col-md-3">
                      <label for="cm">City/Municipality</label>
                      <input type="text" name="cm" id="cm" class="form-control"  placeholder="Enter City/Municipality" required>
                  </div>
                  <div class="col-md-3">
                      <label for="province">Province</label>
                      <input type="text" name="province" id="province" class="form-control"  placeholder="Enter Province" required>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-6">
                      <label for="contact">Contact Info</label>
                      <input type="text" name="contact" id="contact" class="form-control number-only"  placeholder="Enter Contact Info" required>
                  </div>
                  <div class="col-md-6">
                      <label for="dob">Birth Date</label>
                      <input type="date" name="dob" id="dob" class="form-control"  placeholder="Enter Birthdate" max="<?php echo date("Y-m-d"); ?>" required>
                  </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <br>
                    <button class="btn btn-primary" type="submit">Register</button>
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
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SUDAH<span>.</span></h3>
              <p>
                <b>Main Branch:</b> <br>
                Friendship Highway, Cutcut, 2009 <br>
                Sunset, Angeles City<br><br>
                <strong>Phone:</strong> 09676894144<br>
                <strong>Email:</strong> sudahveterinary@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
                <a href="https://www.facebook.com/SudahVeterinaryClinicSunset" class="facebook"><i class="bx bxl-facebook"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('index')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('index',['#about'])}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('index',['#team'])}}">Team</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="diagnostic_services">Diagnostic Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="general_wellness_services">General Wellness</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="other_services">Surgery and Other Services</a></li>
            </ul>
          </div>

          <!--
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>-->

        </div>
      </div>
    </div>

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

<script>
  var myInput = document.getElementById("p");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number_only = document.getElementById("number");
  var length = document.getElementById("length");

  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }

  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }

  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
  function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }
  setInputFilter(document.getElementById("contact"), function(value) {
    if(value.length >= 12){
      return false;
    }
    return /^\d*$/.test(value); 
  });
  setInputFilter(document.getElementById("ln"), function(value) {
    return /^[a-z]*$/i.test(value);
  });
  setInputFilter(document.getElementById("mn"), function(value) {
    return /^[a-z]*$/i.test(value); 
  });

</script>