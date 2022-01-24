@extends('layouts.ui_secretary')
@section('htitle') SUDAH | Appointments @endsection
@section('panel-title')
   Set Appointment for Pet Name: {{$pet->name}}
@endsection
@section('panel-option')
<a href="/portal/branch" class="btn btn-sm btn-primary">Back</a>
@endsection
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <form action="" method="post"> @csrf
            <div class="row">
                <div class="col-md">
                    <input type="hidden" name="pet" value="{{$pet->id}}">
                    <label for="date">Select Date:</label>
                    <input type="date" name="date" id="date" placeholder="yyyy-mm-dd" class="form-control">
                    <label for="date">Select Time:</label>
                    <select name="time" id="time" class="form-control" required>
                        <option value="08:00AM - 12:00AM">AM</option>
                        <option value="01:00PM - 05:00PM">PM</option>
                    </select>
                </div>
            </div> <br>
            <label for="services">Select Service/s:</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="checkbox" name="services[]" id="s18" value="18" Checked> <label for="s18">Follow Up: Check Up</label><br />                       
                    <input type="checkbox" name="services[]" id="s2" value="2"> <label for="s2">Vaccination</label><br />                 
                    <input type="checkbox" name="services[]" id="s3" value="3"> <label for="s3">Deworming</label><br />         
                    <input type="checkbox" name="services[]" id="s4" value="4"> <label for="s4">Pet Grooming</label><br />   
                    <input type="checkbox" name="services[]" id="s5" value="5"> <label for="s5">Vet Dental Care</label><br />             
                    <input type="checkbox" name="services[]" id="s6" value="6"> <label for="s6">Laboratory Test</label><br /> 
                </div>
                <div class="col-md-6">
                    <input type="checkbox" name="services[]" id="s7" value="7"> <label for="s7">Surgery</label><br />             
                    <input type="checkbox" name="services[]" id="s8" value="8"> <label for="s8">Confinement</label><br />             
                    <input type="checkbox" name="services[]" id="s9" value="9"> <label for="s9">X-ray</label><br />             
                    <input type="checkbox" name="services[]" id="s10"value="10"> <label for="s10"> Pet Lodging</label><br />     
                    <input type="checkbox" name="services[]" id="s11"value="11"> <label for="s11"> Pet Wellness</label><br />
                </div>
            </div>
            <button type="submit" class="btn btn-md btn-success float-right">Save</button>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    $(function(){


    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate()+1;
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;   
    $('#date').attr('min', maxDate);
});
</script>
@endsection