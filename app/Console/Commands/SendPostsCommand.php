<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailJob;
use App\Mail\NewPostMailNotification;
use App\Models\Website;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendPostsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-posts-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Emails to the subscribers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $websites = Website::all();

        foreach ($websites as $website) {
            $newPosts = $website->posts->where('send_mail', false);

            foreach ($newPosts as $post) {
                foreach ($website->subscribers as $subscriber) {
                    SendEmailJob::dispatch($subscriber->email, $post);
                }

                $post->update(['send_mail' => true]);
            }
        }

        $this->info('Emails sent successfully.');
    }
}
