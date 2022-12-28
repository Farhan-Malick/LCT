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
            'subject' => 'Cambo Turorial Mail',
            'body' =>'Hello This is my email delivery!'
        ];
        try{
            Mail::to('usamaayub00@gmail.com')->send(new MailNotify($data));
            return response()->json(['Great check your mail box']);
        }catch(Exception $th){
            return response()->json(['Mail not sent']);
        }
    }
}
