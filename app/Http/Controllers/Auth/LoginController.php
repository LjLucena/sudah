<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\UserActivation;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/test';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $username;
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
    public function username(){
        return $this->username;
    }
    protected function attemptLogin(Request $request){
        //return dd($request)
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where([
            'username' => $request->username,
            'password' => md5($request->password)
        ])->first();
        if ($user) {
            // return $user->UserRoleI;

            if($user->UserRoleI->role=='Client'){
                if($user->is_activated == '0'){

                    return redirect('/login')->withErrors(['msg' => 'Please Activate your account first.']);
                }
                else{
                    $this->guard()->login($user, $request->has('remember'));
                    Auth::login($user);
                    return redirect('/list/appointments');
                }

            }
            
                $this->guard()->login($user, $request->has('remember'));
                Auth::login($user);
                if($user->UserRoleI->role=='Super Admin') return redirect('/accounts/vet/');
                elseif($user->UserRoleI->role=='Admin') return redirect('/accounts/vet/');
                elseif($user->UserRoleI->role=='Secretary') return redirect('/portal/branch/');             
                elseif($user->UserRoleI->role=='Vet') return redirect('/portal/vet/');           

            
        }
        return redirect('/login')->withErrors(['msg' => 'Incorrect Username or Password']);
    }
    
    public function login(){
        $user = Auth::user();
        if ($user) {   // Check is user logged in
            if($user->UserRoleI->role=='Super Admin') return redirect('/accounts/vet/');
            elseif($user->UserRoleI->role=='Admin') return redirect('/accounts/vet/');
            elseif($user->UserRoleI->role=='Secretary') return redirect('/portal/branch/');
            elseif($user->UserRoleI->role=='Vet') return redirect('/portal/vet/');
            elseif($user->UserRoleI->role=='Client') return redirect('/list/appointments');
        } else {
            return view('user.login');
        }
    }

    public function userActivation($token)

    {

        $check = UserActivation::where('token',$token)->first();



        if(!is_null($check)){

            $user = User::find($check->user_id);



            if($user->is_activated == 1){

                return redirect()->to('/login')

                    ->with('success',"Account are already activated.");                

            }



            $user->is_activated = 1;
            $user->save();

            UserActivation::where('token',$token)->delete();



            return redirect()->to('/login')

                ->with('success',"Account activated successfully.");

        }


        return redirect('/login')->withErrors(['msg' => 'Incorrect Token.']);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
