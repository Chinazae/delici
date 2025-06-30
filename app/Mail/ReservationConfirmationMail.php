<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $guestName;
    public $guestEmail;
    public $guestPhone;
    public $cart;
    public $paymentType;
    public $couponCode;
    public $discountAmount;

    public function __construct($guestName, $guestEmail, $guestPhone, $cart, $paymentType, $couponCode = null, $discountAmount = 0)
    {
        $this->guestName = $guestName;
        $this->guestEmail = $guestEmail;
        $this->guestPhone = $guestPhone;
        $this->cart = $cart;
        $this->paymentType = $paymentType;
        $this->couponCode = $couponCode;
        $this->discountAmount = $discountAmount;
    }

    public function build()
    {
        return $this->subject('Reservation Confirmation')
            ->view('emails.reservation_confirmation');
    }
}
