<?php

namespace App\Http\Controllers;
use App\Account;
use App\Role;
use App\Profile;
use App\User;
use App\Species;
use App\Breed;
use App\Color;
use Auth;
use App\Branch;
use App\UserActivation;
use DB;

use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function accounts($role){

        $roles = Role::where('role',ucfirst($role))->first();
        $accounts = Account::where('role_id',$roles->id)->where('stat', 1)->get();
        //return $accounts[0]->UserProfileI;
        if(Auth::user()->role_id == 3)
        return view('secretary_portal.client_list')->with('accounts',$accounts);
        else
        return view('user.list')->with('role',$role)->with('accounts',$accounts);

    }
    public function account_form($role){
        $roles = Role::where('role',ucfirst($role))->first();
        $accounts = Account::where('role_id',$roles->id)->get();
        $branch = Branch::all();
        $species = Species::all();
        $breeds = Breed::all();
        $colors = Color::all();
        if(Auth::user()->role_id == 3)
        return view('secretary_portal.add_client')->with('accounts',$accounts)->with(['species'=>$species,'breeds'=>$breeds,'colors'=>$colors]);
        else
        return view('user.form')->with('branchs', $branch)->with('role',$role)->with('roles',$roles)->with('accounts',$accounts);
    }
    public function account_save(Request $request){
        // return dd($request);
        if ($request->role_id == 1) {
            if (User::where('email', $request->email)->exists()){
                return redirect()->back()->with('fail',"Registration Unsuccessful. Email already registered. Please use different email.");
            } else {
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
            $profile->status= "";
            $profile->stat= "0";
            $profile->save();

            $user = new User;
            $user->profile_id = $profile->id;
            $user->role_id = $request->role_id;
            $user->email = $request->email;
            $user->username = $request->u;
            $user->password = md5($request->p);
            $user->branch_id = $request->branch;
            $user->stat = 0;
            $user->is_activated = 0;
            $user->save();
            $email = $request->email;
            
            
            $link = Str::random(30);
            UserActivation::create(['user_id'=>$user->id,'token'=>$link]);

            $userArray = $user->toArray();
            Mail::send('email.activation', ['link' => $link], function($message) use ($email) {

                $message->to($email)->subject('Account Activation');

            });
            return redirect()->back()->with('success','Account Created! Please Activate your account.');
            }
            
        }
        else{

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
            $profile->stat= "1";
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
            return redirect()->back()->with('success','Account Created');
        }
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

    public function acc_details($id){
        // return Auth::user();
        $acc = User::find(base64_decode($id));
        $role = Role::find($acc->role_id);
        if (Auth::user()->role_id == 3) {
            return view ('secretary_portal.client_acc_details')->with('user',$acc);
        } else {
            return view ('user.acc_details')->with('role',$role->role)->with('user',$acc);
        }
        
    }

    public function acc_details_edit($id){

        $acc = Account::find(base64_decode($id));        
        $role = Role::find($acc->role_id);
        $branch = Branch::all();
            return view('user.edit_details')->with('branchs', $branch)->with('data',$acc)->with('role',$role->role);

    }

    public function acc_details_update(Request $request){

        
        $user = User::find($request->id);
        $user->email = $request->email;
        $user->username = $request->u;        
        $user->branch_id = $request->branch;
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

    public function superadmin(){
        
        $admins = User::where('role_id', 4)->get();
        return view('superadmin.list')->with('admins',$admins);
        
    }

    public function save_admin(Request $request){

        
        $admin = new User;
        $admin->role_id = $request->role;
        $admin->username = $request->un;
        $admin->password = md5($request->pw);
        $admin->stat = 1;
        $admin->save();
        
        return redirect()->back();
    }

    public function admin_changepass($id){
        
        $admin = User::find($id);
        return view('superadmin.changepass')->with('admin',$admin);
        
    }

    public function admin_changepass_save(Request $request){
        
        $admin = User::find($request->id);
        $admin->password = md5($request->pw);
        return redirect()->back()->with('success','Password Changed!');
        
    }
    
    
    public function admin_deact($id){
        
        $admin = User::find($id);
        $admin->stat = 0;
        $admin->save();
        return redirect()->back()->with('success','Admin Deactivated!');
        
    }

    public function admin_act($id){
        
        $admin = User::find($id);
        $admin->stat = 1;
        $admin->save();
        return redirect()->back()->with('success','Admin Activated!');
        
    }
}
