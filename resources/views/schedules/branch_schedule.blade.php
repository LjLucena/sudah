@extends('layouts.ui')
@section('htitle') Schedules @endsection
@section('panel-title')
    {{$branch->name}} Branch Schedules
@endsection
@section('panel-option')
<a href="/new/sched/{{$branch->id}}" class="btn btn-sm btn-primary">
    Add New
</a>
<a href="/schedules" class="btn btn-sm btn-success">Back</a>
@endsection
@section('content')
  <div class="row" style="margin-top:20px;">
    <div class="col">
      <table class="table table-hover" id="printable">
              <thead>
                  <tr style="text-transform: uppercase;">
                      <th class="text-center">Date</th>
                      <th class="text-center">Vet</th>
                      <th class="text-center">MAX AM</th>
                      <th class="text-center">MAX PM</th>
                      <th class="text-center noExport" width="20%">Option</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($scheds as $sched)
                    <tr>
                      <td class="text-center">{{$sched->date}}</td>  
                      <td class="text-center">Dr. {{$sched->VetName->UserProfile->first_name}} {{$sched->VetName->UserProfile->middle_name}} {{$sched->VetName->UserProfile->last_name}} {{$sched->VetName->UserProfile->suffix}}</td>
                      <td class="text-center">{{$sched->am_max}}</td>
                      <td class="text-center">{{$sched->pm_max}}</td>
                      <td class="text-center">                         
                          <a href="/edit/branch_sched/{{$sched->id}}" class="btn btn-primary btn-sm" >Edit</a>
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