<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    function user_identity(){
        
        if(session()->has('LoggedUser')){
            $user = User::where('userId', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
            $user_par = $user-> userId;
        }else{
            $user_par = 0;
        }
        return view('homepage', $user_par);
        return view('layouts/app', $data);
        return view('layouts/alter', $data);
        return view('layouts/main', $data);
        // return redirect()->intended('member/index', $data);
        // return back()->with('success','登入成功');
    }
}
