@extends('layouts.ui_vet')
@section('htitle') SUDAH | My Account @endsection
@section('panel-title')
    Account Details
@endsection
@section('content')
<div class="row" style="margin-top:50px;">
                    <div class="col-md-12">
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
                                            <td>
                                                <a href="/update/account">
                                                    <button class="btn btn-sm btn-primary">
                                                        Edit Profile
                                                    </button>
                                                </a>
                                                <a href="/update/pass">
                                                    <button class="btn btn-sm btn-primary">
                                                        Change Password
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection