@extends('layouts.ui_pet_portal')
@section('content')
<div class="row">
                @if(session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    </div>
                </div>
                @endif
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
                            <label for="dob">Birth Date</label>
                            @if($data->role_id == 2)                         
                                <input type="date" name="dob" id="vet_dob" class="form-control" required>   
                            @else                               
                                <input type="date" name="dob" id="dob" max="<?php echo date("Y-m-d"); ?>" class="form-control" required> 
                            @endif
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

@section('script')
<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear()-21;

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    } 
    
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("vet_dob").setAttribute("max", today);
</script>
@endsection