<h4><b>Status:</b> {{$appointment->status}}</h4>
<h4><b>Schedule:</b> {{$appointment->AppointmentDate->date}} | {{$appointment->time_appointment}} </h4>
<h4><b>Vet:</b>
    @if($appointment->AppointmentVet)
        {{$appointment->AppointmentVet->UserProfile->first_name}} {{$appointment->AppointmentVet->UserProfile->middle_name}} {{$appointment->AppointmentVet->UserProfile->last_name}}
    @endif
</h4>
<h4><b>Pet Owner:</b> {{$appointment->AppointmentUser->UserProfile->first_name}} {{$appointment->AppointmentUser->UserProfile->middle_name}} {{$appointment->AppointmentUser->UserProfile->last_name}} {{$appointment->AppointmentUser->UserProfile->suffix}}</h4>
<h4><b>Pet:</b> {{$appointment->AppointmentPet->name}}</h4>
<h4><b>Services:</b> 
   @foreach ($services as $service)
        {{$service->service}} @if($services->count() > 1) | @endif
    @endforeach
</h4>
<h4><b>Reason:</b> {{$appointment->reason}}</h4>
<br>
@if($appointment->AppointmentUser->role_id == 3)
@if($appointment->status == 'Pending')

<a href="/pet/{{base64_encode($appointment->pet_id)}}" class="btn btn-sm btn-primary">View Pet</a>
<button class="btn btn-sm btn-danger" id="cancelBtn">Cancel</button>
<a href="/approve/appoitment/{{base64_encode($appointment->pet_id)}}" class="btn btn-sm btn-success">Approve</a>
<button class="btn btn-sm btn-secondary float-right" data-dismiss="modal">Close</button>
@elseif($appointment->status == 'Done')
<a href="/pet/{{base64_encode($appointment->pet_id)}}" class="btn btn-sm btn-primary">View Pet</a>
<a href="/set/appt/{{base64_encode($appointment->pet_id)}}" class="btn btn-sm btn-warning">Set Another Appointment</a>
<button class="btn btn-sm btn-secondary float-right" data-dismiss="modal">Close</button>
@elseif($appointment->status == 'Cancelled')
<h3 class="text-danger"><b>Cancellation Reason:</b></h3>{{$appointment->cancel_reason}} <br>
<button class="btn btn-sm btn-secondary float-right" data-dismiss="modal">Close</button>
@else
<a href="/pet/{{base64_encode($appointment->pet_id)}}" class="btn btn-sm btn-primary">View Pet</a>
<button class="btn btn-sm btn-danger" id="cancelBtn">Cancel</button>
<button class="btn btn-sm btn-secondary float-right" data-dismiss="modal">Close</button>
@endif


<form action="/branch/cancel/appt" method="get" id="cancelForm" class="d-none">
    <input type="hidden" name="id" value="{{$appointment->id}}">
    <input type="hidden" name="sched" value="{{$appointment->schedule_id}}">
    <label for="cancellation">Cancellation Reason:</label>
    <input type="text" name="cancel_reason" id="cancel_reason" class="form-control" required> <br>
    <button type="submit" class="btn btn-sm btn-success">Save</button>
</form>

<script>

        $("#cancelBtn").click(function(){        
          $("#cancelForm").removeAttr('class');
          $("#canncelBtn").hide();
        });
</script>
@endif