<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MailNotify;

use Exception;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;


class MailController extends Controller
{
    //

    public function index(){

        $data = [
            'subject' => 'Last Chance Ticket Mailer',
            'body' =>'Hello This is my email delivery!'
        ];
        try{
            Mail::to(`usamaayub00@gmail.com`)->send(new MailNotify($data));
            return response()->json(['Great check your mail box']);
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    } 
}
