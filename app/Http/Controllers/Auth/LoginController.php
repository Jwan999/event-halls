<?php

namespace App\Http\Controllers\Auth;

use \App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Response;
use Auth;


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
    protected $redirectTo = '/dashboard/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {


        try {
            $user = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            dd($e);
            return redirect('/login');
        }

        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser = new User;
            $newUser->name = $user->name;
            dd($user->name);
            $newUser->email = $user->email;
            $newUser->provider_id = $user->id;
            $newUser->provider = "google";
            $newUser->save();
//            auth()->login($newUser, true);
        }
        return redirect()->to('/home');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'provider' => strtoupper($provider),
            'provider_id' => $user->id
        ]);
    }

    public function redirectTo()
    {
        return redirect()->to('/dashboard/');
    }
}
