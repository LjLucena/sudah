    @if(count($scheds) == 0 || $today == 'eve') 
    Slot:
    <input type="text" placeholder="No Slot Available" class="form-control" disabled>
    @else
        Veterinarian:
        <select name="vet" id="vet" onchange="showAvail()" class="form-control" required>
        @foreach($scheds as $sched)
            @if($sched->VetName)
                <option value="{{$sched->vet_id}}">{{$sched->VetName->UserProfile->first_name}} {{$sched->VetName->UserProfile->middle_name}} {{$sched->VetName->UserProfile->last_name}} {{$sched->VetName->UserProfile->suffix}}</option>
            @endif
        @endforeach
        </select>
    @endif
    <script>
        $( document ).ready(function() {
            var vetData = $('#vet option:selected').val();
            var d = document.getElementById('app_date').value;
            var branch = document.getElementById('branch').value;
            if (vetData != null) {
              $('#showSlot').show();
              $('#showSlot').load('/show/time/'+btoa(vetData)+'/'+btoa(branch)+'/'+btoa(d));
            } 
        });
    </script>