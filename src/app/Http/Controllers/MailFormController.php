<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class MailFormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Success
     */
    public function register(Request $request)
    {
        $user = User::create([
            'id'       => User::all()->count() + 1,
            'email'    => $request->user_email,
            'name'     => $request->user_name,
            'password' => Hash::make($request->user_password),
        ]);
        
        // sent mail
        // slack notification
        // Queueing
        
        return redirect()->route('mail_form.complete')
            ->with('status', 'Congratulations! Test registration is complete!');
    }

    /**
     * Display the completion page.
     *
     * @param  Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function complete(Request $request)
    {
        return view('complete');
    }
}
