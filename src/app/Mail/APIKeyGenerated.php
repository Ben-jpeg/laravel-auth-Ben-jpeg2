<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Laravel\Sanctum\NewAccessToken;

class APIKeyGenerated extends Mailable
{
    use Queueable;
    use SerializesModels;

    // php v7.4
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(NewAccessToken $token)
    {
        $this->token = $token;
    }

    // PHP V8.?
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct(public NewAccessToken $token)
    // {
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Votre nouvelle clé d\'API')
            ->view('mails.api.key-generated');
    }
}
