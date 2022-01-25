@extends('layouts.ui_secretary')
@section('htitle') Inventory @endsection
@section('panel-title')
    Inventory | Archives
@endsection
@section('panel-option')

<a href="{{URL::previous()}}" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="printable">
            <thead>
                <tr style="text-transform: uppercase;">                    
                    <th>Date Added</th>              
                    <th>Date Updated</th>              
                    <th>Category</th>              
                    <th>Product Code</th>              
                    <th>Product Name</th>
                    <th>Price</th>                  
                    <th>In</th>                
                    <th>Out</th>                
                    <th>Total Stock</th>                
                </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                  <tr>
                    <td>{{$inventory->created_at}}</td>
                    <td>{{$inventory->updated_at}}</td>
                    <td>{{$inventory->Product->Category->category_name}}</td>
                    <td>{{$inventory->Product->code}}</td>
                    <td>{{$inventory->Product->product_name}}</td>
                    <td>{{$inventory->Product->price}}</td>
                    <td>{{$inventory->in}}</td>
                    <td>{{$inventory->out}}</td>
                    <td>{{$inventory->stock}}</td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection



@section('modal')
<div class="modal fade" id="editStock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <button type="submit" class="btn btn-success" id="submitBtn">Save</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
@endsection