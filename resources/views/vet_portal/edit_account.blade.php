@extends('layouts.ui_vet')
@section('htitle') SUDAH | My Account @endsection
@section('panel-title')
    Account Details
@endsection
@section('content')
<div class="row" style="margin:50px;">
    <div class="col-12">
        <a href="/my-account" class="btn btn-outline-primary">Back</a>
        <div class="row" style="margin-top:10px;">
            <div class="col-12">
                <h4>Edit Account Details</h4>
                <form action="" method="post">                  
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
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
                            <label for="zip">Zipcode:</label>
                            <input type="number" name="zip" id="zip" class="form-control"  value="{{$data->UserProfile->zipcode}}" required>
                            <label for="contact">Contact Info:</label>
                            <input type="text" name="contact" id="contact" class="form-control number-only"  value="{{$data->UserProfile->contact}}" required>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection