<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {


        if (LaravelLocalization::getCurrentLocale() === 'ar') {
            // defin the data mardown
            $subject = 'مرحبًا ' . $this->data['email'] . ' ، أهلاً بك في كابيتالباث رومز ...';
            return $this->markdown('frontend/site/email/contact_mail_ar')
                ->subject($subject)
                ->with([
                    'data' => $this->data
                ]);
        } else {
            // defin the data mardown
            $subject = 'Hello ' . $this->data['email'] . ' Welcome to capitalbathromes ...';
            return $this->markdown('frontend/site/email/contact_mail_en')
                ->subject($subject)
                ->with([
                    'data' => $this->data
                ]);
        }
    }

}
