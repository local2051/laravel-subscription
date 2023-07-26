<?php

namespace App\Jobs;

use App\Mail\NewPostMailNotification;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $userEmail;
    protected $post;
    /**
     * Create a new job instance.
     */
    public function __construct(string $userEmail, Post $post)
    {
        $this->post = $post;
        $this->userEmail = $userEmail;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->userEmail)->send(new NewPostMailNotification($this->post));
    }
}
