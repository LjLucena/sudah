<form action="" method="post">
            @csrf
              <div class="row mt-2">
                <div class="col-md-12">
                  <h4>Appointment Details</h4>
                      <div class="row">
                          <input type="hidden" name="branch_id" value="{{$branch}}">
                        <div class="col-md-6">
                            Available Veterinarian:
                            <select name="vet_id" id="vet_data" class="form-control" onload="test()" data-vet="1" required>
                                    @foreach ($vets as $vet)
                                    <option value="{{$vet->id}}">{{$vet->UserProfile->first_name}} {{$vet->UserProfile->middle_name}} {{$vet->UserProfile->last_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                            Date of Appointment
                            <input type="date"  onchange="showTime()" name="date_appointment" min='{{date('Y')}}-{{date('m')}}-{{(date('d')+1)<=9 ? '0'.date('d')+1 : date('d')+1}}' class="form-control" id="app_date" required>
                        </div>
                        <div class="col-md-4">
                            Time of Appointment
                            <select name="time_appointment" id="app_time" class="form-control" disabled required>
                                <option value="">-- Select Time --</option>
                                <option value="08:00AM - 11:00AM">Morning (08:00AM - 11:00AM)</option>
                                <option value="01:00PM - 04:00PM">Afternoon (01:00PM - 04:00PM)</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            Slot
                            <div id='slot'></div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              
                            Select Pet:
                            <select name="patient_id" id="pet" class="form-control" disabled required>
                                <option value="">-- Select Pet --</option>
                                @foreach ($patients as $patient)
                                    <option value="{{$patient->id}}">{{$patient->name}}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Reason
                          <textarea name="reason" id="reason" placeholder="Enter Reason" class="form-control"  disabled required></textarea>
                        </div>
                      </div>
                      <div class="row">  
                        <h3>Services</h3>
                        <div class="col-md-6">
                          <input type="checkbox" name="services[]" id="s1" value="1" Checked> <label for="s1">Consultation (Php 100)</label><br />                       
                          <input type="checkbox" name="services[]" id="s2" value="2"> <label for="s2">Vaccination (Php 350)</label><br />                 
                          <input type="checkbox" name="services[]" id="s3" value="3"> <label for="s3">Deworming (Php 100)</label><br />         
                          <input type="checkbox" name="services[]" id="s4" value="4"> <label for="s4">Pet Grooming (Php 300)</label><br />   
                          <input type="checkbox" name="services[]" id="s5" value="5"> <label for="s5">Vet Dental Care</label><br />             
                          <input type="checkbox" name="services[]" id="s10"value="10"> <label for="s10"> Pet Lodging</label><br />     
                          <input type="checkbox" name="services[]" id="s11"value="11"> <label for="s11"> Pet Wellness</label><br />
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <br>
                      <button class="btn btn-primary" id="appoint" type="submit">Set Appointment</button> <span id="error" style="color:#F00"></span>
                  </div>
                </div>
            </div>
            
          </form>