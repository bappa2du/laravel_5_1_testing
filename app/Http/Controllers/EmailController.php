<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        $data = array(
            'name' => "Learning Laravel",
        );

        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('bappa2du@gmail.com', 'Learning Laravel');
            $message->to('iftakharul.alam@live.com')->subject('Learning Laravel test email');
        });

        return "Your email has been sent successfully";
    }
}
