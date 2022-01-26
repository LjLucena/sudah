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
        <table class="table table-hover" id="printable">
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
                @foreach ($pets as $pets)
                <tr>
                    <td class="text-center">{{$pets->name}}</td>
                    <td class="text-center">{{$pets->gender}}</td>
                    <td class="text-center">{{$pets->pet_color->color_name}}</td>
                    <td class="text-center">{{$pets->pet_species->species_name}}</td>
                    <td class="text-center">{{$pets->pet_breed->breed_name}}</td>
                    <td class="text-center">{{$pets->weight}}</td> 
                    <td class="text-center">{{$pets->bday}}</td>
                    <td class="text-center">
                        @if($pets->owner)
                        {{$pets->owner->UserProfile->first_name}} {{$pets->owner->UserProfile->middle_name}} {{$pets->owner->UserProfile->last_name}} {{$pets->owner->UserProfile->suffix}}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection