<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    public function forgetpass(Request $request)
    {
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        return view('auth.forgotpass',compact('FooterEventListing','Footerevents'));
    }
    public function updateForgottenPassword(Request $request, User $user)
    {
        if (User::where('email', '=', $request->email)->exists()) {
            $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            return redirect()->back()->with('success','Your Password has been Created successfully.Your Email Is In Our Database.');
        }else{
            return redirect()->back()->with('danger','Your Email Not Found in our Database.');
        }
    }
    public function EnterNewPassword(Request $request)
    {
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        return view('auth.resetPass',compact('FooterEventListing','Footerevents'));
    }
}

