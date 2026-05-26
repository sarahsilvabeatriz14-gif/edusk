<?php

namespace App\Mail;

use App\Models\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TeacherAccountCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public Teacher $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Conta criada com sucesso'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.teacher-account-created'
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
