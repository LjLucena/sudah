<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Nexmo\Laravel\Facade\Nexmo;
use App\Appointment;
use App\Account;
use App\Profile;
use App\User;

class sendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder(s) via SMS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = Appointment::where('date_appointment',date('Y-m-d', strtotime("+1 day")))->get();
        foreach($user as $user){

            $number = preg_replace("/^0/", "+63", $user->AppointmentUser->UserProfile->contact);
            $name = $user->AppointmentUser->UserProfile->first_name;
            $date = $user->date_appointment;
            Nexmo::message()->send([
                'to' => $number,
                'from' => '+639057383267',
                'text' => "Hello ".$name."! We'd like to let you know that you have a scheduled appointment on ".$date.""
            ]);
        }
    }
}
