<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmarEspecialistaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $detalhes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detalhes)
    {
        $this->detalhes = $detalhes;
    }

    /** 
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->detalhes['assunto'])->view('emails.confirmarEspecialista');
    }
}
