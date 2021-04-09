<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \App\Http\Requests\CreateUserRequest;


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
    protected $redirectTo = '/profile';

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
//		dd($data);
        return Validator::make($data, [
			'nickname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
			'surname' => ['required', 'string', 'max:255'],
//			'avatar' => ['image','mimes:jpeg,bmp,png'],
			'phone'=> ['required'], //, 'regex:/(01)[0-9]{9}/'
			'sex' => ['required', 'in:male,female'], //
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//			'allowMailing' => [],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

	
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
	 * CreateUserRequest
     */
    protected function create(array $data)
    {
		
		$path = $data['avatar']->store('public/avatars');
//		dd($path);
        return User::create([
			'nickname' => $data['nickname'],
            'name' => $data['name'],
			'surname' => $data['surname'],
			'avatar' => $path,
			'phone'=> $data['phone'],
			'sex' => $data['sex'],
            'email' => $data['email'],
			'allowMailing' => (bool)($data['allowMailing'] ?? false),
			
            'password' => Hash::make($data['password']),
        ]);
    }
}
