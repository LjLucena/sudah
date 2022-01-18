@extends('layouts.ui')
@section('htitle') Species @endsection

@section('panel-title')
  @if(isset($species))
    Edit Species Form
  @else
    New Species Form
  @endif
@endsection
@section('panel-option')
<a href="/species" class="btn btn-sm btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
    </svg>
    View Species
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
                            <label for="name">Species</label>
                            @if(isset($species))
                              <input type="hidden" name="id" id="species_id" class="form-control" class="form-control" value="{{ $species->id}}" />
                              <input type="text" name="name" id="name" class="form-control" class="form-control"  placeholder="Enter Species" required value="{{ $species->species_name}}" />
                            @else
                              <input type="text" name="name" id="name" class="form-control" class="form-control"  placeholder="Enter Species" required />
                            @endif
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