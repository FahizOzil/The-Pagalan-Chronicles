<?php
namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeSubscriber;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:subscribers,email',
        ]);

        // Create new subscriber
        $subscriber = Subscriber::create([
            'email' => $validated['email'],
            // 'source' => 'join_adventure_section'
        ]);

        // Send welcome email
        Mail::to($subscriber->email)->cc('fahizozil17@gmail.com')->send(new WelcomeSubscriber());

        // Return response - for AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for joining the adventure! Check your email for updates about The Pagalan Chronicles.'
            ]);
        }

        // For regular form submissions
        return back()->with('success', 'Thank you for joining the adventure! Check your email for updates about The Pagalan Chronicles.');
    }
}