<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medical;
use App\Pet;
use App\Appointment;

class MedicalController extends Controller
{
    public function save_assessment(Request $request,$id){
        
        $id = base64_decode($id);

        $appointment = Appointment::find($id);
        
        $appointment->status = 'Appointment Completed';
        $appointment->save();

        $pet = Pet::find($appointment->pet_id);

        $data = new Medical;
        $data->pet_id = $pet->id;
        $data->appointment_id = $appointment->id;
        $data->assessment = $request->assessment;
        $data->save();        
        return redirect()->back()->with('success','Completed Appointment');
    }
}
