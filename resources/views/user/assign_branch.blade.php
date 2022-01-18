<form method="post" action="/assign/account" id="assigning_form" >
    @csrf
    <input type="hidden" name="id" value="{{base64_encode($account->id)}}">
<div class="row">
    <div class="col-md-4">
        Username: {{$account->username}}
    </div>
    <div class="col-md-4">
        Full Name: {{$account->UserProfile->first_name}} {{$account->UserProfile->middle_name}} {{$account->UserProfile->last_name}}
    </div>
    <div class="col-md-4">
        Account Type: {{$account->UserRoleI->role}}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="branch">Select Branch</label>
        <select name="branch_id"  class="form-control" name="branch_id" id="branch">
            <option value="" >-- Select Branch --</option>
            @foreach ($branches as $branch)
            <option value="{{$branch->id}}" > {{$branch->name}} <option>
            @endforeach
        </select>
    </div>
</div>
@if ($account->role_id==2)
    
<div class="row">
    <div class="col-md-6">
        <label for="branch">Select Branch</label>
        <input type="number" class="form-control" value="{{$account->am_app}}" name="max_am_app" placeholder="Enter Inital Max Appointment for AM" />
    </div>
    <div class="col-md-6">
        <label for="branch">Select Branch</label>
        <input type="number" class="form-control" value="{{$account->pm_app}}"  name="max_pm_app" placeholder="Enter Inital Max Appointment for PM" />
    </div>
</div>

@endif
</form>