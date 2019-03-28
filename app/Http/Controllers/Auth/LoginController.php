<?php

namespace EventHalls\Http\Controllers\Auth;

use \EventHalls\User;
use EventHalls\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Socialite;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class LoginController extends Controller
{
    use HasRoles;
    protected $guard_name = 'user';

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

    public function redirectToProvider(Request $request)
    {
        return Socialite::driver("google")->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {

        $driver = "google";
        try {
            $state = $request->get('state');
            $request->session()->put('state', $state);

            if (\Auth::check() == false) {
                session()->regenerate();
            }
            $user = Socialite::driver($driver)->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
            //auth()->login($existingUser, true);
        } else {
            $newUser = new User;
            $newUser->provider = $driver;
            $newUser->provider_id = $user->getId();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->avatar = $user->getAvatar();
            $newUser->save();

            Auth::login($newUser, true);
        }
//        $userId = auth()->user()->id;
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

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function redirectPath()
    {
        return view('/');
    }

}
