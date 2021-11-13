<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citylist;
use App\Models\User_1;
use App\Models\TagList;

class MemberAlterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $User = User_1::find($id);
        $cityList = Citylist::all();
        $tagList = TagList::all();
        // dd($User->interestTag);
        $tag = mb_split(',', $User->interestTag); // 字串轉換成陣列
        // dd($tag);

        return View ('member.f5', compact('User', 'cityList', 'tagList', 'id', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberAlter  $memberAlter
     * @return \Illuminate\Http\Response
     */
    public function show(MemberAlter $memberAlter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberAlter  $memberAlter
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberAlter  $memberAlter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $User = User_1::find($id);
        $tagCheckbox = $request->input('tagCheckbox');   // 接收興趣input
        
        // 判斷是否有選擇興趣
        if (isset($tagCheckbox)) {
            $userTag = implode(',', $tagCheckbox);  // 陣列轉字串
            $User->interestTag = $userTag;
        } else {
            $User->interestTag = $User->interestTag;
        }

        // 判斷是否有上傳頭像照片
        if (isset($request->userImg)) {           
            $imageName = 
            'id='.$User->userId.'.'.time().'.'.$request->userImg->extension(); // 命名會員頭像 
            $request->userImg->move(public_path('upload'),  $imageName);  // 搬移到public/upload
            $User->userImg = $imageName;
        } else {
            $User->userImg = $User->userImg;
        }

        $User->cityId = $request->userCity;
        $User->userName = $request->userName;       
        $User->userEmail = $request->userEmail;       
        $User->userIntro = $request->userIntro;
        $User->userNickName = $request->userNickName;
        $User->userPassword = $request->userPassword;       
        $User->userBirthday = $request->userBirthday;       
        $User->save();
        
        return back()->with('notice', '會員資料更新成功！');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberAlter  $memberAlter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User_1::find($id);
        $User->delete();
        return redirect()->route('home')->with('notice', '會員資料已刪除請重新登入');
    }
}
