
<form action="" method="post">
                        @csrf
             <div class="row mt-2">
                <div class="col-md-12">
                  <h4>Appointment Details</h4>
                      
                      <div class="row">
                        <div class="col-md">
                            <input type="hidden" name="branch_id" value="{{$branch}}">
                            Date of Appointment
                            <input type="date"  onchange="CheckAvailabilty()" name="date_appointment" min='<?php echo date("Y-m-d"); ?>' class="form-control" id="app_date" required>
                        </div>
                        <div class="col-md" id="showAvail">

                        </div>
                          
                      </div>
                      <div class="row" id="showSlot">

                      </div>
                      <div class="row" id="showPet">
                        <div class="col-md-12"> 
                            Select Pet:
                            <select name="patient_id" id="pet" class="form-control" disabled required>
                                <option value="">-- Select Pet --</option>
                                    @foreach ($pets as $pet)
                                        <option value="{{$pet->id}}">{{$pet->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Reason
                          <textarea name="reason" id="reason" placeholder="Enter Reason" class="form-control" required></textarea>
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
                      <button class="btn btn-primary" type="submit">Set Appointment</button> <span id="error" style="color:#F00"></span>
                  </div>
                </div>
            </div>
            
          </form>