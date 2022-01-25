@extends('layouts.ui')
@section('htitle') Activity Logs @endsection
@section('panel-title')
    Activity Logs
@endsection
@section('panel-option')
<div class="mt-3"></div>
@endsection
@section('content')
  <div class="row" style="margin-top:20px;">
    <div class="col">
      <table class="table table-hover" id="printable">
              <thead>
                  <tr style="text-transform: uppercase;">
                      <th class="text-center">Name</th>                                                      
                      <th class="text-center">Activity</th>
                      <th class="text-center">Date</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($logs as $log)
                    <tr>
                      <td class="text-center">
                          @if($log->activityUser)
                          {{$log->activityUser->UserProfile->first_name}} {{$log->activityUser->UserProfile->middle_name}} {{$log->activityUser->UserProfile->last_name}} {{$log->activityUser->UserProfile->last_name}}</td>
                          @endif
                      <td class="text-center">{{$log->activity}}</td>
                      <td class="text-center">{{$log->created_at}}</td>
                    </tr>
                @endforeach
              </tbody>
          </table>
    </div>
  </div>
@endsection

