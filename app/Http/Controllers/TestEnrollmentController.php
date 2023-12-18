<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestEnrollmentController extends Controller
{

    public function dashboard() {
       $user= Auth::user();
        $regUser = User::all();
        return view('/dashboard', ['user'=>$user, 'regUser'=>$regUser ]);
    }
    public function sendTestNotification() {

        $user = User::first();

        $enrollmentData = [
            'body' => 'You have received a new notification.',
            'enrollmentText' => 'You are now allowed to add a new property listing.',
            'url' => url('/'),
            'thankyou' => 'Thank you! Expiration of this notification is 10 Days.'
        ];

       $user->notify(new Test($enrollmentData));

        return redirect()->route('dashboard')->with('success', 'Notification has been sent');

    }
}
