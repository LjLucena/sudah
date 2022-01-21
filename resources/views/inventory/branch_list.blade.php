@extends('layouts.ui_secretary')
@section('htitle') Accounts @endsection
@section('panel-title')
    Inventories
@endsection
@section('panel-option')
<a href="/add/new/branch_inventory" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>

<a href="/outOfStock/branch_inventory/list" class="btn btn-sm btn-warning">Out Of Stock</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="table">
            <thead>
                <tr style="text-transform: uppercase;">                    
                    <th>Date Added</th>              
                    <th>Date Updated</th>              
                    <th>Category</th>              
                    <th>Product Name</th>
                    <th>Price</th>                  
                    <th>In</th>                
                    <th>Out</th>                
                    <th>Total Stock</th>                
                    <th class="text-center" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                  <tr>
                    <td>{{$inventory->created_at}}</td>
                    <td>{{$inventory->updated_at}}</td>
                    <td>{{$inventory->Product->Category->category_name}}</td>
                    <td>{{$inventory->Product->product_name}}</td>
                    <td>{{$inventory->Product->price}}</td>
                    <td>{{$inventory->in}}</td>
                    <td>{{$inventory->out}}</td>
                    <td>{{$inventory->stock}}</td>
                    <td class="text-center">
                        <a href="/edit/branch_inventory/{{$inventory->id}}" class="btn btn-primary btn-sm" >Edit</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection



@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var modal = $(this)
            modal.find('.modal-title').text('Assign Branch to User');
            modal.find('.modal-body').load('/assign/account/'+data_id+'/branch');
           // modal.find('.modal-body input').val(recipient)
        });
        $('#exampleModal').on('hidden.bs.modal', function (e) {
            var modal = $(this);
            modal.find('.modal-body').html('<center><div class="spinner-border text-danger" style="width: 150px;height:150px" role="status"><span class="sr-only">Loading...</span></div></center>');
        });
        function submit_form(){
            $('#assigning_form').submit();
        }
    </script>
@endsection