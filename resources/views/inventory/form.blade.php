@extends('layouts.ui_secretary')
@section('htitle') Accounts @endsection
@section('panel-title')
  Add  Product 
@endsection
@section('panel-option')

<a href="/branch/inventory" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
                
                    <div class="row" style="margin-top:20px;">
                        <div class="col">
                            <table class="table table-hover" id="table">
                                <thead>
                                    <tr style="text-transform: uppercase;">
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Code</th>                                                      
                                        <th class="text-center">Product Name</th>              
                                        <th class="text-center">Price</th>
                                        <th class="text-center" width="20%">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($inventories as $item)
                                        <tr>
                                        <td>{{$item->Category->category_name}}</td>
                                        <td>{{$item->code}}</td>
                                        <td>{{$item->product_name}}</td>                   
                                        <td>{{$item->price}}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" id="prod_id" onclick="addProduct({{$item->id}},{{$item->quantity}})" data-id="{{$item->id}}" data-max="{{$item->quantity}}" data-toggle="modal"  data-target="#addProduct">Add</button>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

@endsection
@section('modal')
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate">Add New Product</h5>
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