<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    // public $firstName;
    public $name;
    public $email;
    public $mobile;
    public $machine_type;
    public $subjects;
    public $messages ;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $mobile, $machine_type, $subjects, $messages )
    {
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->machine_type = $machine_type;
        $this->subjects = $subjects;
        $this->messages = $messages ;     
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_form',
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
        return $this->subject('Contact Form Submission: ' . $this->subjects)
                    ->view('emails.contact_form') 
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'mobile' => $this->mobile,
                        'machine_type' => $this->machine_type,
                        'subjects' => $this->subjects,
                        'messages' => $this->messages,  
                    ]);
    }
}
