<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Color;
use App\ActivityLog;

class ColorController extends Controller
{
    //
    public function add() {
        return view('color.form');
    }

    public function save(Request $request) {
        $color = new color;
        $color->color_name = strtolower($request->name);
        $color->save();
        $activity = new Activity;
                $activity->user_id = Auth::user()->id;
                $activity->activity = "Added Color->".$color->color_name;
                $activity->save();
        return redirect()->back()->with('success','New Color Saved');
    }

    public function update($id) {
        $color = Color::find($id);
        return view('color.form')->with("color",$color);
    }

    public function update_save(Request $request){
        $color = Color::find($request->id);
        $color->color_name = strtolower($request->name);
        $color->save();
        $activity = new Activity;
                $activity->user_id = Auth::user()->id;
                $activity->activity = "Updated Color->".$color->color_name;
                $activity->save();
        return redirect()->back()->with('success','Updated Color');
    }
}
