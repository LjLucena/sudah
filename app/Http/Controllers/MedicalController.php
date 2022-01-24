<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medical;
use App\Pet;
use App\Service;
use App\Appointment;
use Auth;

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

    public function medical_history($id){
        $pet = Pet::find($id);
        $med_records = Medical::where('pet_id',$pet->id)->get();
        if(Auth::user()->role_id == 2)
        return view('vet_portal.medical_history')->with('pet',$pet)->with('med_records',$med_records);
        else
        return view('secretary_portal.medical_history')->with('pet',$pet)->with('med_records',$med_records);
    }
}
