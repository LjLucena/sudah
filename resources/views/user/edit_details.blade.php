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
                <h4>Edit Account Details</h4>
                <form action="" method="post">                  
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="id" id="id" class="form-control" class="form-control"  value="{{$data->id}}" />
                            <label for="u">Username:</label>
                            <input type="text" name="u" id="u" class="form-control"  value="{{$data->username}}" required>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control"  value="{{$data->email}}" required>
                            <label for="ln">Last Name:</label>
                            <input type="text" name="ln" id="ln" class="form-control"  value="{{$data->UserProfile->last_name}}" required>
                            <label for="fn">First Name:</label>
                            <input type="text" name="fn" id="fn" class="form-control"  value="{{$data->UserProfile->first_name}}" required>
                            <label for="mn">Middle Name:</label>
                            <input type="text" name="mn" id="mn" class="form-control"  value="{{$data->UserProfile->middle_name}}">
                            <label for="s">Suffix:</label>
                            <input type="text" name="s" id="s" class="form-control"  value="{{$data->UserProfile->suffix}}">
                        </div>
                        <div class="col-md-4">
                            <label for="house">House Street:</label>
                            <input type="text" name="house" id="house" class="form-control"  value="{{$data->UserProfile->house}}" required>
                            <label for="barangay">Barangay:</label>
                            <input type="text" name="barangay" id="barangay" class="form-control"  value="{{$data->UserProfile->brgy}}" required>
                            <label for="cm">City/Municipality:</label>
                            <input type="text" name="cm" id="cm" class="form-control"  value="{{$data->UserProfile->municipality}}" required>
                            <label for="province">Province:</label>
                            <input type="text" name="province" id="province" class="form-control"  value="{{$data->UserProfile->province}}" required>
                            <label for="contact">Contact Info:</label>
                            <input type="text" name="contact" id="contact" class="form-control number-only"  value="{{$data->UserProfile->contact}}" required>
                            <label for="dob">Birth Date:</label>
                            @if($role=="Vet")   
                                <input type="date" name="dob" id="dob" max="2000-12-12" class="form-control" value="{{$data->UserProfile->dob}}"  required>
                            @else                               
                                <input type="date" name="dob" id="dob" max="<?php echo date("Y-m-d"); ?>" value="{{$data->UserProfile->dob}}" class="form-control" required> 
                            @endif
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin:20px;;">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
