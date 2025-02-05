<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $mobile;
    public $product;
    public $messages;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $mobile, $product, $messages)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->product = $product;
        $this->messages = $messages ;   
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Service Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.service_form',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->subject('service Form Submission: ')
                    ->view('emails.service_form') 
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'mobile' => $this->mobile,
                        'product' => $this->product,
                        'messages' => $this->messages,  
                    ]);
    }
}
