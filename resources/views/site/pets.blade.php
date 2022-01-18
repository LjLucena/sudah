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
          <h2>New Pets</h2>
          <ol>
            <li><a href="/list/pets">Pets</a></li>
            <li>New Pets</li>
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
                @if(session('info'))
                      <div class="row">
                          <div class="col-12">
                              <div class="alert alert-info">
                                  {{session('info')}}
                              </div>
                          </div>
                      </div>
                      @endif
          <form action="/new/pet" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-12">
                      <h3>Pet Inforamtion</h3>
                      <div class="row">
                          <div class="row">
                            <div class="col-md-6">
                              <label for="">Pet's Name</label>
                              <input type="text" name="name" id="" class="form-control" placeholder="Enter Pet Name" required>
                            </div>
                            <div class="col-md-6">
                              <label for="">Date of Birth</label>
                              <input type="date" name="bday" id="" max="{{date("Y-m-d")}}" class="form-control" required>
                            </div>
                          </div>
                  </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                          <label for="">Species</label>
                          <select class="form-control species_id" name="species_id" id="" required>
                            <option value="0" disabled="true" selected="true">-- Select Species --</option>
                              @foreach ($species as $item)
                                  <option value="{{$item->id}}">{{$item->species_name}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-4">
                          <label for="">Breed</label>
                          <select class="form-control breed_id" name="breed_id" id="" required>
                          <option value="0" disabled="true" selected="true">-- Select Breed --</option>
                              <!--@foreach ($breeds as $breed)
                                  <option value="{{$breed->id}}">{{$breed->breed_name}}</option>
                              @endforeach-->
                          </select>
                      </div>
                      <div class="col-md-4">
                          <label for="color_id">Color</label>
                          <select class="form-control" name="color_id" id="" required>
                              <option value="">-- Select Color --</option>
                              @foreach ($colors as $color)
                                  <option value="{{$color->id}}">{{$color->color_name}}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                          <label for="weight">Weight(kg)</label>
                          <input type="text" name="weight" id="" placeholder="Enter Weight" class="form-control" pattern="[0-9]+([\.,][0-9]+)?" step="0.01"
            title="This should be a number with up to 2 decimal places." required>
                      </div>
                      <div class="col-md-4">
                          <label for="">Gender</label>
                          <select class="form-control" name="gender" id="" required>
                            <option value="">-- Select Gender --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unkown">Unkown</option>
                          </select>
                      </div>
                      <div class="col-md-4">
                          <label for="">Image(JPG/JPEG/PNG/GIF only)</label>
                            <input type="file" name="image" id="" accept=".jpg,.jpeg,.png,.gif" placeholder="Enter Weight" class="form-control" required>
                      </div>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-md-12">
                    <br>
                    <button class="btn btn-primary" type="submit">Save</button>
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

  <!--Ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.species_id',function(){
			// console.log("hmm its change");

			var cat_id=$(this).val();
			// console.log(cat_id);
      
      var div=$('.breed_id');

			$.ajax({
				type:'get',
				url:'{!!URL::to('findBreed')!!}',
				data:{'id':cat_id},
				success:function(data){
          var op=" ";
					//console.log('success');

					//console.log(data);

					//console.log(data.length);
          op+='<option value="0" selected disabled>Choose Breed</option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].breed_name+'</option>';
          }
           
           div.html(" ");
				   div.append(op);
          },
				
				error:function(){

				}
			});
		});
	});
</script>


</body>

</html>