<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        return view('mainpageA');
    }

    function user_information(){

        // 會員中心名稱和郵件(抓取資料)
        if(session()->has('LoggedUser')){
            // $user = User::where('id', '=', session('LoggedUser'))->first();
            $user = DB::table('user')->where('userId', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        return view('layouts/app', $data);
        return view('layouts/alter', $data);
        return view('layouts/main', $data);
        return view('homepage', $data);
        return view('searchme', $data);
        return view('searchmetag1', $data);
        return view('searchmetag2', $data);
        return view('searchmetag3', $data);
        return view('searchmetag4', $data);
        return view('searchmetag5', $data);
        return view('searchmetag6', $data);
        return view('searchmetag7', $data);
        return view('searchmetag8', $data);

    }

}