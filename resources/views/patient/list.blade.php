@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
    Patients
@endsection
@section('panel-option')
<input type="search" placeholder="Enter Key Search" id="">
<button class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
Search
</button>
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