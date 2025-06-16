<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendEmail(Request $request){

        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
            'subject' => 'required|string|max:255',
        ]);
        if ($validated->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validated->errors(),
            ], 422);
        }
        // Here you would typically send the email using a mail service

        // For example, using Laravel's Mail facade:
        Mail::to('fahizozil17@gmail.com')->send(new ContactMessageMail($request->all()));


        return response()->json(['message' => 'Email sent successfully!'], 200);


    }
}
