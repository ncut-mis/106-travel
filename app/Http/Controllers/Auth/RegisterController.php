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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:6', 'max:10'],
            'birthday' => ['required', 'string'],
            'sex' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $cont = NuLL;
        $Users = new\App\User();
        $Users->name = $data['name'];
        $Users->email = $data['email'];
        $Users->password = Hash::make($data['password']);
        $Users->phone = $data['phone'];
        $Users->birthday = $data['birthday'];
        $Users->sex = $data['sex'];
        $Users->type = $data['type'];
        $Users->save();

        if ($data['type'] == "會員") {
            $users = [
                [
                    'cont' => $cont]
            ];
            foreach ($users as $users) {
                $Users->members()->create(($users));

            }
            return $Users;
        }

    }
}
