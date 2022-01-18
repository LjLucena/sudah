@extends('layouts.ui_secretary')
@section('htitle') SUDAH | Appointments @endsection
@section('panel-title')
   Appointment List
@endsection
@section('panel-option')
<input type="search" placeholder="Enter Key Search" id="">
<button class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
Search
</button>
<a href="" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>
@endsection
@section('content')
<div class="row"  style="margin-top:20px;margin-bottom:20px;">
    <div class="col-md">
      <a href="" class="btn btn-primary">All</a>
      <a href="" class="btn btn-outline-dark">Pending</a>
      <a href="" class="btn btn-outline-primary">Approved</a>
      <a href="" class="btn btn-outline-success">Completed</a>
      <a href="" class="btn btn-outline-danger">Cancelled</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
                <thead>
                  <tr style="text-transform: uppercase">
                    <th>branch Name</th>
                    <th>vet Name</th>
                    <th>appointment date and time</th>
                    <th>pet</th>
                    <th>status</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                    <tr>
                      <td>{{$appointment->AppointmentBranch->name}}</td>
                      <td>
                        @if($appointment->AppointmentVet)
                          {{$appointment->AppointmentVet->UserProfile->first_name}} {{$appointment->AppointmentVet->UserProfile->middle_name}} {{$appointment->AppointmentVet->UserProfile->last_name}}
                        @endif
                      </td>
                      <td>{{$appointment->date_appointment}} {{$appointment->time_appointment}}</td>
                      <td>{{$appointment->AppointmentPet->name}}</td>
                      <td>{{$appointment->status}}</td>
                      <td width="15%">
                        <a href="">
                          <button class="btn btn-sm btn-primary">
                            View Details
                          </button>
                        </a>
                        <a href="/approve/appoitnment/{{base64_encode($appointment->id)}}">
                          <button class="btn btn-sm btn-primary">
                            Approve
                          </button>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
    
        </table>
    </div>
</div>

@endsection