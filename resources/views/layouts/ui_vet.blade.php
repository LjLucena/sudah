<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sudah | @yield('htitle')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('ui/assets/css/dataTables.bootstrap.min.css')}}">
    <style>
        #content {
            background-color: #ffffff;
            opacity: 0.8;
            background-size: 6px 6px;
            background-image: repeating-linear-gradient(45deg, #e5e5e5 0, #e5e5e5 0.6000000000000001px, #ffffff 0, #ffffff 50%);
        /* height: 100vh; */
        }
        .nav-header{
            text-transform: uppercase;
            border-top: #ccc 1px dotted;
            border-bottom: #ccc 1px dotted;
            color:#FFF;
        }
        .nav-link{
            color: #FFF;
        }
       .active{
            color:#09F !important;
            /* text-decoration: underline; */
        }

            /* The message box is shown when the user clicks on the password field */
        #message {
        display:none;
        width: 400px;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
        }

        #message p {
        padding: 10px 35px;
        font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
        color: green;
        }

        .valid:before {
        position: relative;
        left: -35px;
        content: "✓";
        }

        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid {
        color: red;
        }

        .invalid:before {
        position: relative;
        left: -35px;
        content: "X";
        }
    </style>
    
</head>
<body>

            <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light" style="box-shadow: 0 0 5px #CCC;">
                <a class="navbar-brand" href="#">SUDAH | {{strtoupper(Auth::user()->UserBranch->name)}} BRANCH</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                @php
                    $role_data = DB::table('roles')->find(Auth::user()->role_id);
                @endphp
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    {{-- <a class="nav-link active" href="#">Active</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
                </div>
                </div>{{$role_data->role}} | <a href="" class="nav-link text-black" style="color:black !important;" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                
                document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </nav>


    <div class="row" style="width:100%;height: 100vh;">
        <div class="col-sm-2 d-none d-lg-block " style="background-color:#383838; border-right:1px solid #CCC;">
            <div style="margin-top:70px">
                

                <nav class="nav flex-column">
                    
                    <a class="nav-link nav-header" href="/portal/vet"><strong>Appointments</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'portal/vet' ?  'active' : ''}}" href="/portal/vet">Calendar</a>
                    
                    <a class="nav-link nav-header" href=""><strong>Patient</strong></a>
                    <a class="nav-link {{Request::path() == 'patient' ?  'active' : ''}}" href="/patient">Patients</a>

                    <a class="nav-link nav-header" ><strong>My Account</strong></a>
                    <a class="nav-link {{Request::path() == 'my-account' ?  'active' : ''}}" href="/my-account">View account</a>

                  </nav>
            </div>
        </div>
        <div class="col-sm-10"  id="content">
            <div style="margin-top:100px;padding-left:5px;" >
                <div class="row">
                    <div class="col-12">
                        <div style="border-bottom:1px solid #000;padding-bottom:5px;text-align:right;z-index:-9999;">
                            @yield('panel-option')
                        </div>
                        <h3 class="panel-title"  style="margin-top:-41px;width: 30% !important;">
                            <strong>
                                @yield('panel-title')
                            </strong>
                        </h3>
                    </div>
                </div>
                @if(session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    </div>
                </div>
                @endif
                @yield('content')

            </div>
        </div>
    </div>


    @yield('modal')

  
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
          $('#table').DataTable({
          });
        });
</script>
</html>