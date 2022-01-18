@extends('layouts.ui')
@section('htitle') Breed @endsection

@section('panel-title')
  @if(isset($breed))
    Edit Breed Form
  @else
    New Breed Form
  @endif
@endsection
@section('panel-option')
<a href="/breed" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    View Breeds
</a>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <br />
        <div class="row">
            <div class="col-12">
                <form action="" method="post">                  
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Breed Name</label>
                            @if(isset($breed))
                              <input type="hidden" name="id" id="breed_id" class="form-control" class="form-control"  placeholder="Enter Breed Name" value="{{ $breed->id}}" />
                              <input type="text" name="name" id="name" class="form-control" class="form-control"  placeholder="Enter Breed Name" required value="{{ $breed->breed_name}}" />
                            @else
                              <input type="text" name="name" id="name" class="form-control" class="form-control"  placeholder="Enter Breed Name" required />
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="Contact">Species</label>
                            <select required name="species" class="form-control">
                              <option disabled selected>Select Species</option>
                              @foreach ($species as $data)
                                @if(isset($breed))
                                  @if($breed->species_id === $data->id)
                                    <option value="{{$data->id}}" selected>{{$data->species_name}}</option>
                                  @else
                                    <option value="{{$data->id}}">{{$data->species_name}}</option>
                                  @endif
                                @else
                                  <option value="{{$data->id}}">{{$data->species_name}}</option>
                                @endif
                              @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection