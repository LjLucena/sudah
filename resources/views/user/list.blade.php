@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    {{ucfirst($role)}} Accounts
@endsection
@section('panel-option')
<input type="search" placeholder="Enter Key Search" id="">
<button class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
Search
</button>
<a href="/add/new/account/{{$role}}" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>
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
                        <button type="button" class="btn btn-primary btn-sm" >View</button>
                        <button class="btn btn-danger btn-sm">Archived</button>
                    </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
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
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            // var button = $(event.relatedTarget) // Button that triggered the modal
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var data_id =$(event.relatedTarget).data('id');
            var modal = $(this)
            modal.find('.modal-title').text('Assign Branch to User');
            modal.find('.modal-body').load('/assign/account/'+data_id+'/branch');
           // modal.find('.modal-body input').val(recipient)
        });
        $('#exampleModal').on('hidden.bs.modal', function (e) {
            var modal = $(this);
            modal.find('.modal-body').html('<center><div class="spinner-border text-danger" style="width: 150px;height:150px" role="status"><span class="sr-only">Loading...</span></div></center>');
        });
        function submit_form(){
            $('#assigning_form').submit();
        }
    </script>
@endsection