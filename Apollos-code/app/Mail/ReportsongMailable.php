<?php

namespace App\Mail;

use App\Models\Song;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportsongMailable extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $song;

    public $subject = "Alerta | Han reportado tu contenido";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $song)
    {
        $this->user = User::where('id', $user->id)->first();
        $this->song = Song::where('id', $song->id)->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reportuser', ['song' => $this->song, 'user' => $this->user]);
    }
}
