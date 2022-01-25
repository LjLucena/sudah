@extends('layouts.ui')
@section('htitle') Inventory @endsection
@section('panel-title')
    Main Inventory
@endsection
@section('panel-option')
<a href="/add/new/inventory" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>

<a href="/outOfStock/inventory" class="btn btn-sm btn-warning">Out Of Stock</a>
<a href="/archives/inventory" class="btn btn-sm btn-danger">Archives</a>
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
                    <th>Quantity</th>                
                    <th>Total Sales</th>                
                    <th>Total Cost</th>                
                    <th class="text-center noExport" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                  <tr>
                    <td>{{$inventory->created_at}}</td>
                    <td>{{$inventory->updated_at}}</td>
                    <td>{{$inventory->Category->category_name}}</td>
                    <td>{{$inventory->code}}</td>
                    <td>{{$inventory->product_name}}</td>
                    <td>{{$inventory->price}}</td>
                    <td>{{$inventory->quantity}}</td>
                    <td>{{$inventory->total_sales}}</td>
                    <td>P {{$inventory->total_sales * $inventory->price}}</td>
                    <td class="text-center">
                        <a href="/edit/inventory/{{$inventory->id}}" class="btn btn-primary btn-sm" >Edit</a>
                        <button class="btn btn-danger btn-sm" id="prod" onclick="archiveProduct({{$inventory->id}},'{{$inventory->product_name}}')" data-name="{{$inventory->product_name}}" data-id="{{$inventory->id}}" data-toggle="modal"  data-target="#archiveProduct">Archive</button>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('modal')
<div class="modal fade" id="archiveProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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