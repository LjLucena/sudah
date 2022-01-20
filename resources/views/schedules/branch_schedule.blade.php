@extends('layouts.ui')
@section('htitle') Schedules @endsection
@section('panel-title')
    {{$branch->name}} Branch Schedules
@endsection
@section('panel-option')
<a href="/new/sched/{{$branch->id}}" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add New Schedule
</a>
<a href="/schedules" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
  <div class="row" style="margin-top:20px;">
    <div class="col">
      <table class="table table-hover" id="table">
              <thead>
                  <tr style="text-transform: uppercase;">
                      <th class="text-center">Branch</th>
                      <th class="text-center">Vet</th>
                      <th class="text-center">Date</th>
                      <th class="text-center">MAX AM</th>
                      <th class="text-center">MAX PM</th>
                      <th class="text-center" width="20%">Option</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($scheds as $sched)
                    <tr>
                      <td class="text-center">{{$branch->name}}</td>
                      <td class="text-center">Dr. {{$sched->Vet->UserProfile->first_name}} {{$sched->Vet->UserProfile->middle_name}} {{$sched->Vet->UserProfile->last_name}} {{$sched->Vet->UserProfile->suffix}}</td>
                      <td class="text-center">{{$sched->date}}</td>
                      <td class="text-center">{{$sched->am_max}}</td>
                      <td class="text-center">{{$sched->pm_max}}</td>
                      <td class="text-center">                         
                          <a href="/edit/branch_sched/{{$sched->id}}" class="btn btn-primary btn-sm" >Edit Max Appointment</a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
    </div>
  </div>
@endsection



@section('modal')
<div class="modal fade" id="deactivate" tabindex="-1" role="dialog" aria-labelledby="deactivateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deactivate">Deactivate Account?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button href="" class="btn btn-danger" onclick="submit_form()">Yes</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
@endsection