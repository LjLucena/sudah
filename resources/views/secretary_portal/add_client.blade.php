@extends('layouts.ui_secretary')
@section('htitle') Clients @endsection
@section('panel-title')
Account Creation for Client
@endsection
@section('panel-option')

<a href="/accounts/client" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <br />
        <div class="row">
            <div class="col-12">
                <form action="" autocomplete="off" method="post">
                    @csrf
                            <h4>Account Details</h4>
                    <input type="hidden" name="role_id" value="1">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="u">Username</label>
                            <input type="text" name="u" id="u" class="form-control" autocomplete="off" placeholder="Enter Username" required>
                        </div>
                        <div class="col-md-4">
                            <label for="p">Password</label>
                            <input type="password" name="p" id="p"  class="form-control" autocomplete="new-password" placeholder="Enter Password" required>
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
                        <h4 class="mt-4">Pet Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                              <label for="">Pet's Name</label>
                              <input type="text" name="name" id="" class="form-control" placeholder="Enter Pet Name" required>
                        </div>
                        <div class="col-md-6">
                              <label for="">Date of Birth</label>
                              <input type="date" name="bday" id="" max="{{date('Y-m-d')}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                          <label for="">Species</label>
                          <select class="form-control species_id" name="species_id" id="" required>
                            <option value="0" disabled="true" selected="true">-- Select Species --</option>
                              @foreach ($species as $item)
                                  <option value="{{$item->id}}">{{$item->species_name}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-4">
                          <label for="">Breed</label>
                          <select class="form-control breed_id" name="breed_id" id="" required>
                          <option value="0" disabled="true" selected="true">-- Select Breed --</option>
                          </select>
                      </div>
                      <div class="col-md-4">
                          <label for="color_id">Color</label>
                          <select class="form-control" name="color_id" id="" required>
                              <option value="">-- Select Color --</option>
                              @foreach ($colors as $color)
                                  <option value="{{$color->id}}">{{$color->color_name}}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                            <div class="col-md-4">
                                <label for="weight">Weight(kg)</label>
                                <input type="text" name="weight" id="" placeholder="Enter Weight" class="form-control" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" title="This should be a number with up to 2 decimal places." required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Gender</label>
                                <select class="form-control" name="gender" id="" required>
                                    <option value="">-- Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Unkown">Unkown</option>
                                </select>
                            </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-4">Appointment Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                                <label for="vet">Vet</label>
                                <select name="vet_id" id="" class="form-control">
                            @foreach($scheds as $sched)
                                @if($sched->VetName)
                                <option value="{{$sched->vet_id}}">{{$sched->VetName->UserProfile->first_name}} {{$sched->VetName->UserProfile->middle_name}} {{$sched->VetName->UserProfile->last_name}} {{$sched->VetName->UserProfile->suffix}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="time">Time of Appointment:</label>
                            <select name="time" id="" class="form-control">
                                <option value="08:00AM - 12:00AM">AM</option>
                                <option value="01:00PM - 05:00PM">PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="services">Services</label> <br>
                            <input type="checkbox" name="services[]" id="s1" value="1" Checked> <label for="s1">Consultation</label><br />                 
                            <input type="checkbox" name="services[]" id="s2" value="2"> <label for="s2">Vaccination</label><br />                 
                            <input type="checkbox" name="services[]" id="s3" value="3"> <label for="s3">Deworming</label><br />         
                            <input type="checkbox" name="services[]" id="s4" value="4"> <label for="s4">Pet Grooming</label><br />   
                            <input type="checkbox" name="services[]" id="s5" value="5"> <label for="s5">Vet Dental Care</label><br />             
                            <input type="checkbox" name="services[]" id="s6" value="6"> <label for="s6">Laboratory Test</label><br /> 
                        </div>
                        <div class="col-md-4"> <br>
                            <input type="checkbox" name="services[]" id="s7" value="7"> <label for="s7">Surgery</label><br />             
                            <input type="checkbox" name="services[]" id="s8" value="8"> <label for="s8">Confinement</label><br />             
                            <input type="checkbox" name="services[]" id="s9" value="9"> <label for="s9">X-ray</label><br />             
                            <input type="checkbox" name="services[]" id="s10"value="10"> <label for="s10"> Pet Lodging</label><br />     
                            <input type="checkbox" name="services[]" id="s11"value="11"> <label for="s11"> Pet Wellness</label><br />
                        </div>
                        <div class="col-md-4">
                            <label for="assessment">Assessment</label>
                            <textarea class="form-control" name="assessment" id="" rows="2"></textarea>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <button class="btn btn-primary float-right">Save</button>
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