<?php

namespace App\Http\Controllers;
use App\Account;
use App\Role;
use App\Profile;
use App\User;
use Auth;
use App\Branch;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accounts($role){

        $roles = Role::where('role',ucfirst($role))->first();
        $accounts = Account::where('role_id',$roles->id)->where('stat', 1)->get();
        //return $accounts[0]->UserProfileI;
        return view('user.list')->with('role',$role)->with('accounts',$accounts);

    }
    public function account_form($role){
        $roles = Role::where('role',ucfirst($role))->first();
        $accounts = Account::where('role_id',$roles->id)->get();
        $branch = Branch::all();
        return view('user.form')->with('branchs', $branch)->with('role',$role)->with('roles',$roles)->with('accounts',$accounts);
    }
    public function account_save(Request $request){
        // return dd($request);

        $profile = new Profile;
        $profile->last_name= $request->ln;
        $profile->first_name= $request->fn;
        $profile->middle_name= $request->mn;
        $profile->suffix= $request->s;
        $profile->contact= $request->contact;
        $profile->house= $request->house;
        $profile->brgy= $request->barangay;
        $profile->municipality= $request->cm;
        $profile->province= $request->province;
        $profile->zipcode= " ";
        $profile->dob= $request->dob;
        $profile->status= "Active";
        $profile->stat= "0";
        $profile->save();

        $user = new User;
        $user->profile_id = $profile->id;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->username = $request->u;
        $user->password = md5($request->p);
        $user->branch_id = $request->branch;
        $user->stat = 1;
        $user->save();
        if($request->role_id == 1) return redirect()->back()->with('success','Account Created Please Login');
        else  return redirect()->back()->with('success','Account Created');
    }

    
    public function myAccount_profile(){
        // return Auth::user();
        $user = Account::find(Auth::user()->id);
        if($user->role_id == 1){            
            return view ('site.my_account')->with('user',$user);
        }
        elseif($user->role_id == 2){
            return view ('vet_portal.my_account')->with('user',$user);
        }
        else{
            return view ('secretary_portal.my_account')->with('user',$user);
        }
    }   

    public function account_update(){

        $user = User::find(Auth::user()->id);

        if($user->role_id == 1){            
            return view('site.edit_account')->with('data',$user);
        }
        elseif($user->role_id == 2){
            return view('vet_portal.edit_account')->with('data',$user);
        }
        elseif($user->role_id == 4){
            return view('user.edit_details')->with('data',$user);
        }
        else{
            return view('secretary_portal.edit_account')->with('data',$user);
        }
    }

    public function account_update_save(Request $request){

        
        $user = User::find(Auth::user()->id);
        $user->email = $request->email;
        $user->username = $request->u;
        $user->save();

        $profile = Profile::find($user->profile_id);
        $profile->last_name= $request->ln;
        $profile->first_name= $request->fn;
        $profile->middle_name= $request->mn;
        $profile->suffix= $request->s;
        $profile->contact= $request->contact;
        $profile->house= $request->house;
        $profile->brgy= $request->barangay;
        $profile->municipality= $request->cm;
        $profile->province= $request->province;
        $profile->dob= $request->dob;
        $profile->save();

        
        return redirect()->back()->with('success','Account Updated!');
    }

    public function pass_edit($id){

        $user = User::find(Auth::user()->id);
        if ($user->role_id == 4) {
            $acc = User::find(base64_decode($id));            
            $role = Role::find($acc->role_id);
            return view('user.edit_pass')->with('data',$acc)->with('role',$role->role);
        } else {
            if($user->role_id == 1){            
                return view('site.edit_pass')->with('data',$user);
            }
            elseif($user->role_id == 2){
                return view('vet_portal.edit_pass')->with('data',$user);
            }
            else{
                return view('secretary_portal.edit_pass')->with('data',$user);
            }
        }
    }

    public function update_pass(Request $request){

        
        $user = User::find(Auth::user()->id);
        if ($user->role_id == 4) {
            $acc = User::find($request->id);            
            $role = Role::find($acc->role_id);
            $acc->password = md5($request->pw);
            $acc->save();

            return redirect()->back()->with('success','Password Changed!');
        } else {
            $input_old_pass = md5($request->p);
            $current_pass = $user->password;
            
            if($current_pass ===  $input_old_pass){
                $user->password = md5($request->pw);
                $user->save();

                return redirect()->back()->with('success','Password Changed!');
            }
            else{
                return redirect()->back()->with('fail',"Wrong Old Password!");
            }
        }
              

        
    }

    public function assign_branch_form($id){
        $account  = User::find(base64_decode($id));
        $branches = Branch::all();
        return view('user.assign_branch')->with('account',$account)->with('branches',$branches);
    }
    
    public function assign_branch(Request $request){
        $id = $request->id;
        $user = User::find(base64_decode($id));
        $user->branch_id = $request->branch_id;
        if($user->role_id==2){
            $user->am_app = $request->max_am_app;
            $user->pm_app = $request->max_pm_app;
        }
        $user->save();
        return redirect("/accounts"."/".strtolower($user->UserRoleI->role))->with('success','Assign Branch Save');
    }

    //admin-side
    public function acc_details($id){
        // return Auth::user();
        $acc = User::find(base64_decode($id));
        $role = Role::find($acc->role_id);
        return view ('user.acc_details')->with('role',$role->role)->with('user',$acc);
    }

    public function acc_details_edit($id){

        $acc = User::find(base64_decode($id));        
        $role = Role::find($acc->role_id);
            return view('user.edit_details')->with('data',$acc)->with('role',$role->role);

    }

    public function acc_details_update(Request $request){

        
        $user = User::find($request->id);
        $user->email = $request->email;
        $user->username = $request->u;
        $user->save();

        $profile = Profile::find($user->profile_id);
        $profile->last_name= $request->ln;
        $profile->first_name= $request->fn;
        $profile->middle_name= $request->mn;
        $profile->suffix= $request->s;
        $profile->contact= $request->contact;
        $profile->house= $request->house;
        $profile->brgy= $request->barangay;
        $profile->municipality= $request->cm;
        $profile->province= $request->province;
        $profile->dob= $request->dob;
        $profile->save();

        
        return redirect()->back()->with('success','Account Details Updated!');
    }

    public function archive($id){
        
        $acc = User::find($id); 
        $acc->stat = 0;
        $acc->save();

        return redirect()->back()->with('success','Account Decativated!');
        
    }

    public function activate($id){
        
        $acc = User::find($id); 
        $acc->stat = 1;
        $acc->save();

        return redirect()->back()->with('success','Account Activated!');
        
    }

    public function archive_list($role){
        
        $roles = Role::where('role',ucfirst($role))->first();
        $accounts = Account::where('role_id',$roles->id)->where('stat', 0)->get();
        return view('user.archives')->with('role',$role)->with('accounts',$accounts);
        
    }
}
