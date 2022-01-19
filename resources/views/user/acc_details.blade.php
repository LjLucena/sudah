@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    {{ucfirst($role)}} Accounts
@endsection
@section('panel-option')

<a href="/accounts/{{lcfirst($role)}}" class="btn btn-sm btn-primary">Back</a>
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
                                        @if($user->stat == 1)
                                        <tr>
                                            <td>
                                                <a href="/edit/account/{{base64_encode($user->id)}}">
                                                    <button class="btn btn-sm btn-primary">
                                                        Edit
                                                    </button>
                                                </a>
                                                <a href="/update/pass/{{base64_encode($user->id)}}">
                                                    <button class="btn btn-sm btn-primary">
                                                        Change Password
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection



@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Assigning Task To Position</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <center><div class="spinner-border text-danger" style="width: 150px;height:150px" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="submit_form()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
    
@endsection