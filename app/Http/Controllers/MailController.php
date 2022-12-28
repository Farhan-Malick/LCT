<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MailNotify;

use Exception;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //

    public function index(){
        $data = [
            'subject' => 'Last Chance Ticket Mailer',
            'body' =>'Hello This is my email delivery!'
        ];
        try{
            Mail::to('farhan.malicck@gmail.com')->send(new MailNotify($data));
            return response()->json(['Great check your mail box']);
        }catch(Exception $th){
            return response()->json(['Mail not sent']);
        }
    } 
}
