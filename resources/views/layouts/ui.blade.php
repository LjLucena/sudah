<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sudah | @yield('htitle')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('ui/assets/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>  -->
    <style>
        #content {
            background-color: #ffffff;
            opacity: 0.8;
            background-size: 6px 6px;
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
        .pagination{
            float:right;
        }
    </style>
    
</head>
<body>

            <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light" style="box-shadow: 0 0 5px #CCC;">
                <a class="navbar-brand" href="#">Sudah Appointment   System</a>
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
                <nav class="nav flex-column" style="margin-top:60px;">
                    
                    <a class="nav-link nav-header" ><strong>User Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'accounts/vet' ?  'active' : ''}}" href="/accounts/vet">Vet</a>
                    <a class="nav-link {{Request::path() == 'accounts/secretary' ?  'active' : ''}}" href="/accounts/secretary">Secretary</a>
                    <a class="nav-link {{Request::path() == 'accounts/client' ?  'active' : ''}}" href="/accounts/client">Client</a>

                    <a class="nav-link nav-header" ><strong>Schedule Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'schedules' ?  'active' : ''}}" href="/schedules">Schedules</a>

                    <a class="nav-link nav-header" ><strong>Branch Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'branches' ?  'active' : ''}}" href="/branches">Branch</a>
                    <a class="nav-link {{Request::path() == 'patient' ?  'active' : ''}}" href="/patient">Patient</a>

                    <a class="nav-link nav-header" ><strong>Inventory Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'inventory' ?  'active' : ''}}" href="/inventory">Inventory</a>

                    <a class="nav-link nav-header" ><strong>File Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'breed' ?  'active' : ''}}" href="/breed">Breed</a>
                    <a class="nav-link {{Request::path() == 'species' ?  'active' : ''}}" href="/species">Species</a>
                    <a class="nav-link {{Request::path() == 'color' ?  'active' : ''}}" href="/color">Color</a>

                    
                    <a class="nav-link nav-header" ><strong>Reports Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'reports' ?  'active' : ''}}" href="/reports">Reports</a>

                  </nav>
            </div>
        </div>
        <div class="col-sm-10"  id="content">
            <div style="margin-top:80px;padding-left:5px;" >
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
@yield('script')

<script src="{{asset('js/app.js')}}"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>-->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(document).ready(function() {
          $('#table').DataTable({
          });

          $('#exampleModal').on('shown.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var data_fn =$(event.relatedTarget).data('fn');
            var data_ln =$(event.relatedTarget).data('ln');
            var modal = $(this);
            modal.find('.modal-title').text('Deactivate');
            modal.find('.modal-body').text('Are you sure to deactivate '+data_fn+' '+data_ln+'?');
            modal.find('.modal-footer').html('<a href="/archive/'+data_id+'" class="btn btn-md btn-danger">Yes</a>');
           // modal.find('.modal-body input').val(recipient)
        });

        $('#activate').on('shown.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var data_fn =$(event.relatedTarget).data('fn');
            var data_ln =$(event.relatedTarget).data('ln');
            console.log(data_id);
            var modal = $(this);
            modal.find('.modal-title').text('Activate');
            modal.find('.modal-body').text('Are you sure to activate '+data_fn+' '+data_ln+' account?');
            modal.find('.modal-footer').html('<a href="/activate/'+data_id+'" class="btn btn-md btn-danger">Yes</a>');
           // modal.find('.modal-body input').val(recipient)
        });

         /* $('#datepicker').datepicker({
            multidate: true,
            dateFormat: 'yy-mm-dd',            
            startDate: new Date()
            });*/

            //$('input[name="dates"]').daterangepicker();

            var start = moment().subtract(29, 'days');
            var end = moment();

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 2; //January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
            dd = '0' + dd;
            }

            if (mm < 10) {
            mm = '0' + mm;
            } 
        
            today = yyyy + '-' + mm + '-' + dd;

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'January' : [],
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
            });
</script>

</html>