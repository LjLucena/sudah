<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sudah | @yield('htitle')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"><!--
    <link rel="stylesheet" href="{{asset('ui/assets/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <style>
        #content {
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
        .dataTables_wrapper .dt-buttons {
            float:right;
            }
    </style>
    
</head>
<body>

    <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light" style="box-shadow: 0 0 5px #CCC;">
        <a class="navbar-brand" href="#">Sudah Veterinary</a>
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
                    
                    <a class="nav-link nav-header" ><strong>Logs Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'userlog' ?  'active' : ''}}" href="/userlog">User Logs</a>
                    <a class="nav-link {{Request::path() == 'activity_log' ?  'active' : ''}}" href="/activity_log">Activity Logs</a>

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
                        
                        <h3 class="panel-title"  style="margin-top:-41px;width: 50% !important;">
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

        

<script>
    function deactivate(id,fn,ln){
            var modal = $('#exampleModal');
            modal.find('.modal-title').text('Deactivate?');
            modal.find('.modal-body').text('Account name: '+fn+' '+ln);
            modal.find('.modal-footer').html('<a href="/archive/'+id+'" class="btn btn-md btn-danger">Yes</a>');
    }

    function activate(id,fn,ln){
            var modal = $('#activate');
            modal.find('.modal-title').text('Activate');
            modal.find('.modal-body').text('Account name: '+fn+' '+ln);
            modal.find('.modal-footer').html('<a href="/activate/'+id+'" class="btn btn-md btn-danger">Yes</a>');
    }

    function addStock(id){
            var modal = $('#addStock');
            modal.find('.modal-title').text('Add Product Quantity');
            modal.find('.modal-body').html('<form action="/addstock/inventory"  method="post"> @csrf <input type="hidden" name="id" value="'+id+'">'+
                                            '<label>Product Quantity:</label>'+
                                            '<input class="form-control" type="number" name="qty" required>'+
                                            '<button type="submit" class="btn btn-sm btn-success mt-3 float-right">Save</button></form>');
    }

    function actProduct(id,name){
            var modal = $('#actProduct');
            modal.find('.modal-title').text('Activate Product?');
            modal.find('.modal-body').text('Product name: '+name);
            modal.find('.modal-footer').html('<a href="/activate/inventory/'+id+'" class="btn btn-md btn-danger">Yes</a>');
    }

    function archiveProduct(id, name){
            var modal = $('#archiveProduct');
            modal.find('.modal-title').text('Archive Product?');
            modal.find('.modal-body').text('Product name: '+name);
            modal.find('.modal-footer').html('<a href="/archive/inventory/'+id+'" class="btn btn-md btn-danger">Yes</a>');
    }

    $(document).ready(function() {
          $('#table').DataTable({
                
          });
          $('#printable').DataTable({
                dom: 'lBfrtip',
                buttons: [{
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',
                    className: 'exportExcel',
                    exportOptions: { modifier: { page: 'all'},columns:  ':not(.noExport)' }
                },
                {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'Pdf',
                    className: 'exportPdf',
                    exportOptions: { modifier: { page: 'all'},columns:  ':not(.noExport)' }
                }],
                initComplete: function () {
                            var btns = $('.dt-button');
                            btns.removeClass('dt-button');

                        }
          });

          $(".buttons-html5").addClass("ml-1 btn btn-sm");
          $(".buttons-excel").addClass("btn-outline-secondary text-success");
          $(".buttons-pdf").addClass("btn-outline-secondary text-danger");

           // var disablethese = //json_encode($disableDate);
            
            var disableDates = ["2022-01-26", "2022-01-27"];
          $('#datepicker').datepicker({
            multidate: true,
            format: 'yyyy-mm-dd',         
            startDate: new Date(),
            datesDisabled: disableDates,
            
           

            });

        });
</script>

</html>