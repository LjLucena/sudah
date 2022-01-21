@extends('layouts.ui_vet')
@section('htitle') Patients @endsection
@section('panel-title')
    Patient Medical History
@endsection
@section('panel-option')
<a href="{{URL::previous()}}" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row mt-5">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/'.$pet->image)}}" class="card-img-top"  />
                    <div class="card-body">
                        <h5 class="card-title"><strong>Name:</strong>{{$pet->name}}</h5>
                    </div>
                </div>
                <br />
            </div> 
        </div>
    </div>
    <div class="row">
        <div class="col-12">                      
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
    </div>
</div>
    
@endsection