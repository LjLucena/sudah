@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    {{ucfirst($role)}} Accounts
@endsection
@section('panel-option')
<input type="search" placeholder="Enter Key Search" id="">
<button class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
<a href="/accounts/{{$role}}" class="btn btn-sm btn-primary">View Active List</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr style="text-transform: uppercase;">
                    <th>Name</th>
                    <th>Username</th>                                                      
                    <th>Email</th>
                    @if ($role == 'vet' || $role == 'secretary')                    
                    <th>Branch</th>
                    @endif
                    <th width="20%">Option</th>
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
                    <td>
                        <a href="/view/details/{{base64_encode($account->id)}}" class="btn btn-primary btn-sm" >View</a>
                        <a href="" class="btn btn-danger btn-sm" data-title="Deactivate Account" id="id"  data-id="{{base64_encode($account->id)}}" data-toggle="modal"  data-target="#deactivate">Activate</a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection



@section('modal')
<div class="modal fade" id="deactivate" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate">Deactivate Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
    <script>
        $('#deactivate').on('show.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var modal = $(this)
            modal.find('.modal-title').text('Deactivate Account?');
            modal.find('.modal-footer').html('<a href="/archive/'+data_id+'" class="btn btn-danger" >Yes</a>');
           // modal.find('.modal-body input').val(recipient)
        });
        $('#deactivate').on('hidden.bs.modal', function (e) {
            var modal = $(this);
            modal.find('.modal-body').html('<center><div class="spinner-border text-danger" style="width: 50px;height:50px" role="status"><span class="sr-only">Loading...</span></div></center>');
        });
        function submit_form(){
            $('#assigning_form').submit();
        }
    </script>
@endsection