<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;
use App\Models\Sku;


class SendSubscriptionMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $sku;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Sku $sku)
    {
        $this->sku = $sku;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.subscription', ['sku' => $this->sku]);
    }
}
