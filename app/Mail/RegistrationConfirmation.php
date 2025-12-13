<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public Registration $registration;

    /**
     * Create a new message instance.
     */
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->registration->language === 'en' 
            ? 'Pre-Registration Confirmation - HOREB 2026 Colombia'
            : 'Confirmación de Pre-Registro - HOREB 2026 Colombia';

        return new Envelope(
            subject: $subject,
            cc: ['narangers@naglobal.org'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $view = $this->registration->language === 'en' 
            ? 'emails.registration-confirmation-en'
            : 'emails.registration-confirmation';

        return new Content(
            view: $view,
            with: [
                'registration' => $this->registration,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $pdf = Pdf::loadView('pdf.voucher', [
            'registration' => $this->registration,
        ]);

        return [
            Attachment::fromData(fn () => $pdf->output(), 'HOREB-2026-Comprobante.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
