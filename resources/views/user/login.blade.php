@extends('layouts.app')
@section('file-css')
<style>
    input[type=text],input[type=password]{
        width: 100% !important;
        border-top:0  !important;
        border-left:0 !important;
        border-right:0 !important;
        border-bottom:1px solid #ccc;
        padding:8px  !important;
    }
    .col-md-3,.col-md-9{
        padding: 8px 0px ;
    }
</style>
@endsection
@section('content')
<div class="container" style="background-color: #FFF;padding:25px;box-shadow:0 0 5px #CCC;">
    
            <div class="col">
                <a class="btn btn-success" href="{{route('index')}}">Back to Home</a>
            </div>
    <div class="row">
        <div class="col-md-4" style="padding-top:80px;padding-bottom:80px;">
            <center>
                <img src='{{asset('img/logo.jpg')}}' width="50%" align="center" />
                <h3>SUDAH | Login</h3>
            </center>    
            <form action="{{ route('AttempLogin') }}" method="post">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-12">
                           
                        <label for="u"><strong>Username:</strong></label>
                        <input type="text" class="form-control" name="username" id="u" placeholder="Please Enter Username">
                        @error('u')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="p"><strong>Password:</strong></label>
                        <input type="password" class="form-control"  name="password" id="p"  placeholder="Please Enter Password">
                        @error('p')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <button class="btn btn-block btn-primary">Login</button>
                    </div>
                </div>
            </form>
            <div class="row mt-2">
                <div class="col-md">
                    <a href="{{ route('forget.password.get') }}">Forgot Password?</a>
                </div>
            </div>
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
@section('scripts')
    <script>
        window.mobileAndTabletCheck = function() {
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
        };
    </script>
@endsection