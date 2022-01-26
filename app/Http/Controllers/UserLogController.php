<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLog;
class UserLogController extends Controller
{
    public function list(){
        $logs = UserLog::all();
        return view('user.logs')->with('logs',$logs);
    }
}
