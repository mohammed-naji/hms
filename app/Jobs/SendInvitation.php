<?php

namespace App\Jobs;

use App\Mail\Invitation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendInvitation implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $users)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->users as $index => $user) {
            // Mail::to($user['email'])->send(new Invitation($user));
            // Mail::to($user['email'])->later($index * 5, new Invitation($user));
            Mail::to($user['email'])->send((new Invitation($user))->delay($index * 5));
        }
    }
}
