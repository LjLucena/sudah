@extends('layouts.ui_secretary')
@section('htitle') Clients @endsection
@section('panel-title')
    Client Account
@endsection
@section('panel-option')

<a href="/accounts/client" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-9">
                        <h4>Account Details</h4>
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Username:</strong></td>
                                            <td>{{$user->username}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Name:</strong></td>
                                            <td>{{$user->UserProfile->first_name}} {{$user->UserProfile->middle_name}} {{$user->UserProfile->last_name}} {{$user->UserProfile->suffix}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Contact Number:</strong></td>
                                            <td>{{$user->UserProfile->contact}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Address:</strong></td>
                                            <td>{{$user->UserProfile->house}} {{$user->UserProfile->brgy}} {{$user->UserProfile->municipality}} {{$user->UserProfile->province}} {{$user->UserProfile->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Birth Date:</strong></td>
                                            <td>{{$user->UserProfile->dob}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
