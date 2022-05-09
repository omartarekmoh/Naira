<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Video extends Controller {

    public function sendMessage(Request $request)
    {

        $details = ['name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,];

        \Mail::to('Naira@gmail.com')->send(new \App\Mail\Mail($details));

        return back()->with('Success', 'Email Sent');
    }

    public
    function store(Request $request)
    {
        if (! Auth::check())
        {
            return back()->with('Error', 'Please Login First');
        }

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'video' => 'required | mimes:mp4,mov,ogg,qt'
        ]);


        $file = $request->file('video');
        $filename = time() . $file->getClientOriginalName();
        $path = public_path() . '/uploads/';
        $file->move($path, $filename);

        \App\Models\Video::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->id(),
            'video' => $filename
        ]);

        return back()->with('Success', 'Video Uploaded');
    }
}
