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
use App\Appointment;
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
    public function appointment(){
        // return Auth::user();
        $patients = Pet::where('user_id',Auth::user()->id)->get();
        $branches = Branch::all();
        $vets = Account::where('role_id','2')->get();
        if(count($patients) == 0) 
        return redirect('/new/pet')->with('info',"Please save your pet's information first");
        else
        return view ('site.appointment')->with('patients',$patients)->with('branches',$branches)->with('vets',$vets );
    }
    public function save_appointment(Request $request){
        // return dd($request);
        $data = new Appointment;
        $data->user_id = Auth::user()->id;
        $data->pet_id=$request->patient_id;
        $data->branch_id = $request->branch_id;
        $data->vet_id = $request->vet_id;
        $data->date_appointment = $request->date_appointment;
        $data->time_appointment = $request->time_appointment;
        $data->reason = $request->reason;
        $data->services = json_encode($request->services);
        $data->status = "Pending";
        $data->stat = "0";
        $data->save();
        return redirect()->back()->with('success','Appointment Requested,  Please wait for confirmation/approval');
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
        $appointments = Appointment::where('user_id',Auth::user()->id)->get();
        // return $appointments[0]->AppointmentBranch;
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
        
        $species = Species::all();
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

    public function services(){
        // return Auth::user();
        return view ('site.services');
    }
}
