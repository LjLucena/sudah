@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    Patients
@endsection
@section('panel-option')
<input type="search" placeholder="Search...." id="">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr style="text-transform: uppercase;">  
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Color</th>
                    <th>Species</th>
                    <th>Breed</th>
                    <th>Weight</th>
                    <th>Birthday</th>
                    <th>Owner</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    </div>
</div>

@endsection