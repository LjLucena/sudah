<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('htitle')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('ui/assets/css/dataTables.bootstrap.min.css')}}">
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
                    <a class="nav-link {{Request::path() == 'portal/branch' ?  'active' : ''}}" href="/portal/branch">List</a>
                    
                    <a class="nav-link nav-header" ><strong>Branch Management</strong></a>
                    
                    
                    <a class="nav-link {{Request::path() == 'patient' ?  'active' : ''}}" href="/patient">Patients</a>
                    <a class="nav-link {{Request::path() == 'accounts/client' ?  'active' : ''}}" href="/accounts/client">Clients</a>
                    <a class="nav-link {{Request::path() == 'branch/inventory' ?  'active' : ''}}" href="/branch/inventory">Inventory</a>

                    <a class="nav-link nav-header" ><strong>Report Management</strong></a>
                    
                    <a class="nav-link {{Request::path() == 'patients' ?  'active' : ''}}" href="/patients">Reports</a>

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
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
@yield('script')
<script>
  $(document).ready(function() {
          $('#table').DataTable({
          });

          $('#addProduct').on('shown.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var max =$(event.relatedTarget).data('max');
            var modal = $(this);
            modal.find('.modal-title').text('Add Product');
            modal.find('.modal-body').html('<form action="" id="addproduct" method="post"> @csrf <input type="hidden" name="product" value="'+data_id+'"><label>Product Quantity:</label><input class="form-control" type="number" max="'+max+'"name="in" required><button type="submit" class="btn btn-sm btn-success mt-3 float-right">Save</button></form>');
            // modal.find('.modal-body input').val(recipient)
        });

        $('#addStock').on('shown.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var max =$(event.relatedTarget).data('max');
            var modal = $(this);
            modal.find('.modal-title').text('Add Product');
            modal.find('.modal-body').html('<form action="/addstock/branch_inventory"  method="post"> @csrf <input type="hidden" name="product" value="'+data_id+'"><label>Product Quantity:</label><input class="form-control" type="number" max="'+max+'"name="in" required><button type="submit" class="btn btn-sm btn-success mt-3 float-right">Save</button></form>');
            // modal.find('.modal-body input').val(recipient)
        });

        $('#editStock').on('shown.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var max =$(event.relatedTarget).data('max');
            var out_max =$(event.relatedTarget).data('out_max');
            var pro_in =$(event.relatedTarget).data('in');
            var out =$(event.relatedTarget).data('out');
            var modal = $(this);
            modal.find('.modal-title').text('Edit Inventory');
            modal.find('.modal-body').html('<form action="/edit/branch_inventory" id="editInv"  method="post"> @csrf <input type="hidden" name="product" value="'+data_id+'"><label> <h2>Total Stock: '+out_max+'</h2> Product In:</label><input class="form-control" type="number" max="'+max+'"name="in" value="'+pro_in+'" ><label>Product Out:</label><input class="form-control" type="number" max="'+out_max+'"name="out" value="'+out+'" ></form>');
            // modal.find('.modal-body input').val(recipient)
        });

      $('#viewAppt').on('shown.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var modal = $(this);
            modal.find('.modal-title').text('Appointment Details');
            modal.find('.modal-body').load('/view/appt/'+data_id+'');
            //modal.find('.modal-footer').html('<a href="/appointment/'+data_id+'" class="btn btn-md btn-danger">Cancel</a>');
            //modal.find('.modal-footer').html('<a href="/appointment/'+data_id+'" class="btn btn-md btn-danger">Cancel</a>');
           // modal.find('.modal-body input').val(recipient)            }
        });

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