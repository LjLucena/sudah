@extends('layouts.ui_secretary')
@section('htitle') SUDAH | Appointments @endsection
@section('panel-title')
   All Appointment List
@endsection
@section('panel-option')
@endsection
@section('content')
<div class="row"  style="margin-top:20px;margin-bottom:20px;">
    <div class="col-md">
      <a href="/portal/branch" class="btn btn-outline-dark">Today</a>
      <a href="/branch/appt" class="btn btn-primary">All</a>
      <a href="/branch/appt/Pending" class="btn btn-outline-danger">Pending</a>
      <a href="/branch/appt/Approved" class="btn btn-outline-info">Approved</a>
      <a href="/branch/appt/Done" class="btn btn-outline-success">Completed</a>
      <a href="/branch/appt/Cancelled" class="btn btn-outline-secondary">Cancelled</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        
        <table class="table table-hover" id="printable">
                <thead>
                  <tr style="text-transform: uppercase">
                    <th>appointment date and time</th>
                    <th>vet</th>
                    <th>pet</th>
                    <th>status</th>
                    <th class="noExport">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                    <tr>
                      <td>{{$appointment->AppointmentDate->date}} | {{$appointment->time_appointment}}</td>
                      <td>@if($appointment->AppointmentVet)
                            {{$appointment->AppointmentVet->UserProfile->first_name}} {{$appointment->AppointmentVet->UserProfile->middle_name}} {{$appointment->AppointmentVet->UserProfile->last_name}}
                          @endif
                      </td>
                      <td>{{$appointment->AppointmentPet->name}}</td>
                      <td>{{$appointment->status}}</td>
                      <td class="text-center" width="15%">
                      <button class="btn btn-sm btn-primary" onclick="viewAppt({{$appointment->id}})" id="view" data-id="{{$appointment->id}}" data-toggle="modal" data-target="#viewAppt">
                                View
                          </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
    
        </table>
    </div>
</div>

@endsection
@section('modal')
<div class="modal fade" id="viewAppt" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
      </div>
    </div>
  </div>
@endsection