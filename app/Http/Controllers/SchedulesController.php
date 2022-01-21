<?php

namespace App\Http\Controllers;
use App\Branch;
use App\Schedules;
use App\Account;
use App\Role;
use App\Profile;
use App\User;
use Auth;

use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function schedules(){
        
        $branch = Branch::all();
        return view('schedules.list')->with('branches', $branch);
    }

    public function branch_schedules($id){
        
        $scheds = Schedules::where('branch_id', $id)->get();
        $branch = Branch::find($id);
        return view('schedules.branch_schedule')->with('branch', $branch)->with('scheds', $scheds);
    }

    public function sched_edit($id) {
        $sched = Schedules::find($id);
        $branch = Branch::find($sched->branch_id);
        return view('schedules.edit')->with('sched', $sched)->with('branch', $branch);
    }

    public function sched_update(Request $request){
        $sched = Schedules::find($request->id);
        $sched->am_max = $request->am;
        $sched->pm_max = $request->pm;
        $sched->save();
        return redirect()->back()->with('success','Max Appointment Updated!');
    }

    public function add_sched($id) {
        $branch = Branch::where('id',$id)->first();
        $sched = Schedules::where('branch_id',$id)->get();
        foreach($sched as $sched){            
            $disable[] = $sched->date;
        }
        $accounts = Account::where('branch_id',$id)->where('role_id', 2)->get();
        return view('schedules.form')->with(['branch'=> $branch,'accounts'=>$accounts,'disableDate' => $disable]);
    }

    public function save_sched(Request $request) {

        $dates = $request->date;
        //Multiple insert queries
        $date = explode(',',$dates);
        $schedule = Schedules::where('branch_id',$request->branch)->get();
        foreach($date as $date) {
            $sched = new Schedules;
            $sched->date = $date;
            $sched->branch_id = $request->branch;
            $sched->vet_id = $request->vet;
            $sched->am_max = $request->am;
            $sched->pm_max = $request->pm;
            $sched->save();
        }
        return redirect()->back()->with('success','Schedule Added!');
    }

    public function store_sched(Request $request) {

        $sched = new Schedules;
        $sched->date = $request->date;
        $sched->branch_id = $request->branch;
        $sched->vet_id = $request->vet;
        $sched->am_max = $request->am;
        $sched->pm_max = $request->pm;
        $sched->save();

    }
       
}
