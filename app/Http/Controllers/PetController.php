<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Breed;
use App\Color;
use App\Species;
use App\Medical;
use Auth;

class PetController extends Controller
{
    public function pets(){
        
        $pets = Pet::all();
        if(Auth::user()->role_id == 4){
            return view('patient.list')->with('pets', $pets);
        }
        elseif(Auth::user()->role_id == 2)
        return view('vet_portal.patients')->with('pets', $pets);
        else{
            return view('secretary_portal.patient')->with('pets', $pets);
        }
    }
    public function breed(){
        $breeds = Breed::all();
        return view('file_management.breed')->with('breeds',$breeds);
    }
    public function color(){
        $colors = Color::all();
        return view('file_management.color')->with('colors',$colors);
    }
    public function species(){
        $species = Species::all();
        return view('file_management.species')->with('species',$species);
    }
    public function pet_profile($id){
        $id = base64_decode($id);
        $pet = Pet::find($id);
        $med_records = Medical::where('pet_id',$pet->id)->get();
        if(Auth::user()->role_id == 3){
        return view('secretary_portal.pet_profile')->with('pet',$pet)->with('med_records',$med_records);
        }
        else return view('site.pet_profile')->with('pet',$pet)->with('med_records',$med_records);
    }
}
