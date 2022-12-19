<?php
namespace App\Http\Controllers;
use Exception;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
class SocialController extends Controller

{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }
    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect()->route('home');
            }else{
                $parts = explode(" ", $user->name);
                $lastname = array_pop($parts);
                $firstname = implode(" ", $parts);
                $createUser = User::create([
                    'first_name' => $firstname,
                    'last_name' => $lastname,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);

                Auth::login($createUser);
                return redirect()->route('home');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
