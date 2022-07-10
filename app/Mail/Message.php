<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($var)
    {
        $this->var = $var;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('kristyanhenrique@hotmail.com')->view('welcome')->with([
            'conteudo' => $this->var[0],
            'nome' => $this->var[1],
            'email' => $this->var[2],
            
        ]);
    }
}
