    <div class="col-md-12"> 
        Select Pet:
        <select name="patient_id" id="pet" class="form-control" required>
            <option value="">-- Select Pet --</option>
                @foreach ($pets as $pet)
                    <option value="{{$pet->id}}">{{$pet->name}}</option>
                @endforeach
        </select>
    </div>