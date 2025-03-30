<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Lead;

class LeadConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;

    /**
     * Create a new message instance.
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function build()
    {
        return $this->subject('Thanks for signing up!')
            ->view('emails.lead_confirmation')
            ->with([
                'confirmationUrl' => route('lead.confirm', ['token' => $this->lead->confirmation_token])
            ]);
    }
}
