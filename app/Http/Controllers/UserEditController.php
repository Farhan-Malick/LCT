<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;

class UserEditController extends Controller
{
    public function userProfileEdit($id){
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        $user = User::find($id);
        return view('dashboard.userEdit',compact('user','FooterEventListing','Footerevents'));
    }
    public function userProfileUpdate(Request $request,$id){
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->update();
        $request->session()->flash('error','Data Has Been Updated Successfully'); 
        return redirect('/dashboard')->with('SuccssMessage','You Have Updated Yout Profile Successfully');
    }
}
