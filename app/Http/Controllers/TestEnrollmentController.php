<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Test;
use Illuminate\Http\Request;

class TestEnrollmentController extends Controller
{
    public function sendTestNotification() {

        $user = User::first();

        $enrollmentData = [
            'body' => 'You have received a new test notification.',
            'enrollmentText' => 'You are now allowed to enroll.',
            'url' => url('/'),
            'thankyou' => 'You have 14 Days to enroll.'
        ];

       $user->notify(new Test($enrollmentData));
    }
}
