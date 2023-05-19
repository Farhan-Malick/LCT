<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
// use App\Mail\CustomResetPassword;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use Illuminate\Support\Facades\Password;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    public $email;
    // use SendsPasswordResetEmails;

    // use SendsPasswordResetEmails;
    /**
     
 * Send a reset link to the given user.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
 */
 
 
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }
    
    protected function validateEmail(Request $request)
{
    $this->validate($request, ['email' => 'required|email']);
}
public function sendResetLinkEmail(Request $request)
{
      
    $this->validateEmail($request);

    $response = $this->broker()->sendResetLink(
        $request->only('email')
    );
   
     $this->email = $request->only('email');
    if ($response == Password::RESET_LINK_SENT) {
        $token = $response;
      
                $this->getResetEmail($token);
        return back()->with('status', trans($response));
    }

    // If an error occurs, customize the error message here.
    return back()->withErrors(
        ['email' => trans($response)]
    );
}

/**
 * Get the response for a successful password reset link.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  string  $response
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
 */
protected function sendResetLinkResponse(Request $request, $response)
{
 
    return back()->with('status', trans($response));
}

/**
 * Get the broker to be used during password reset.
 *
 * @return \Illuminate\Contracts\Auth\PasswordBroker
 */
public function broker()
{
    return Password::broker('users');
}

/**
 * Get the email subject line for the reset link email.
 *
 * @return string
 */
public function getEmailSubject()
{
    return 'Custom Password Reset';
}

/**
 * Get the reset email.
 *
 * @param  string  $token
 * @return \Illuminate\Http\Response
 */
public function getResetEmail($token)
{
    $email = $this->email;
    $email = $email['email'];
    $resetlink = url('password/reset', $token);

    // Check if the user exists in the database
    $userExists = User::where('email', $email)->exists();

    if ($userExists) {
        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.sendgrid.com/v3/mail/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '
                {
                    "personalizations": [
                        {
                            "to": [
                                {
                                    "email": "'.$email.'"
                                }
                            ],
                            "subject": "Welcome to Ignite!",
                            "dynamic_template_data": {
                                "username": "'.$resetlink.'",
                                "email": "'.$email.'"
                            }
                        }
                    ],
                    "template_id": "d-7dca342eeded42d4b4d5e726731de275",
                    "from": {
                        "email": "noreply@lastchanceticket.com",
                        "name": "Last Chance Ticket"
                    }
                }',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer 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',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            if (curl_errno($curl)) {
                throw new Exception('Curl error: ' . curl_error($curl));
            }

            curl_close($curl);

            Session::flash('success', 'Password reset link has been sent to your email.');
        } catch (Exception $e) {
            Session::flash('error', 'An error occurred while sending the password reset email.');
            // Handle the exception here, for example log it or display an error message to the user
            return back()->withErrors(['email' => 'An error occurred while sending the email']);
        }
    } else {
        Session::flash('error', 'This email does not exist in our records.');
    }
}




}
