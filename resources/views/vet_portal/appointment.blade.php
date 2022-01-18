@extends('layouts.ui_vet')
@section('htitle') SUDAH | Appointments @endsection
@section('panel-title')
   Appointment 
@endsection
@section('panel-option')
{{$pet->owner->UserProfile->first_name}} {{$pet->owner->UserProfile->middle_name}} {{$pet->owner->UserProfile->last_name}}
@endsection
@section('content')
<div class="row">
  <div class="col-md-12"><br></div>
    <div class="col-md-3">

        <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$pet->image)}}" class="card-img-top"  />
            <div class="card-body">
              <h5 class="card-title"><strong>Name:</strong>{{$pet->name}}</h5>
            </div>
          </div>
          <br />
    </div>
    <div class="col-md-9">
        <h4>Pet Information</h4>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><strong>Species:</strong></td>
                            <td>{{$pet->pet_breed->pet_species->species_name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Breed:</strong></td>
                            <td>{{$pet->pet_breed->breed_name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Color:</strong></td>
                            <td>{{$pet->pet_color->color_name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Weight:</strong></td>
                            <td>{{$pet->weight}}</td>
                        </tr>
                        <tr>
                            <td><strong>Date of Birth</strong></td>
                            <td>{{$pet->bday}}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Services Requested</h4>
                <table class="table">
                  <tbody>
                @foreach ($services as $service)
                  <tr>
                      <td><strong>Services:</strong></td>
                      <td>{{$service->service}} {{$service->price !="" ? '(P'.$service->price.'.00)' : ''}}</td>
                  </tr>
                @endforeach
              </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
      
    <h4>Medical Record</h4>  
    <table class="table">
      <thead>
        <tr>
          <th>Appointment Schedule</th>
          <th>Assessment Completion</th>
          <th>Assessment</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($med_records as $med_record)            
        <tr>
          <td>{{$med_record->appointment_details->date_appointment}} {{$med_record->appointment_details->time_appointment}}</td>
          <td>{{$med_record->created_at->format("Y-m-d h:iA")}}</td>
          <td width='50%'>{{$med_record->assessment}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @if ($appointment->status == "Appointment Completed")
    
  @else
  <div class="col-md-12">
    <form action="" method="POST">
      @csrf
      <h4>Assessment</h4>  
      <textarea class="form-control" name="assessment" id="" rows="5" required></textarea>
      <button class="btn btn-primary" type="submit">Complete Appointment</button>
    </form>
  </div>
  @endif
   
</div>

@endsection