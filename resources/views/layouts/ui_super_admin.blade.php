<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sudah | @yield('htitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        #content {
            background-color: #ffffff;
            opacity: 0.8;
            background-size: 6px 6px;
            background-image: url("ui/assets/img/paws.jpg");
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
        {{-- <div class="col-md-2 d-md-none d-md-block"  style="border-right:1px solid #CCC;">
            <nav class="nav flex-column" style="margin-top:60px">
                <a class="nav-link active" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </nav>
        </div>
        <div class="col-md-10">2</div> --}}
        <div class="col-sm-2 d-none d-lg-block " style="background-color:#383838; border-right:1px solid #CCC;">
            <div style="margin-top:70px">
                

                <nav class="nav flex-column">
                    
                    <a class="nav-link nav-header" ><strong>Appointments</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'portal/branch' ?  'active' : ''}}" href="/portal/branch">List</a>
                    
                    <a class="nav-link nav-header" ><strong>Branch Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'branches' ?  'active' : ''}}" href="/manage/branches">Branch</a>
                    <a class="nav-link {{Request::path() == 'patient' ?  'active' : ''}}" href="/manage/patient">Patients</a>
                    <a class="nav-link {{Request::path() == 'patient' ?  'active' : ''}}" href="/manage/patient">Inventory</a>

                    <a class="nav-link nav-header" ><strong>Reports</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'patients' ?  'active' : ''}}" href="/patients">Appointment Reports</a>

                  
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
</html>