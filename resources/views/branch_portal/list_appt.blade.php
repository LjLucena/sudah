@extends('layouts.ui_secretary')
@section('htitle') SUDAH | Appointments @endsection
@section('panel-title')
   Appointment List - {{$status}}
@endsection
@section('panel-option')
@endsection
@section('content')
<div class="row"  style="margin-top:20px;margin-bottom:20px;">
    <div class="col-md">
      <a href="/portal/branch" class="btn btn-primary">Today</a>
      <a href="/branch/appt" class="btn btn-outline-primary ">All</a>
      <a href="/branch/appt/Pending" class="btn btn-outline-danger">Pending</a>
      <a href="/branch/appt/Approved" class="btn btn-outline-info">Approved</a>
      <a href="/branch/appt/Done" class="btn btn-outline-success">Completed</a>
      <a href="/branch/appt/Cancelled" class="btn btn-outline-secondary">Cancelled</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-hover" id="table">
                <thead>
                  <tr style="text-transform: uppercase">
                    <th>appointment date and time</th>
                    <th>vet</th>
                    <th>pet</th>
                    <th>status</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                    <tr>
                      <td>{{$appointment->AppointmentDate->date}} | {{$appointment->time_appointment}}</td>
                      <td>{{$appointment->vet_id}}</td>
                      <td>{{$appointment->AppointmentPet->name}}</td>
                      <td>{{$appointment->status}}</td>
                      <td width="15%">
                      <a href="" class="btn btn-sm btn-primary" data-id="{{$appointment->id}}" data-toggle="modal" data-target="#viewAppt">
                              View
                        </a>
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