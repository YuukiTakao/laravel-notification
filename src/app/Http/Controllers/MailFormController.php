<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailFormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Success
     */
    public function register(RegisterRequest $request)
    {
        // トランザクション
        // DB登録
        // キューイング
        // メール送信
        // Slack通知

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
        return view('mail_form.complete');
    }
}
