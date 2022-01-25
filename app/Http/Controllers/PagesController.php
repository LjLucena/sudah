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

    public function show_form($id){
        $patients = Pet::where('user_id',Auth::user()->id)->get();        
        $vets = Account::where('role_id','2')->where('branch_id',$id)->where('stat',1)->get();
        return view ('site.set_appointment_form')->with('vets', $vets)->with('patients', $patients)->with('branch',$branch);
    }

    public function appointment(){
        // return Auth::user();
        $patients = Pet::where('user_id',Auth::user()->id)->get();
        $branches = Branch::all();
        $vets = Account::where('role_id','2')->get();
        if(count($patients) == 0) 
        return redirect('/new/pet')->with('info',"Please save your pet's information first");
        else
        return view ('site.appointment')->with('branches',$branches);
        //return view ('site.appointment')->with('patients',$patients)->with('branches',$branches)->with('vets',$vets );
        
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
        $appointments = Appointment::where('user_id',Auth::user()->id)->where('status','Approved')->orWhere('status','Pending')->get();
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



