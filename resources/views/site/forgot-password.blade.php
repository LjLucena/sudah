@extends('layouts.app')
  
@section('content')
<div class="container" style="background-color: #FFF;padding:25px;box-shadow:0 0 5px #CCC;">
    
            <div class="col">
                <a class="btn btn-success" href="/login">Back to Login</a>
            </div>
    <div class="row">
        <div class="col-md-4" style="padding-top:80px;padding-bottom:80px;">
            <center>
                <img src='{{asset('img/logo.jpg')}}' width="50%" align="center" />
                <h3>SUDAH | Login</h3>
            </center>  
            
        </div>
        <div class="col-md-8" style="background-image:url('{{asset('/img/logo.jpg')}}'); background-size:auto 100%;background-repeat:no-repeat;background-position:center">
        </div>
    </div>
</div>
    {{-- <div class="containter">
        <div class="row login">
            <div class="col-md-3" style="margin: 0 auto;">
                <div class="card" style="padding: 15px">
                    <div class="card-body text-center">
                        <h4>Sudah</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
    
                            @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                            @endif
                            
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                        </div>
                       
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection