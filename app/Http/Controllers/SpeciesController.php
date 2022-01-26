<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Species;
use App\ActivityLog;

class SpeciesController extends Controller
{
    //
    public function add() {
        return view('species.form');
    }

    public function save(Request $request) {
        $species = new species;
        $species->species_name = strtolower($request->name);
        $species->save();

        $activity = new ActivityLog;
        $activity->user_id = Auth::user()->id;
        $activity->activity = "New Species saved";
        $activity->save();

        return redirect()->back()->with('success','New Species Saved');
    }

    public function update($id) {
        $species = Species::find($id);
        return view('species.form')->with("species",$species);
    }

    public function update_save(Request $request){
        $species = Species::find($request->id);
        $species->species_name = strtolower($request->name);
        $species->save();

        $activity = new ActivityLog;
        $activity->user_id = Auth::user()->id;
        $activity->activity = "Species updated-> ".$species->species_name;
        $activity->save();

        return redirect()->back()->with('success','Updated Species');
    }
}
