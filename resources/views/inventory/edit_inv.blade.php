@extends('layouts.ui')
@section('htitle') Inventory @endsection
@section('panel-title')
    Edit Inventory
@endsection
@section('panel-option')
<a href="/inventory" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="row" style="margin-top:10px;">
            <div class="col-12">
                <form action="" method="post">                  
                    @csrf
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-4">
                            <input type="hidden" name="id" id="id" class="form-control"  value="{{$inv->id}}" />
                            <label for="cat">Category:</label>
                            <select class="form-control" name="cat" id="" required>
                                <option value="{{$inv->category_id}}" selected="true">{{$inv->Category->category_name}}</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                            </select>
                            <label for="pro_code">Product Code:</label>
                            <input type="text" name="code" id="code" class="form-control"  value="{{$inv->code}}" required>
                            <label for="pro_name">Product Name:</label>
                            <input type="text" name="name" id="name" class="form-control"  value="{{$inv->product_name}}" required>
                            <label for="price">Price:</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control"  value="{{$inv->price}}" required>
                            <label for="qty">Quantity:</label>
                            <input type="number" name="qty" id="qty" class="form-control"  value="{{$inv->quantity}}" required>
                            <label for="remarks">Remarks:</label>
                            <input type="text" name="remarks" id="remarks" class="form-control"  value="{{$inv->remarks}}">
                            <br>

                            <button type="submit" class="btn btn-success float-right">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
