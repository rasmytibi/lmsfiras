<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ELearningMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {

        $this->details = $details;
    }
//       dd($details);
    /**
     * Build the message.
     *
     * @return $this
      */
    public function build()
    {



        return $this->markdown('admin/email/template',$this->details);

    }
}
