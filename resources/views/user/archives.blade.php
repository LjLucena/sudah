@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    {{ucfirst($role)}} Accounts
@endsection
@section('panel-option')
<a href="/accounts/{{$role}}" class="btn btn-sm btn-primary">View Active List</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="printable">
            <thead>
                <tr style="text-transform: uppercase;">
                    <th>Name</th>
                    <th>Username</th>                                                      
                    <th>Email</th>
                    @if ($role == 'vet' || $role == 'secretary')                    
                    <th>Branch</th>
                    @endif
                    <th class="text-center noExport" width="20%">Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($accounts as $account)
                  <tr>
                    <td>{{$account->UserProfile->first_name}} {{$account->UserProfile->middle_name}} {{$account->UserProfile->last_name}}</td>
                    <td>{{$account->username}}</td>
                    <td>{{$account->email}}</td>
                    @if ($account->role_id == 2 || $account->role_id == 3)                     
                    <td></td>
                    @endif
                    <td class="text-center">
                        <a href="/view/details/{{base64_encode($account->id)}}" class="btn btn-primary btn-sm" >View</a>   
                        <button class="btn btn-danger btn-sm" id="acc_id" onclick="activate({{$account->id}},'{{$account->UserProfile->first_name}}','{{$account->UserProfile->last_name}}');" data-fn="{{$account->UserProfile->first_name}}" data-ln="{{$account->UserProfile->last_name}}"  data-id="{{$account->id}}" data-toggle="modal"  data-target="#activate">Activate</button>
                    </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection



@section('modal')
<div class="modal fade" id="activate" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate">Activate Account?</h5>
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