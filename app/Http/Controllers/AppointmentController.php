<?php

namespace App\Http\Controllers;
use App\Medical;
use App\Service;
use App\Appointment;
use App\Pet;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function approve($id){
        $id = base64_decode($id);
        $appointment = Appointment::find($id);
        $appointment->status = "Approved";
        $appointment->save();
        return redirect()->back()->with('success','Appoitnemnt Approvd');
    }
    
    public function vet_calendar(){
        $appointments = Appointment::where('vet_id',Auth::user()->id)->where('status','Approved')->get();
        return view('vet_portal.calendar')->with('appointments',$appointments);
    }
    public function view_appintment($id){
        $appointment = Appointment::find($id);
        $pet = Pet::find($appointment->pet_id);
        $med_records = Medical::where('pet_id',$pet->id)->get();
        // return ;
        $services = Service::whereIn('id',json_decode($appointment->services))->get();
        // return $services;/
        return view('vet_portal.appointment')->with('appointment', $appointment)->with('pet',$pet)->with('services',$services)->with('med_records',$med_records);
    }

    public function view_appointment($id){
        $appointment = Appointment::find($id);
        $pet = Pet::find($appointment->pet_id);
        $med_records = Medical::where('pet_id',$pet->id)->get();
        // return ;
        $services = Service::whereIn('id',json_decode($appointment->services))->get();
        // return $services;/
        return view('appointments.appointment')->with('appointment', $appointment)->with('pet',$pet)->with('services',$services)->with('med_records',$med_records);
    }
    
    public function slot($v,$d,$t){
        $v =base64_decode($v);
        $d =base64_decode($d);
        $t =base64_decode($t);
        $vet = User::find($v);
        $appointment_count = Appointment::where('vet_id',$v)->where('date_appointment',$d)->where('date_appointment',$t)->get();
        if($t == "08:00AM - 11:00AM")return $vet->am_app - count($appointment_count);
        else return $vet->pm_app - count($appointment_count);
    }
}
