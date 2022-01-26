@if($slot->am_max != 0 && $slot->pm_max != 0)
                        <div class="col-md-6">
                            Time of Appointment
                            <input type="hidden" id="amMax" value="{{$slot->am_max}}">
                            <input type="hidden" id="pmMax" value="{{$slot->pm_max}}">
                            <input type="hidden" name="sched" value="{{$slot->id}}">
                            <select name="time_appointment" id="app_time" class="form-control" required>
                                <option value="">-- Select Time --</option>
                                <option value="08:00AM - 12:00AM">Morning (08:00AM - 11:00AM)</option>
                                <option value="01:00PM - 05:00PM">Afternoon (01:00PM - 04:00PM)</option>
                            </select>
                        </div>
                        <div class="col-md-6" id="slot">
                        
                        </div>
@elseif($slot->am_max == 0 && $slot->pm_max != 0)
                        <div class="col-md-6">
                            Time of Appointment
                            <input type="hidden" id="pmMax" value="{{$slot->pm_max}}">
                            <input type="hidden" name="sched" value="{{$slot->id}}">
                            <select name="time_appointment" id="app_time" class="form-control" required>
                                <option value="">-- Select Time --</option>
                                <option value="08:00AM - 12:00AM" disabled="true">Morning (08:00AM - 11:00AM)</option>
                                <option value="01:00PM - 05:00PM">Afternoon (01:00PM - 04:00PM)</option>
                            </select>
                        </div>
                        <div class="col-md-6" id="slot">
                        
                        </div>
@elseif($slot->am_max != 0 && $slot->pm_max == 0)
                        <div class="col-md-6">
                            Time of Appointment
                            <input type="hidden" id="amMax" value="{{$slot->am_max}}">
                            <input type="hidden" name="sched" value="{{$slot->id}}">
                            <select name="time_appointment" id="app_time" class="form-control" required>
                                <option value="">-- Select Time --</option>
                                <option value="08:00AM - 12:00AM">Morning (08:00AM - 11:00AM)</option>
                                <option value="01:00PM - 05:00PM" disabled="true">Afternoon (01:00PM - 04:00PM)</option>
                            </select>
                        </div>
                        <div class="col-md-6" id="slot">
                        
                        </div>
@else
<div class="col-md">
    <span class="text-danger">No Slot Available</span>
</div>     
@endif                   
                    
<script>
    $( document ).ready(function() {
            $('#app_time').change(function(){
            var d = document.getElementById('app_date').value;
                var time = $('#app_time option:selected').val();
                if (time == "08:00AM - 12:00AM") {
                    var am = $('#amMax').val();
                    $('#slot').html('Slot:<input type="text" placeholder="'+am+'" class="form-control" disabled>');
                } else {
                    var pm = $('#pmMax').val();
                    $('#slot').html('Slot:<input type="text" placeholder="'+pm+'" class="form-control" disabled>');
                }
                $('#pet').removeAttr('disabled');

            });
        });
</script>
                        