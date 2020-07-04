<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Mail;

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

        $this->sendEmailByFacade($user);
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

    /**
     * Send an email using a facade
     * 
     * @param  User $user 
     * @return void
     */
    private function sendEmailByFacade(User $user): void 
    {
        $data = [
            'name' => $user->name
        ];
        // sent mail
        Mail::send('emails.test', $data, function($message) use ($user) {
            $message->to($user->email, 'Test')
                ->subject('This is a test mail');
        });
    }
}
