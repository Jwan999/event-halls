<?php

namespace App\Http\Controllers\Auth;

use \App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    public function redirectToProvider($driver, Request $request)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($driver)
    {
//        dd($driver);
        try {
            $user = Socialite::driver($driver)->stateless()->user();
//            dd($user);
        } catch (\Exception $e) {
//            dd($e);
            return redirect()->route('login');
        }

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new User;
            $newUser->provider = $driver;
            $newUser->provider_id = $user->getId();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->avatar = $user->getAvatar();
            $newUser->save();

            auth()->login($newUser, true);
        }
        return redirect('/');
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
        return redirect()->to('/');
    }

    public function guard()
    {
        return Auth::guard('user');
    }

    public function showLoginForm()
    {
        return Socialite::driver('google')->redirect();
    }

}
