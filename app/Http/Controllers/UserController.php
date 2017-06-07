<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getLogin(){
        if(\Auth::check()){
            return redirect('admin/list');
        }else{
            return view('login');
        }
    }

    public function postLogin(Request $request){
    	if (\Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword])) {
            return redirect()->route('list');
        }else{
            return redirect()->route('getLogin')->with('message','Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    public function getSignup(){
    	return view('signup');
    }

    public function postSignup(Request $request){
    	$user = new User;
    	$user->name = $request->txtName;
    	$user->email = $request->txtEmail;
    	$user->password = bcrypt($request->txtPassword);
    	$user->save();
    	return redirect()->route('getLogin')->with('message','Đăng Ký Thành Công ! Vui Lòng Đăng Nhập !');
    }

    public function logout(){
        \Auth::logout();
        return redirect('login');
    }

}
