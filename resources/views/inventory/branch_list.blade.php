@extends('layouts.ui_secretary')
@section('htitle') Inventory @endsection
@section('panel-title')
    Inventory
@endsection
@section('panel-option')
<a href="/add/new/branch_inventory" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>

<a href="/outOfStock/branch_inventory/list" class="btn btn-sm btn-warning">Out Of Stock</a>
<a href="/archives/inventory" class="btn btn-sm btn-danger">Archives</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="printable">
            <thead>
                <tr style="text-transform: uppercase;">                    
                    <th class="text-center">Date Added</th>              
                    <th class="text-center">Date Updated</th>              
                    <th class="text-center">Category</th>              
                    <th class="text-center">Product Code</th>              
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Price</th>                  
                    <th class="text-center">In</th>                
                    <th class="text-center">Out</th>                
                    <th class="text-center">Total Stock</th>                
                    <th class="text-center noExport" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                  <tr>
                    <td class="text-center">{{$inventory->created_at}}</td>
                    <td class="text-center">{{$inventory->updated_at}}</td>
                    <td class="text-center">{{$inventory->Product->Category->category_name}}</td>
                    <td class="text-center">{{$inventory->Product->code}}</td>
                    <td class="text-center">{{$inventory->Product->product_name}}</td>
                    <td class="text-center">{{$inventory->Product->price}}</td>
                    <td class="text-center">{{$inventory->in}}</td>
                    <td class="text-center">{{$inventory->out}}</td>
                    <td class="text-center">{{$inventory->stock}}</td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm" id="stock" onclick="editStock({{$inventory->id}},{{$inventory->Product->quantity}},{{$inventory->stock}})" data-id="{{$inventory->id}}" data-max="{{$inventory->Product->quantity}}" data-out_max="{{$inventory->stock}}" data-in="{{$inventory->in}}" data-out="{{$inventory->out}}" data-toggle="modal"  data-target="#editStock">Edit</button>
                      </td>
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
          
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
@endsection