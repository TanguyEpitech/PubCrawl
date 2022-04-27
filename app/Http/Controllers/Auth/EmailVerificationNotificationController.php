<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME)->with("alert", "Already send");
        } else {
            $request->user()->sendEmailVerificationNotification();

            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1')->with("success", "we send the email to your mail, check you're mail box");
        }


    }
}
