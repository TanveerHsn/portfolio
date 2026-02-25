<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('portfolio.home');
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function projects()
    {
        return view('portfolio.projects');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Here you can add logic to:
        // 1. Send an email notification
        // 2. Store the message in database
        // 3. Integrate with a third-party service

        // Example: Log the contact submission
        logger()->info('Contact form submission', $validated);

        return redirect()->route('contact')->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
