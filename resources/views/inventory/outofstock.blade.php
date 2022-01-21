@extends('layouts.ui_secretary')
@section('htitle') Accounts @endsection
@section('panel-title')
    Inventories
@endsection
@section('panel-option')

<a href="/branch/inventory" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="table">
            <thead>
                <tr style="text-transform: uppercase;">           
                    <th>Category</th>              
                    <th>Product Name</th>
                    <th>Price</th>                      
                    <th class="text-center" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                  <tr>
                    <td>{{$inventory->Product->Category->category_name}}</td>
                    <td>{{$inventory->Product->product_name}}</td>
                    <td>{{$inventory->Product->price}}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-primary btn-sm"  data-id="{{$inventory->id}}" data-max="{{$inventory->Product->quantity}}" data-toggle="modal"  data-target="#addStock">Add Stock</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('modal')
<div class="modal fade" id="addStock" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate">Product: Add Stock</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
@endsection

