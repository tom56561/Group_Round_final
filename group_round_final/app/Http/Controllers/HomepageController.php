<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        return view('mainpageA');
    }

    function user_information(){
        // return view('member/profile');

        // 會員中心名稱和郵件(抓取資料)
        if(session()->has('LoggedUser')){
            // $user = User::where('id', '=', session('LoggedUser'))->first();
            // 用QUERY做到和上面同樣效果
            $user = DB::table('user')->where('userId', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        return $data;
        // return redirect()->intended('member/index', $data);
        // return back()->with('success','登入成功');
    }

}