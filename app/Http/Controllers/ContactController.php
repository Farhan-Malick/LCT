<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactDetailForAdmin()
    {
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $allevents = EventListing::get();
        $events = Event::get();
        $contactus = Contact::all();
        return view('Admin.pages.Contact',compact('FooterEventListing','Footerevents','contactus','events','contactus'));
    }
    public function Store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'purpose' => 'required',
            'message' => 'required'
        ]);
        
        $contact = new Contact();
         //return $request;
         $contact->fname = $request->fname;
         $contact->lname = $request->lname;
         $contact->email = $request->email;
         $contact->country = $request->country;
         $contact->phone = $request->phone;
         $contact->purpose = $request->purpose;
         $contact->message = $request->message;
         $contact->save();
         return back()->with('msg',"Your request has been sent to the Admin center");
    }
}
