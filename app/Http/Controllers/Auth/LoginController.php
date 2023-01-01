<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    public function login(Request $request)
    {

        $input = $request->all();



        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required',

        ]);



        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {

            if (auth()->user()->account_type == 'admin') {

                return redirect()->route('admin.home');

            }else if (auth()->user()->account_type == 'buyer') {

                return redirect('dashboard');

            }else{

                return redirect()->route('/');

            }

        }else{

            return redirect()->back()->with('error','Email-Address And Password Are Wrong.');

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
