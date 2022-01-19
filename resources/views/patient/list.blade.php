@extends('layouts.ui')
@section('htitle') Patients @endsection
@section('panel-title')
    Patients
@endsection
@section('panel-option')
<div style="margin:20px;"></div>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="table">
            <thead>
                <tr style="text-transform: uppercase;">  
                    <th class="text-center">Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Color</th>
                    <th class="text-center">Species</th>
                    <th class="text-center">Breed</th>
                    <th class="text-center">Weight</th>
                    <th class="text-center">Birthday</th>
                    <th class="text-center">Owner</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $pet)
                <tr>
                    <td class="text-center">{{$pet->name}}</td>
                    <td class="text-center">{{$pet->gender}}</td>
                    <td class="text-center">{{$pet->pet_color->color_name}}</td>
                    <td class="text-center">{{$pet->pet_species->species_name}}</td>
                    <td class="text-center">{{$pet->pet_breed->breed_name}}</td>
                    <td class="text-center">{{$pet->weight}}</td> 
                    <td class="text-center">{{$pet->bday}}</td>
                    <td class="text-center">{{$pet->owner->UserProfile->first_name}} {{$pet->owner->UserProfile->middle_name}} {{$pet->owner->UserProfile->last_name}} {{$pet->owner->UserProfile->suffix}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection