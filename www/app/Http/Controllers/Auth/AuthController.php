<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\PasswordEditRequest;
use Illuminate\Http\Request;
use App\Http\Requests;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $redirectPath = '/mypage';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function hoge(Request $request)
    {
        echo 'hoge';
        exit();
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
            'user_id' => 'required|max:16',
            'user_name' => 'required|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'credit_card_number' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return test_user^
     */
    protected function create(array $data)
    {
        return User::create([
            'user_id' => $data['user_id'],
            'user_name' => $data['user_name'],
            'password' => bcrypt($data['password']),
            'credit_card_number' => $data['credit_card_number'],
            'email' => $data['email'],
        ]);
    }

    /**
     * 認証を処理する
     *
     * @return Response
     */
    public function passwordEditProcess()
    {
        // echo 'hoge';
        // exit();
        // $user = [
        //     'email'    => Auth::user()->email,
        //     'password' => Auth::user()->password
        // ];

        // if (Auth::attempt($user)) {
        //     // 認証に成功した
        //     Auth::user()->password = bcrypt($request->input('new_password'));
        //     Auth::user()->save();
        //     Auth::logout();

        //     $user = [
        //         'email'    => Auth::user()->email,
        //         'password' => $request->input('new_password')
        //     ];
        //     Auth::login($user, true);

        // } else {
        //     return redirect()->back()->withErrors([
        //         'errorMessage' => 'パスワードが違います'
        //     ]);
        // }
    }
}
