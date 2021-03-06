<?php

namespace App\Http\Controllers;
use App\Medical;
use App\Service;
use App\Appointment;
use App\Pet;
use App\User;
use App\Schedules;
use Auth;

use App\Account;
use App\Branch;
use App\Species;
use App\Profile;
use App\ActivityLog;
use DB;

use Mail;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function approve($id){
        $id = base64_decode($id);
        $appointment = Appointment::find($id);
        $appointment->status = "Approved";
        $appointment->save();

        $user = User::find($appointment->user_id);
        $name = $user->UserProfile->first_name;
        $email = $user->email;
        $date = $appointment->date_appointment;
        Mail::send('email.appointment_approve', ['date' => $date, 'name'=> $name ], function($message) use ($email) {

            $message->to($email)->subject('Appointment Approved!');

        });

        $activity = new ActivityLog;
        $activity->user_id = Auth::user()->id;
        $activity->activity = "Approve Appointment for ".$appointment->AppointmentPet->name;
        $activity->save();

        return redirect()->back()->with('success','Appointment Approved');
    }
    
    public function vet_calendar(){
        $appointments = Appointment::where('vet_id',Auth::user()->id)->where('status','Approved')->orWhere('status', 'Done')->get();
        return view('vet_portal.calendar')->with('appointments',$appointments);
    }
    public function view_appintment($id){
        $id = base64_decode($id);
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

    public function all_appt(){
        $appointments = Appointment::where('branch_id',Auth::user()->branch_id)->get();   
        
        return view('branch_portal.all_list')->with('appointments',$appointments);
    }

    public function appt_list($status){
        $appointments = Appointment::where('branch_id',Auth::user()->branch_id)->where('status', $status)->get();   
        return view('branch_portal.list_appt')->with('appointments',$appointments)->with('status', $status);
    }

    public function view($id){
        $appointment = Appointment::find($id);
        $pet = Pet::find($appointment->pet_id);   
        $user = Auth::user()->role_id;     
        $services = Service::whereIn('id',json_decode($appointment->services))->get();
        return view('branch_portal.appt_details')->with('appointment', $appointment)->with('pet',$pet)->with('services',$services)->with('userRole',$user);
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

    public function cancel_appt($id){
        $appointment = Appointment::find($id);
        $pet = Pet::find($appointment->pet_id);
        $appointment->status = "Cancelled";
        $success = 'Appointment for '.$pet->name.' Cancelled!';
        $appointment->save();

        $schedule = Schedules::find($appointment->schedule_id);
            if ($appointment->time_appointment == "08:00AM - 12:00AM") {
                $schedule->am_max = $schedule->am_max + 1;
            } else {
                $schedule->pm_max = $schedule->pm_max + 1;
            }
            $schedule->day_max = $schedule->pm_max + $schedule->am_max;
            $schedule->save();

            $date= $appointment->date_appointment;

            $user = User::find(Auth::user()->id);
            $email = $user->email;
            $name = $user->UserProfile->first_name;

            Mail::send('email.appointment_client_cancel', ['date' => $date,'name'=>$name], function($message) use ($date, $email) {

                $message->to($email)->subject('Appointment Cancellation on '.$date.' ');

            });

            $activity = new ActivityLog;
            $activity->user_id = Auth::user()->id;
            $activity->activity = "Cancel Appointment for ".$pet->name;
            $activity->save();

        return redirect()->back()->with('success',$success);
    }

    public function cancel(Request $request){
        $appointment = Appointment::find($request->id);
        $pet = Pet::find($appointment->pet_id);
        $appointment->status = "Cancelled";
        $appointment->cancel_reason = $request->cancel_reason;
        $appointment->save();
        $success = 'Appointment for Pet '.$pet->name.' Cancelled!';

        $schedule = Schedules::find($appointment->schedule_id);
            if ($appointment->time_appointment == "08:00AM - 12:00AM") {
                $schedule->am_max = $schedule->am_max + 1;
            } else {
                $schedule->pm_max = $schedule->pm_max + 1;
            }
            $schedule->day_max = $schedule->pm_max + $schedule->am_max;
            $schedule->save();

            $user = User::find($appointment->user_id);
            $name = $user->UserProfile->first_name;
            $email = $user->email;
            $date = $appointment->date_appointment;
            if ($appointment->status == "Approved") {
                Mail::send('email.appointment_cancel', ['date' => $date, 'name'=> $name ,'reason'=>$appointment->cancel_reason], function($message) use ($email) {

                    $message->to($email)->subject('Appointment Cancellation!');
        
                });
            } else {
                Mail::send('email.appointment_cancel_pending', ['date' => $date, 'name'=> $name ,'reason'=>$appointment->cancel_reason], function($message) use ($email) {

                    $message->to($email)->subject('Appointment Cancellation!');
        
                });
            }
            $activity = new ActivityLog;
            $activity->user_id = Auth::user()->id;
            $activity->activity = "Cancel Appointment for ".$pet->name;
            $activity->save();
            
        return redirect()->back()->with('success',$success);
    }

    public function add_appt($id){
        $id = base64_decode($id);
        $pet = Pet::find($id);
        $services = Service::all();

        return view('branch_portal.set_appointment')->with('pet', $pet)->with('services', $services);
    }

    public function save_appt(Request $request){
        // return dd($request);
        $check = Appointment::where('date_appointment',$request->date_appointment)->where('pet_id',$request->patient_id)->whereIn('status',['Approved'])->first();
        if ($check == null) {
            $pet = Pet::find($request->pet);
            $vet = Schedules::where('date', $request->date)->where('branch_id', Auth::user()->branch_id)->first();

            $data = new Appointment;
            $data->user_id = $pet->user_id;
            $data->pet_id= $pet->id;
            $data->branch_id = Auth::user()->branch_id;
            $data->vet_id = $vet->vet_id;
            $data->schedule_id = $vet->id;
            $data->date_appointment = $request->date;
            $data->time_appointment = $request->time;
            $data->services = json_encode($request->services);
            $data->status = "Approved";
            $data->save();

            $date= $date->date_appointment;

            $user = User::find($data->user_id);
            $email = $user->email;
            $name = $user->UserProfile->first_name;

            Mail::send('email.appointment_made_Secretary', ['date' => $date,'name'=>$name,'pet'=>$pet->name], function($message) use ($date, $email) {

                $message->to($email)->subject('Scheduled Appointment on '.$date.' ');
            
            });

            $activity = new ActivityLog;
            $activity->user_id = Auth::user()->id;
            $activity->activity = "Added Appointment for ".$pet->name;
            $activity->save();

            return redirect()->back()->with('success','Appointment Added Successfully');
        }
        
        else {
            $pet = Pet::find($request->patient_id);
            return redirect()->back()->with('fail','Appointment not Allowed! Pet: '.$pet->name.' has already a "'.$check->status.'" appointment');
        }
    }
}
