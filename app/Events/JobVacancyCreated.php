<?php

namespace App\Events;

use App\Models\Vacancy;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class JobVacancyCreated
{
    use Dispatchable, SerializesModels;

    public $jobVacancy;

    public function __construct(Vacancy $jobVacancy)
    {
        $this->jobVacancy = $jobVacancy;
    }

    public function broadcastOn()
    {
        return new Channel('channel-name');
    }
}
