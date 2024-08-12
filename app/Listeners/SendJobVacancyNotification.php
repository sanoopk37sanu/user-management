<?php

// app/Listeners/SendJobVacancyNotification.php

namespace App\Listeners;

use App\Events\JobVacancyCreated;
use App\Mail\JobVacancyCreated as JobVacancyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

class SendJobVacancyNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    public function handle(JobVacancyCreated $event)
    {
        $jobVacancy = $event->jobVacancy;
        $activeUsers = User::where('status', '1')->get();

        foreach ($activeUsers as $user) {
            Mail::to($user->email)->send(new JobVacancyMail($jobVacancy));
        }
    }
}
