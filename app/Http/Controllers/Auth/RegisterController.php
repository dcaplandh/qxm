<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','min:4','alpha'],
            'lastname' => ['required', 'string', 'max:255','min:4','alpha'],
            'username' => ['required', 'string', 'max:20','min:4','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ],[
          'required' => 'Campo obligatorio',
          'string' => 'Campo alfanumérico',
          'max' => 'Máximo de 255 caracteres',
          'confirmed' => 'Debe confirmar la contraseña de manera válida',
          'password.min' => 'Mínimo de 6 caracteres',
          'name.min' => 'Mínimo de 4 caracteres',
          'lastname.min' => 'Mínimo de 4 caracteres',
          'alpha'=> 'Campo sólo de letras',
          'username.min' => 'Mínimo de 4 caracteres',
          'username.max' => 'Máximo de 20 caracteres',
          'username.unique' => 'Nombre de usuario ya existente',
          'email.unique' => 'Email ya existente',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
