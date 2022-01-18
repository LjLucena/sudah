@extends('layouts.ui')
@section('htitle') Accounts @endsection
@section('panel-title')
   Branches
@endsection
@section('panel-option')
<input type="search" placeholder="Enter Key Search" id="">
<button class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
Search
</button>
<a href="/new/branch" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr style="text-transform: uppercase;">                    
                    <th>Branch Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($branches as $branch)
                  <tr>
                    <td>{{$branch->name}}</td>
                    <td>{{$branch->address}}</td>
                    <td>{{$branch->b_number}}</td>
                    <td></td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection