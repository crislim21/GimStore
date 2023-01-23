<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class EmailController extends Controller
{
    public function index() {
        $data = [
            'subject' => 'Test Password Change from GimStore',
            'body' => 'This is a test email from GimStore'
        ];

        try {
            Mail::to("crislimpar123@gmail.com")->send(new MailNotify($data));
            return redirect('/profile')->with('success', 'Email sent! check your mail box');
        } catch (\Throwable $th) {
            return redirect('/profile')->with('error', 'Email failed to send!');
        }
    }
}
