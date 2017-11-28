<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
use App\AsignTemplate;
use App\EmailTemplate;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $temp = AsignTemplate::find(1);
            $email = EmailTemplate::findOrFail($temp->template_id)->first();
            $user = DB::table('users')->select('*')->first();
        return $this->view('emails.testemail', compact('email', 'user'));
    }
}