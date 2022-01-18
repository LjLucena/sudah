<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Species;
use App\Breed;

class BreedController extends Controller
{
    public function add() {
        $species = Species::get();
        return view('breed.form')->with("species", $species);
    }

    public function save(Request $request) {
        $breed = new breed;
        $breed->breed_name = $request->name;
        $breed->species_id = $request->species;
        $breed->save();
        return redirect()->back()->with('success','New Breed Saved');
    }

    public function update($id) {
        $breed = Breed::find($id);
        $species = Species::get();
        return view('breed.form')->with(["species"=> $species, "breed" => $breed]);
    }

    public function update_save(Request $request){
        $breed = Breed::find($request->id);
        $breed->breed_name = $request->name;
        $breed->species_id = $request->species;
        $breed->save();
        return redirect()->back()->with('success','Updated Breed');
    }
}
