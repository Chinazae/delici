<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WaitlistNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $entry;
    public $table;

    public function __construct($entry, $table)
    {
        $this->entry = $entry;
        $this->table = $table;
    }

    public function build()
    {
        return $this->subject('A Table is Now Available!')
            ->view('emails.waitlist_notification');
    }
}
