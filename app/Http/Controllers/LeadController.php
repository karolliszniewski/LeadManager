<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:leads,email',
            'phone' => 'nullable',
        ]);

        $lead = Lead::create($request->all());

        try {
            // Send email
            Mail::to($lead->email)->send(new \App\Mail\LeadConfirmation($lead));
        } catch (\Exception $e) {
            // Log error in the log file
            Log::error('Error sending email: ' . $e->getMessage());
            return back()->with('error', 'There was a problem sending the email.');
        }
        return redirect()->route('contact')->with('success', 'Thank you! Please check your inbox.');
    }
}
