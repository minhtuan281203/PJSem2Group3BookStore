<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
//    private $userService;
//
//    public function __construct(UserServiceInterface $userService)
//    {
//        $this->userService = $userService;
//    }

    public function login()
    {
        return view('front.account.login');
    }
    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => [1,2],

        ];

        $remember = $request->remember;
        if (Auth::attempt($credentials, $remember))
        {
            return redirect('');
        }
        else {
            return back()->with('notification','ERROR: Email or password is wrong');
        }
    }
    public function logout(){
        Auth::logout();

        return back();
    }
    public function register()
    {

        return view('front.account.register');
    }
    public function postRegister(Request $request)
    {
       if($request->password != $request->password_confirmation)
       {
           return back()->with('notification');

       }
       $data = [
           'name' => $request->name,
           'email'=> $request->email,
           'password'=> bcrypt($request->password),
           'level' => 2 ,


       ];
        \App\Models\User::create($data);
       return redirect('account/login')->with('notification', 'Error:your password wrong');
    }

}
