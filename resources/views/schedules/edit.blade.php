@extends('layouts.ui')
@section('htitle') Schedules @endsection

@section('panel-title')
{{$branch->name}} Branch Schedules
@endsection
@section('panel-option')
<a href="/view/branch_schedules/{{$branch->id}}" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <br />
        <div class="row">
            <div class="col-12">
                <form action="" method="post">                  
                    @csrf
                    <div class="row">
                        <div class="col-md-6">                            
                        <input type="hidden" name="id" id="sched_id" class="form-control" value="{{ $sched->id}}" />
                            <h4>DATE: {{$sched->date}}</h4> <br>
                                <label for="am">Max # of Appointment for AM:</label>
                              <input type="number" name="am" id="am" class="form-control"  placeholder="AM max appointment..." required value="{{ $sched->am_max}}" />
                                <label for="pm">Max # of Appointment for PM:</label>
                              <input type="number" name="pm" id="pm" class="form-control"  placeholder="PM max appointment..." required value="{{ $sched->pm_max}}" />
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection