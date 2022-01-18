@extends('layouts.ui_vet')
@section('htitle') SUDAH | Appointments @endsection
@section('panel-title')
   Appointment List
@endsection
@section('panel-option')

@endsection
@section('content')
{{-- <table class="table">
  <thead>
    <tr>
      <th>Appointment Date</th>
      <th>Client Name</th>
    </tr>
  </thead>
  <tbody>
@foreach($appointments as $appointment)
<tr>
  <td>{{$appointment->date_appointment}}</td>
  <td>{{$appointment->AppointmentUser->UserProfile->first_name}} {{$appointment->AppointmentUser->UserProfile->middle_name}} {{$appointment->AppointmentUser->UserProfile->last_name}}</td>
</tr>
@endforeach

</tbody>
</table> --}}


  <link href='{{asset('lib/main.css')}}' rel='stylesheet' />
  <script src='{{asset('lib/main.js')}}'></script>
  <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        height: '100%',
        expandRows: true,
        slotMinTime: '07:00',
        slotMaxTime: '18:00',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        initialView: 'dayGridMonth',
        // initialDate: '{{date('Y-m-d')}}',  
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        selectable: true,
        nowIndicator: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
          @foreach($appointments as $appointment)
          @if($appointment->time_appointment ==  '01:00PM - 04:00PM') 
          {
            title: '{{$appointment->AppointmentUser->UserProfile->first_name}} {{$appointment->AppointmentUser->UserProfile->middle_name}} {{$appointment->AppointmentUser->UserProfile->last_name}}',
            start: '{{$appointment->date_appointment}}T13:00:00',
            end: '{{$appointment->date_appointment}}T16:00:00',
            url: '/view/appointment/{{base64_encode($appointment->id)}}'
          },
          @else 
          {
            title: '{{$appointment->AppointmentUser->first_name}} {{$appointment->AppointmentUser->middle_name}} {{$appointment->AppointmentUser->last_name}}',
            start: '{{$appointment->date_appointment}}T08:00:00',
            end: '{{$appointment->date_appointment}}T11:00:00',
            url: '/view/appointment/{{base64_encode($appointment->id)}}'
          },
          @endif
        
          @endforeach
      ]
      });

      calendar.render();
    });
  </script>
  <style>

    
      #calendar-container {
        position: fixed;
        height: 80vh;
        width: 80%;
      }
    
      .fc-header-toolbar {
        /*
        the calendar will be butting up against the edges,
        but let's scoot in the header's buttons
        */
        padding-top: 1em;
        padding-left: 1em;
        padding-right: 1em;
      }
    
    </style>

  <div class="row">
      <div class="col-12">
          
    <div id='calendar-container'>
      <div id='calendar'></div>
    </div>
      </div>
  </div>

@endsection