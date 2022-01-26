@extends('layouts.ui')
@section('htitle') Inventory @endsection
@section('panel-title')
    Inventory | Out Of Stock
@endsection
@section('panel-option')

<a href="/inventory" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="printable">
            <thead>
                <tr style="text-transform: uppercase;">          
                    <th>Category</th>              
                    <th>Product Code</th>              
                    <th>Product Name</th>
                    <th>Price</th>               
                    <th>Total Sales</th>                
                    <th>Total Cost</th>                
                    <th class="text-center noExport" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                  <tr>
                    <td>{{$inventory->Category->category_name}}</td>
                    <td>{{$inventory->code}}</td>
                    <td>{{$inventory->product_name}}</td>
                    <td>{{$inventory->price}}</td>
                    <td>{{$inventory->total_sales}}</td>
                    <td>P {{$inventory->total_sales * $inventory->price}}</td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm" onclick="addStock({{$inventory->id}})" id="stock"  data-id="{{$inventory->id}}" data-toggle="modal"  data-target="#addStock">Add Stock</button>
                        <button class="btn btn-danger btn-sm"  onclick="archiveProduct({{$inventory->id}},'{{$inventory->product_name}}')" data-name="{{$inventory->product_name}}" data-id="{{$inventory->id}}" data-toggle="modal"  data-target="#archiveProduct">Archive</button>
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

