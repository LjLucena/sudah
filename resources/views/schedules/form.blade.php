@extends('layouts.ui')
@section('htitle') Schedules @endsection

@section('panel-title')
Add Schedule for {{$branch->name}} Branch
@endsection
@section('panel-option')
<a href="/view/branch_schedules/{{$branch->id}}" class="btn btn-sm btn-primary">Back</a>
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
                            <input type="hidden" name="branch" value="{{$branch->id}}">
                            <input type="hidden" id="disable" data-date="{{$disableDate}}?>">
                            <label for="vet">Vet:</label>
                            <select required name="vet" class="form-control">
                                @if(count($accounts) == 1)                                    
                                <option value="{{$accounts[0]->id}}">Dr. {{$accounts[0]->UserProfile->first_name}} {{$accounts[0]->UserProfile->middle_name}} {{$accounts[0]->UserProfile->last_name}} {{$accounts[0]->UserProfile->suffix}}</option>
                                @else
                                    @foreach ($accounts as $vet)
                                    <option value="{{$vet->id}}">Dr. {{$vet->UserProfile->first_name}} {{$vet->UserProfile->middle_name}} {{$vet->UserProfile->last_name}} {{$vet->UserProfile->suffix}}</option>
                                    @endforeach
                                @endif
                            </select>
                            
                            
                            <label for="date">Select Date:</label>
                              <input type="" autocomplete="off" name="date" id="datepicker" class="form-control" placeholder="Select date" required/>
                              <input type="hidden" id="check" />
                            <!--<label for="date">Select Date:</label>  
                            <input name="dates" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%" required>
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span> <i class="fa fa-caret-down"></i>-->
                        </div>
                        <div class="col-md-6">                 
                                <label for="am">Max # of Appointment for AM:</label>
                              <input type="number" name="am" id="am" class="form-control"  placeholder="AM max appointment..." value="10" required />
                                <label for="pm">Max # of Appointment for PM:</label>
                              <input type="number" name="pm" id="pm" class="form-control"  placeholder="PM max appointment..." value="10" required/>
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
<script>
    
    function check(){
                console.log('hi');
            }
</script>