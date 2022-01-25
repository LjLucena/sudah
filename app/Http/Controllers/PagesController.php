<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pet;
use Auth;
use App\Account;
use App\Branch;
use App\Species;
use App\Breed;
use App\Color;
use App\Profile;
use App\User;
use App\Appointment;
use App\Schedules;
use Carbon\Carbon;
use Mail;

class PagesController extends Controller
{
    public function homepage(){
        return view ('site.index');
    }
    public function d_services(){
        return view ('site.d_services'); 
    }
    public function gw_services(){
        return view ('site.gw_services');
    }
    public function other_services(){
        return view ('site.other_services');
    }
    public function register(){
        return view ('site.register');
    }

    public function show_form($id){
        $pet = Pet::where('user_id',Auth::user()->id)->get();        
        $vets = Account::where('role_id','2')->where('branch_id',$id)->where('stat',1)->get(); 
        $sched = Schedules::where(['branch_id'=> $id,'date'=>date("Y-m-d")])->get();
        
        return view ('site.set_appointment_form')->with('pets', $pet)->with('branch',$id)->with('scheds',$sched);
    }

    public function available($date, $branch){  
        $branch = base64_decode($branch);   
        $date = base64_decode($date);   
        if ($date == date('Y-m-d')) {
            $time = date('H:i:s', time());
            if ($time < "09:00:00") {
                $scheds = Schedules::where(['branch_id'=>$branch,'date'=>$date,['day_max','!=', 0]])->get();
                return view ('site.showAvail')->with('scheds', $scheds)->with('today', '');
            }
            elseif($time > "09:00:00" && $time < "15:00:00"){
                $scheds = Schedules::where('branch_id',$branch)->where('date',$date)->where('pm_max','!=',0)->get();
                return view ('site.showAvail')->with('scheds', $scheds)->with('today', '');
            }
            else {
                $scheds = 0;
                return view ('site.showAvail')->with('scheds', $scheds)->with('today', 'eve');
            }
            
        } else {
            $scheds = Schedules::where('branch_id',$branch)->where('date',$date)->get();
            return view ('site.showAvail')->with('scheds', $scheds)->with('date',$date)->with('today', 'not');
        }
        
    }

    public function show_time($id, $branch, $date){   
        $id = base64_decode($id);  
        $date = base64_decode($date);  
        $branch = base64_decode($branch);  
        $sched = Schedules::where('vet_id',$id)->where('branch_id',$branch)->where('date', $date)->first();
        return view ('site.time')->with('slot', $sched);
    }

    public function show_pet($date){ 
        $pets = Pet::where('user_id',Auth::user()->id)->get();
        foreach($pets as $pets){
            $unavailablePets []= Appointment::where(['date_appointment'=>$date,'pet_id'=>$pets->id])->whereIn('status',['Approved','Pending'])->get(['pet_id']);
        }
        for ($i=0; $i < $unavailablePets; $i++) { 
            $unavailablePets[$i]->pet_id;
        }
        return $p;
        //$pet = Pet::where('user_id',Auth::user()->id)->whereNotIn('id',[])->get();  */        
        //return view ('site.show_pet')->with('pets', $pets);
    }

    public function appointment(){
        // return Auth::user();
        $patients = Pet::where('user_id',Auth::user()->id)->get();
        $branches = Branch::all();
        if(count($patients) == 0) 
        return redirect('/new/pet')->with('info',"Please save your pet's information first");
        else
        return view ('site.appointment')->with('branches',$branches);
        //return view ('site.appointment')->with('patients',$patients)->with('branches',$branches)->with('vets',$vets );
        
    }
    public function save_appointment(Request $request){
        // return dd($request);
        $check = Appointment::where('date_appointment',$request->date_appointment)->where('pet_id',$request->patient_id)->whereIn('status',['Approved','Pending'])->first();
        if ($check == null) {
            $data = new Appointment;
            $data->user_id = Auth::user()->id;
            $data->pet_id=$request->patient_id;
            $data->branch_id = $request->branch_id;
            $data->vet_id = $request->vet;
            $data->schedule_id = $request->sched;
            $data->date_appointment = $request->date_appointment;
            $data->time_appointment = $request->time_appointment;
            $data->reason = $request->reason;
            $data->services = json_encode($request->services);
            $data->status = "Pending";
            $data->save();

            $schedule = Schedules::find($request->sched);
            if ($request->time_appointment == "08:00AM - 12:00AM") {
                $schedule->am_max = $schedule->am_max - 1;
            } else {
                $schedule->pm_max = $schedule->pm_max - 1;
            }
            $schedule->day_max = $schedule->pm_max + $schedule->am_max;
            $schedule->save();

            $date= $request->date_appointment;

            $user = User::find(Auth::user()->id);
            $email = $user->email;

            Mail::send('email.appointment', ['date' => $date], function($message) use ($date, $email) {

                $message->to($email)->subject('Request for Appointment on '.$date.' ');

            });
            return redirect('/list/appointments')->with('success','Appointment Requested,  Please wait for confirmation/approval');
        } else {
            $pet = Pet::find($request->patient_id);
            return redirect()->back()->with('fail','Appointment not Allowed! Your Pet: '.$pet->name.' has already a "'.$check->status.'" appointment');
        }
        
    }

    public function edit_appt($id){
        $id = base64_decode($id);
        $appt = Appointment::find($id);
        $branches = Branch::whereNotIn('id',[$appt->branch_id])->get();
        return view ('site.edit_appointment')->with('appointment',$appt)->with('branches',$branches);
        //return view ('site.appointment')->with('patients',$patients)->with('branches',$branches)->with('vets',$vets );
        
    }
    public function save_appt(Request $request){
        // return dd($request);
        $check = Appointment::where('date_appointment',$request->date_appointment)->where('pet_id',$request->patient_id)->whereIn('status',['Approved','Pending'])->first();
        if ($check == null) {
            $data = new Appointment;
            $data->user_id = Auth::user()->id;
            $data->pet_id=$request->patient_id;
            $data->branch_id = $request->branch_id;
            $data->vet_id = $request->vet;
            $data->schedule_id = $request->sched;
            $data->date_appointment = $request->date_appointment;
            $data->time_appointment = $request->time_appointment;
            $data->reason = $request->reason;
            $data->services = json_encode($request->services);
            $data->status = "Pending";
            $data->save();

            $schedule = Schedules::find($request->sched);
            if ($request->time_appointment == "08:00AM - 12:00AM") {
                $schedule->am_max = $schedule->am_max - 1;
            } else {
                $schedule->pm_max = $schedule->pm_max - 1;
            }
            $schedule->day_max = $schedule->pm_max + $schedule->am_max;
            $schedule->save();
            $date= $request->date_appointment;

            $user = User::find(Auth::user()->id);
            $email = $user->email;

            Mail::send('email.appointment_changes', ['date' => $date], function($message) use ($date, $email) {

                $message->to($email)->subject('Changes for Appointment on '.$date.' ');

            });
        } else {
            $pet = Pet::find($request->patient_id);
            return redirect()->back()->with('fail','Appointment not Allowed! Your Pet: '.$pet->name.' has already a "'.$check->status.'" appointment');
        }
    }

    public function pets(){
        // return Auth::user();
        $patients = Pet::where('user_id',Auth::user()->id)->get();
        if(count($patients) == 0) 
        return view ('site.pets')->with('patients',$patients);
        else
        return view ('site.appointment')->with('patients',$patients);
    }
    
    public function list_pets(){
        // return Auth::user();
        $patients = Pet::where('user_id',Auth::user()->id)->get();
        return view ('site.list_pets')->with('patients',$patients);
    }
    public function list_appointment(){
        // return Auth::user();
        $appointments = Appointment::where('user_id',Auth::user()->id)->where('date_appointment','>=',date('Y-m-d'))->whereIn('status',['Approved','Pending'])->get();
        // return $appointments[0]->AppointmentBranch;
        $patients = Pet::where('user_id',Auth::user()->id)->get();
        
        $species = Species::all();
        $breeds = Breed::all();
        $colors = Color::all();
        if(count($patients) == 0) 
        return view ('site.pets')->with('patients',$patients)->with('species',$species)->with('breeds',$breeds)->with('colors',$colors);
        else
        return view ('site.list_appointment')->with('appointments',$appointments);
    }
    public function new_pet(){
        $species = Species::all();
        $breeds = Breed::all();
        $colors = Color::all();
        return view ('site.pets')
        ->with('species',$species)
        ->with('breeds',$breeds)
        ->with('colors',$colors);
    }
    public function save_new_pet(Request $request){
        // return d/d($request);
        $fileName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('img'), $fileName);
        $pet = new Pet;
        $pet->user_id = Auth::user()->id;
        $pet->species_id = $request->species_id;
        $pet->breed_id = $request->breed_id;
        $pet->color_id = $request->color_id;
        $pet->name = $request->name;
        $pet->weight = $request->weight;
        $pet->bday = $request->bday;
        $pet->gender = $request->gender;
        $pet->image = $fileName;
        $pet->save();
        return redirect()->back()->with('success','The details of your Pet '.$request->name.' is saved!');
        
    } 

    public function pet_edit($id){
        
        $id = base64_decode($id);
        $pet = Pet::find($id);
        
        $species = Species::where('id','!=',$pet->species_id)->get();
        $breeds = Breed::all();
        $colors = Color::all();
        return view ('site.edit_pet')
        ->with('species',$species)
        ->with('breeds',$breeds)
        ->with('colors',$colors)
        ->with('pet', $pet);
    }

    public function pet_update(Request $request){
        // return d/d($request);
   
        $pet = Pet::find($request->id);
        $pet->species_id = $request->species_id;
        $pet->breed_id = $request->breed_id;
        $pet->color_id = $request->color_id;
        $pet->name = $request->name;
        $pet->weight = $request->weight;
        $pet->bday = $request->bday;
        $pet->gender = $request->gender;
        $pet->save();
        return redirect()->back()->with('success','The details of your Pet '.$request->name.' is updated!');
        
    }

    public function pet_photo_update(Request $request){
        // return d/d($request);
        
        $fileName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('img'), $fileName);
        $pet = Pet::find($request->pet);
        $pet->image = $fileName;
        $pet->save();
        return redirect()->back()->with('success','Photo updated!');
        
    }

    public function services(){
        // return Auth::user();
        return view ('site.services');
    }

    public function teams(){
        return view ('site.teams');
    }

    public function products(){
        return view ('site.products');
    }
    
    public function jerhigh(){
        return view ('site.jerhigh');
    }

    public function kittycrunch(){
        return view ('site.kittycrunch');
    }

    public function monello(){
        return view ('site.monello');
    }

    public function pedigree_adult(){
        return view ('site.pedigree_adult');
    }

    public function pedigree_puppy(){
        return view ('site.pedigree_puppy');
    }

    public function royal_puppy(){
        return view ('site.royal_puppy');
    }

    public function royal_mini(){
        return view ('site.royal_mini');
    }

    public function royal_kitten(){
        return view ('site.royal_kitten');
    }

    public function royal_adult(){
        return view ('site.royal_adult');
    }

}



