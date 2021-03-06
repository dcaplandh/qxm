<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

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

    protected function sendFailedLoginResponse(Request $request)
    {
      if ( ! User::where('email', $request->email)->first() ) {
          return redirect()->back()
              ->withInput($request->only($this->username(), 'remember'))
              ->withErrors([
                  'password' => 'Email y/o contraseña no válido',
              ]);
      }

      if ( ! User::where('email', $request->email)->where('password', bcrypt($request->password))->first() ) {
          return redirect()->back()
              ->withInput($request->only($this->username(), 'remember'))
              ->withErrors([
                  'password' => 'Email y/o contraseña no válido',
              ]);
      }
    }
}
