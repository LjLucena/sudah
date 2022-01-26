<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Appointment;
use App\Schedules;
use App\Pet;
use App\Breed;
use App\Species;
use App\Color;
use App\Profile;
use App\User;
use App\ActivityLog;
use App\Medical;
use Auth;
use Mail;

use Illuminate\Support\Str;
class BranchController extends Controller
{
    public function branches(){
        $branches = Branch::where('stat','1')->paginate(10);
        return view('branch.list')->with('branches',$branches);
    }
    public function form_branch(){
        return view('branch.form');
    }
    public function store_branch(Request $request){
        // return dd($request);
        $branch = new branch;
        $branch->name = $request->name;
        $branch->address = $request->house." ".$request->barangay." ".$request->city." ".$request->province;
        $branch->b_number = $request->contacts;
        $branch->geolocation ="0,0";
        $branch->status ="Active";
        $branch->stat ="1";
        $branch->save();

        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->activity = "New branch created";
        $activity->save();
        return redirect()->back()->with('success','New Branch Saved');
    }

    public function appointments(){
        $sched = Schedules::where('date', date("Y/m/d"))->where('branch_id',Auth::user()->branch_id)->first();
        If($sched != null){
        $appointments = Appointment::where('branch_id',Auth::user()->branch_id)->where('schedule_id',$sched->id)->where('status','Approved')->orWhere('status','Done')->get();   
        return view('branch_portal.appointment')->with('appointments',$appointments)->with('date', $sched->date);
        }
        else{ 
            return view('branch_portal.appointment')->with('appointments',0);
        }
    }

    public function view_pet($id){
        $sched = Pet::where('date', date("Y/m/d"))->where('branch_id',Auth::user()->branch_id)->first();
        $appointments = Appointment::where('branch_id',Auth::user()->branch_id)->where('schedule_id',$sched->id)->where('status','Approved')->orWhere('status','Done')->get();   
        return view('branch_portal.appointment')->with('appointments',$appointments)->with('date', $sched->date);
    }

    public function branch_edit($id){

        $branch = Branch::find($id);
            return view('branch.edit')->with('branchs', $branch);

    }

    public function branch_update(Request $request){

        $branch = Branch::find($request->id);
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->b_number = $request->contact;
        $branch->save();

        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->activity = "Branch".$branch->name." updated";
        $activity->save();

        return redirect()->back()->with('success','Branch Updated!');


    }

    public function account_form(){
        $branch = Branch::all();
        $species = Species::all();
        $breeds = Breed::all();
        $colors = Color::all();
        $sched = Schedules::where('date', date("Y/m/d"))->where('branch_id', Auth::user()->branch_id)->get();
        return view('secretary_portal.add_client')->with(['species'=>$species,'breeds'=>$breeds,'colors'=>$colors,'scheds'=>$sched]);
    }
    public function client_save(Request $request){
        // return dd($request);

        $profile = new Profile;
        $profile->last_name= $request->ln;
        $profile->first_name= $request->fn;
        $profile->middle_name= $request->mn;
        $profile->suffix= $request->s;
        $profile->status= "Active";
        $profile->stat= "1";
        $profile->save();

        $user = new User;
        $user->profile_id = $profile->id;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->username = $request->u;
        $user->password = md5($request->p);
        $user->stat = 0;
        $user->save();
        $email = $request->email;
        $link = Str::random(30);
            UserActivation::create(['user_id'=>$user->id,'token'=>$link]);

            $userArray = $user->toArray();
            Mail::send('email.activation', ['link' => $link], function($message) use ($email) {

                $message->to($email)->subject('Account Activation');

            });

        $pet = new Pet;
        $pet->user_id = $user->id;
        $pet->species_id = $request->species_id;
        $pet->breed_id = $request->breed_id;
        $pet->color_id = $request->color_id;
        $pet->name = $request->name;
        $pet->weight = $request->weight;
        $pet->bday = $request->bday;
        $pet->gender = $request->gender;
        $pet->save();
        
        $sched =Schedules::where('vet_id', $request->vet_id)->where('branch_id', Auth::user()->branch_id)->where('date', date("Y-m-d"))->first();

        $data = new Appointment;
        $data->user_id = $user->id;
        $data->pet_id= $pet->id;
        $data->branch_id = Auth::user()->branch_id;
        $data->vet_id = $request->vet_id;
        $data->schedule_id = $sched->id;
        $data->date_appointment = date("Y-m-d");
        $data->time_appointment = $request->time;
        $data->services = json_encode($request->services);
        $data->status = "Done";
        $data->save();

        $med = new Medical;
        $med->pet_id = $pet->id;
        $med->appointment_id = $data->id;
        $med->assessment = $request->assessment;
        $med->save();  

        $activity = new Activity;
        $activity->user_id = Auth::user()->id;
        $activity->activity = "Account created for walk in client.";
        $activity->save();

        return redirect()->back()->with('success','Client Account Created');
    }

}
