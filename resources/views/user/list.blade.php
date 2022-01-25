@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    {{ucfirst($role)}} Accounts
@endsection
@section('panel-option')
<a href="/add/new/account/{{$role}}" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>
<a href="/archive/list/{{$role}}" class="btn btn-sm btn-danger">View Archives</a>
@endsection
@section('content')
  <div class="row" style="margin-top:20px;">
    <div class="col">
      <table class="table table-hover" id="printable">
              <thead>
                  <tr style="text-transform: uppercase;">
                      <th class="text-center">Name</th>
                      <th class="text-center">Username</th>                                                      
                      <th class="text-center">Email</th>
                      @if ($role == 'vet' || $role == 'secretary')                    
                      <th class="text-center">Branch</th>
                      @endif
                      <th class="text-center noExport" width="20%">Option</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($accounts as $account)
                    <tr>
                      <td class="text-center">{{$account->UserProfile->first_name}} {{$account->UserProfile->middle_name}} {{$account->UserProfile->last_name}}</td>
                      <td class="text-center">{{$account->username}}</td>
                      <td class="text-center">{{$account->email}}</td>
                      @if ($account->role_id == 2 || $account->role_id == 3)                     
                      <td class="text-center">{{$account->BranchName->name}}</td>
                      @endif
                      <td class="text-center">                         
                          <a href="/view/details/{{base64_encode($account->id)}}" class="btn btn-primary btn-sm" title="View" > <i class="fa fa-eye" aria-hidden="true"></i></a>
                          <input type="hidden" id="acc_name" value="{{$account->UserProfile->first_name}}">
                          <button href="" class="btn btn-danger btn-sm" onclick='deactivate({{$account->id}},"{{$account->UserProfile->first_name}}","{{$account->UserProfile->last_name}}");' id="acc_id" data-fn="{{$account->UserProfile->first_name}}" data-ln="{{$account->UserProfile->last_name}}" data-id="{{$account->id}}" title="Deactivate" data-toggle="modal"  data-target="#exampleModal"><i class="fa fa-archive" aria-hidden="true"></i></button>
                      </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
    </div>
  </div>
@endsection



@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate">Deactivate Account?</h5>
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