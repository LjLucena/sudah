@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
Account Creation for {{ucfirst($role)}} 
@endsection
@section('panel-option')
<a href="/add/new/account/{{$role}}" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>

<a href="/accounts/{{lcfirst($role)}}" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <br />
        <div class="row">
            <div class="col-12">
                <form action="/add/new/account/client'," method="post">
                    @csrf
                    
                    @if ($role == 'client')
                        <input type="hidden" name="role_id" value="1">
                    @elseif ($role == 'vet')
                    <input type="hidden" name="role_id" value="2">
                    @elseif ($role == 'secretary')
                    <input type="hidden" name="role_id" value="3">
                    @elseif ($role == 'admin')
                    <input type="hidden" name="role_id" value="99">
                        
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <label for="u">Username</label>
                            <input type="text" name="u" id="u" class="form-control"  placeholder="Enter Username" required>
                        </div>
                        <div class="col-md-4">
                            <label for="p">Password</label>
                            <input type="password" name="p" id="p"  class="form-control"  placeholder="Enter Password" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"   class="form-control"  placeholder="Enter Email" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="ln">Last Name</label>
                            <input type="text" name="ln" id="ln" class="form-control"  placeholder="Enter Last Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                        </div>
                        <div class="col-md-3">
                            <label for="fn">First Name</label>
                            <input type="text" name="fn" id="fn" class="form-control"  placeholder="Enter First Name" required>
                        </div>
                        <div class="col-md-3">
                            <label for="mn">Middle Name</label>
                            <input type="text" name="mn" id="mn" class="form-control"  placeholder="Enter Middle Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                        </div>
                        <div class="col-md-3">
                            <label for="s">Suffix</label>
                            <input type="text" name="s" id="s" class="form-control"  placeholder="Enter Suffix">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="house">House Street</label>
                            <input type="text" name="house" id="house" class="form-control"  placeholder="Enter House Street" required>
                        </div>
                        <div class="col-md-3">
                            <label for="barangay">Barangay</label>
                            <input type="text" name="barangay" id="barangay" class="form-control"  placeholder="Enter Barangay" required>
                        </div>
                        <div class="col-md-3">
                            <label for="cm">City/Municipality</label>
                            <input type="text" name="cm" id="cm" class="form-control"  placeholder="Enter City/Municipality"required >
                        </div>
                        <div class="col-md-3">
                            <label for="province">Province</label>
                            <input type="text" name="province" id="province" class="form-control"  placeholder="Enter Province" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="contact">Contact Info</label>
                            <input type="number" name="contact" id="contact" class="form-control number-only"  placeholder="09..." required>
                        </div>
                        <div class="col-md-6">
                            <label for="dob">Birth Date</label>
                            @if($role == "vet")                         
                                <input type="date" name="dob" id="vet_dob" class="form-control" required>   
                            @else                               
                                <input type="date" name="dob" id="dob" max="<?php echo date("Y-m-d"); ?>" class="form-control" required> 
                            @endif
                        </div>
                    </div>
                    @if($role == "vet" || $role == 'secretary')
                    <div class="row">
                        <div class="col-md-5">
                            <label for="branch">Assigned to Branch:</label>
                            <select class="form-control" name="branch" id="" required>
                                <option value="">Choose Branch</option>
                                @foreach ($branchs as $branch)
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }
  setInputFilter(document.getElementById("contact"), function(value) {
    if(value.length >= 12){
      return false;
    }
    return /^\d*$/.test(value); 
  });
  setInputFilter(document.getElementById("ln"), function(value) {
    return /^[a-z]*$/i.test(value);
  });
  setInputFilter(document.getElementById("mn"), function(value) {
    return /^[a-z]*$/i.test(value); 
  });

</script>
@endsection
@section('script')
<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear()-21;

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    } 
    
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("vet_dob").setAttribute("max", today);
</script>
@endsection
