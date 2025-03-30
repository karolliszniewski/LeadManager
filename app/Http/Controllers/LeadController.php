<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Support\Str;
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
        ]);

        $token = Str::random(32);

        $lead = Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'confirmation_token' => $token,
        ]);

        try {
            // Send email
            Mail::to($lead->email)->send(new \App\Mail\LeadConfirmation($lead));
        } catch (\Exception $e) {
            // Log error in the log file
            Log::error('Error sending email: ' . $e->getMessage());
            return back()->with('error', 'There was a problem sending the email. Please try again later.');
        }

        return redirect()->route('welcome')->with('success', 'Thank you! Please check your inbox.');
    }


    public function index()
    {

        // Fetch all leads from the database
        $leads = Lead::all();

        $leads = Lead::all()->map(function ($lead) {
            if ($lead->confirmed_at) {
                $lead->confirmed_at = Carbon::parse($lead->confirmed_at);
            }
            return $lead;
        });

        // Pass leads to the view
        return view('lead', compact('leads'));
    }

    public function confirm($token)
    {
        $lead = Lead::where('confirmation_token', $token)->first();

        if (!$lead) {
            // Token not found or invalid
            return redirect()->route('welcome')->with('error', 'Invalid or expired token.');
        }

        // Confirm the lead
        $lead->confirmed_at = now();
        $lead->confirmation_token = null; // Clear the token once confirmed
        $lead->save();

        return redirect()->route('welcome')->with('success', 'Your email has been confirmed!');
    }
}
