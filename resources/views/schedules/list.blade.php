@extends('layouts.ui')
@section('htitle') Schedules @endsection
@section('panel-title')
    Schedules
@endsection
@section('panel-option')
<div style="height:20px;"></div>
@endsection
@section('content')
  <div class="row" style="margin-top:20px;">
    <div class="col">
      <table class="table table-hover" id="table">
              <thead>
                  <tr style="text-transform: uppercase;">
                      <th class="text-center">Branch</th>
                      <th class="text-center" width="20%">Option</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($branches as $branch)
                    <tr>
                      <td class="text-center">{{$branch->name}}</td>
                      <td class="text-center">                         
                          <a href="/view/branch_schedules/{{$branch->id}}" class="btn btn-primary btn-sm" >View Schedules</a>
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