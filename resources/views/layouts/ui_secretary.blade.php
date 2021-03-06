<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('htitle')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
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
       .btnactive{
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

        .active{
            color: white ! important; 
        }

        .dataTables_wrapper .dt-buttons {
            float:right;
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
                    
                    <!--<a class="nav-link {{Request::path() == 'portal/branch' ?  'active' : ''}}" href="/portal/branch">Calendar</a>-->
                    <a class="nav-link {{Request::path() == 'portal/branch' ?  'btnactive' : ''}}" href="/portal/branch">List</a>
                    
                    <a class="nav-link nav-header" ><strong>Branch Management</strong></a>
                    
                    
                    <a class="nav-link {{Request::path() == 'patient' ?  'btnactive' : ''}}" href="/patient">Patients</a>
                    <a class="nav-link {{Request::path() == 'accounts/client' ?  'btnactive' : ''}}" href="/accounts/client">Clients</a>
                    <a class="nav-link {{Request::path() == 'branch/inventory' ?  'btnactive' : ''}}" href="/branch/inventory">Inventory</a>

                    <a class="nav-link nav-header" ><strong>My Account</strong></a>
                    <a class="nav-link {{Request::path() == 'my-account' ?  'btnactive' : ''}}" href="/my-account">View account</a>

                  
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
                @if(session('fail'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            {{session('fail')}}
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<!--<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>-->
@yield('script')
<script>
    function addProduct(id, max){
            var modal = $('#addProduct');
            modal.find('.modal-title').text('Add Product');
            modal.find('.modal-body').html('<form action="" id="addproduct" method="post"> @csrf <input type="hidden" name="product" value="'+id+'"><label>Product Quantity:</label><input class="form-control" type="number" max="'+max+'"name="in" required><button type="submit" class="btn btn-sm btn-success mt-3 float-right">Save</button></form>');
    }
     
    function viewAppt(id){
            var modal = $('#viewAppt');
            modal.find('.modal-title').text('Appointment Details');
            modal.find('.modal-body').load('/view/appt/'+id+'');
    }

    function addStock(id,max){
            var modal = $('#addStock');
            modal.find('.modal-title').text('Add Product');
            modal.find('.modal-body').html('<form action="/addstock/branch_inventory"  method="post"> @csrf <input type="hidden" name="product" value="'+id+'"><label>Product Quantity:</label><input class="form-control" type="number" max="'+max+'"name="in"><button type="submit" class="btn btn-sm btn-success mt-3 float-right">Save</button></form>');
    }

    function editStock(id, max, out_max){
            var modal = $('#editStock');
            modal.find('.modal-title').text('Edit Inventory');
            modal.find('.modal-body').html('<form action="/edit/branch_inventory" id="editInv"  method="post"> @csrf <input type="hidden" name="product" value="'+id+'"><label> <h2>Warehouse Stock: '+max+'</h2></label><h3>Branch Total Stock: '+out_max+'</h3><label> Product In:</label><input class="form-control" type="number" max="'+max+'"name="in" value="0"><label>Product Out:</label><input class="form-control" type="number" max="'+out_max+'"name="out" value="0"><button type="submit" class="btn btn-sm btn-success mt-3 float-right">Save</button></form>');
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

        $("#cancelBtn").click(function(){        
          //$("#cancelForm").removeAttr('style');
            console.log('gaganaku');
        });


        $("#submitBtn").click(function(){        
          $("#editInv").submit(); // Submit the form
        });
  });
</script>
</html>