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
            'name' => ['required', 'string', 'max:255'],
            'agree' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:14'],
            'osmusername' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

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
        $this->validate(request(), [
            'name' => 'required','string',
            
            'member' => 'required','string',
            'agree' => 'required','string',
            
            'phone' => 'required','string',
            'joined' => 'required','string',
            'joined_by' => 'required','string',
            
            
            
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'osmusername' => $data['osmusername'],
            'member' => $data['member'],
            'department' => $data['department'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'agree' => $data['agree'],
            'joined' => $data['joined'],
            'joined_by' => $data['joined_by'],
            'password' => Hash::make($data['password']),
        ]);
        return with('success', ' You are now a Member of UniqueMappersTeam Network');
    }
}
