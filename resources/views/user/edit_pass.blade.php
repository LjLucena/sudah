@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    {{$role}} Accounts
@endsection
@section('panel-option')
<a href="{{ URL::previous()}}" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="row" style="margin-top:10px;">
            <div class="col-12">
                <h4>Change Password</h4>
                <form action="" method="post">                  
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pw">New Password:</label>
                            <input type="hidden" name="id" id="id" value="{{$data->id}}">
                            <input type="password" name="pw" id="pw" class="form-control" placeholder="Enter New Password" required>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection