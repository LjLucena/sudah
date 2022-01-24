@extends('layouts.ui_secretary')
@section('htitle') SUDAH | Appointment - Pet Details @endsection
@section('panel-title')
   Pet Details
@endsection
@section('panel-option')
<a href="{{URL::previous()}}" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row mt-3">
                    <div class="col-md">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Name:</strong></td>
                                            <td>{{$pet->name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Species:</strong></td>
                                            <td>{{$pet->pet_species->species_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Breed:</strong></td>
                                            <td>{{$pet->pet_breed->breed_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Color:</strong></td>
                                            <td>{{$pet->pet_color->color_name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Weight:</strong></td>
                                            <td>{{$pet->weight}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date of Birth</strong></td>
                                            <td>{{$pet->bday}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">                      
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
@endsection