@extends('layouts.ui_super_admin')
@section('content')
<div class="row">
  <div class="col-md-8">
      

      <table class="table">
            <thead>
              <tr style="text-transform: uppercase">
                <th>Admin Username</th>
                <th>Status(1=Active|0=Deactive)</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($admins as $admin)
                <tr>
                  <td>{{$admin->username}}</td>
                  <td>{{$admin->stat}}</td>
                  <td width="30%">
                    @if($admin->stat == 1)
                      <button class="btn btn-sm btn-warning" id="cpw" data-id="{{$admin->id}}" onclick="showPassForm({{$admin->id}})">change password</button>
                      <a href="/admin/deact/{{$admin->id}}" class="btn btn-sm btn-danger" >Deactivate</a>
                    @else
                    <a href="/admin/act/{{$admin->id}}" class="btn btn-sm btn-warning" >Activate</a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>
  </div>
  <div class="col-md-4 border p-5" >
      <div class="row">
        <div class="col">
          <h5>Add Admin Account</h5>
          <form action="/add/new/admin" method="post">@csrf
            <input type="hidden" name="role" value="4">
            <label for="username">Username:</label>
            <input type="text" name="un" class="form-control" required>
            <label for="password">Password:</label>
            <input type="password" name="pw" class="form-control" required>
            <button class="btn btn-sm btn-success mt-3" type="submit">Save</button>
          </form>
        </div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">

  </div>
  
  <div class="col-md-4 border p-5" id="Forms">

</div>
</div>



          
@endsection
@section('scripts')
<script>
            function showPassForm(id){
              $('#Forms').load('/admin/changepass/'+id);
            }
          </script>
@endsection
