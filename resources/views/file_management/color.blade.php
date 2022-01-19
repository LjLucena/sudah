@extends('layouts.ui')
@section('htitle') File Management @endsection
@section('panel-title')
    Pet Color
@endsection
@section('panel-option')
<a href="/new/color" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    Add new 
</a>
@endsection
@section('content')
<div class="row" style="margin-top:20px;">
    <div class="col-12">
        <table class="table table-hover" id="table">
            <thead>
                <tr style="text-transform: uppercase;">                    
                    <th class="text-center">Color</th>
                    <th class="text-center">Option</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($colors as $color)
                      <tr>
                          <td class="text-center">{{$color->color_name}}</td>
                          <td class="text-center"><a class="btn btn-sm btn-primary" href="update/color/{{$color->id}}">Edit</a></td>
                      </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection