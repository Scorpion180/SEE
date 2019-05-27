<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
class DeliveredEvidence extends Mailable
{
    use Queueable, SerializesModels;
    public $evidence;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($e)
    {
        $this->evidence = $e;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail');
    }
}
