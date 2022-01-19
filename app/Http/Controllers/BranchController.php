<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Appointment;
use Auth;

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
        return redirect()->back()->with('success','New Branch Saved');
    }

    public function appointments(){
        $appointments = Appointment::where('branch_id',Auth::user()->branch_id)->get();
        // return $appointments;
        return view('branch_portal.appointment')->with('appointments',$appointments);
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

        return redirect()->back()->with('success','Branch Updated!');


    }
}
