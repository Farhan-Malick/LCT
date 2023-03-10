<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\EventListing;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contacts\Session\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        $FooterEventListing = EventListing::get();
        $Footerevents = Event::get();
        return view('auth.login',compact('FooterEventListing','Footerevents'));
        // return view("auth.login");
    }

    public function login(Request $request)
    {

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {          
           if (auth()->user()->account_type == 'admin')
            {
                return redirect()->route('admin.home');
            }
            else
            {
            return redirect(session()->get('url.intended'));
            }
          
        }
        else{

            return redirect()->back()->with('error','Email-Address / Password Does Not Match.');

        }



    }

    public static function guestLogin()
    {
        if (Auth::check()) {
            return Auth::id();
        } else {
            $randomNumbers = rand(pow(10, 5 - 1), pow(10, 5) - 1);
            $guest = User::create([
                'first_name' => "Guest{$randomNumbers}",
            ]);
            // Auth::loginUsingId($guest->id);
            return $guest->id;
        }
    }
}
