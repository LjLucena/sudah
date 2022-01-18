@extends('layouts.ui_secretary')
@section('htitle') SUDAH | My Account @endsection
@section('panel-title')
    Account Details
@endsection
@section('content')
<div class="row" style="margin:50px;">
                @if(session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    </div>
                </div>
                @elseif(session('fail'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-warning">
                            {{session('fail')}}
                        </div>
                    </div>
                </div>
                @endif
    <div class="col-12">
        <a href="/my-account" class="btn btn-outline-primary">Back</a>
        <div class="row" style="margin-top:10px;">
            <div class="col-12">
                <h4>Change Password</h4>
                <form action="" method="post">                  
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="ol_pw">Old Password:</label>
                            <input type="password" name="p" id="p" class="form-control"  placeholder="Enter old password" required>
                            <label for="pw">New Password:</label>
                            <input type="password" name="pw" id="pw" class="form-control" placeholder="Enter New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                    </div>
                    <div id="message">
                        <h6x>Password must contain the following:</h6>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
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