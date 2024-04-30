<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default, this controller uses a trait to
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cep' => ['required', 'string', 'min:8'], // Adicione a validação para o CEP
            'logradouro' => ['required', 'string', 'max:255'], // Adicione a validação para o logradouro
            'bairro' => ['required', 'string', 'max:255'], // Adicione a validação para o bairro
            'cidade' => ['required', 'string', 'max:255'], // Adicione a validação para a cidade
            'estado' => ['required', 'string', 'max:255'], // Adicione a validação para o estado
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cep' => $data['cep'], // Inclua o campo de CEP
            'logradouro' => $data['logradouro'], // Inclua o campo de logradouro
            'bairro' => $data['bairro'], // Inclua o campo de bairro
            'cidade' => $data['cidade'], // Inclua o campo de cidade
            'estado' => $data['estado'], // Inclua o campo de estado
        ]);
    }
}
