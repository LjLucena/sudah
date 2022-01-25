<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityLog;
class ActivityLogController extends Controller
{
    public function activity_list(){
        $logs = ActivityLog::all();
        return view('user.activity_logs')->with('logs',$logs);
    }
}
