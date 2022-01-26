@extends('layouts.ui')
@section('htitle') Inventory @endsection
@section('panel-title')
    Product Category List
@endsection
@section('panel-option')
<button onclick="addCat()" data-toggle="modal"  data-target="#addCat" class="btn btn-sm btn-primary">Add New</button>

@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="table">
            <thead>
                <tr style="text-transform: uppercase;">                    
                    <th class="text-center">Category</th>            
                    <th class="text-center noExport" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                  <tr>
                    <td class="text-center">{{$category->category_name}}</td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm" onclick="editCat({{$category->id}},'{{$category->category_name}}')" id="cat" data-toggle="modal"  data-target="#editCat">Edit</button>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection



@section('modal')
<div class="modal fade" id="editCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


  <div class="modal fade" id="addCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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