<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citylist;
use App\Models\User;
use App\Models\TagList;
use App\Models\Event;
use App\Models\userRecord;



class MemberController extends Controller
{
    function index($id) {
        $User = User::find($id);
        $createEvent = Event::where('userId', $id)->get(); // 發起的活動
        $tag = mb_split(',', $User->interestTag); // 字串轉換成陣列
        // dd($tag);
        $sessionId = session()->get('LoggedUser');
        $cityList = Citylist::all();
        $tagList = TagList::all();
        return View ('member.index', compact('User', 'cityList', 'tagList', 'id', 'createEvent', 'tag', 'sessionId'));
    }

    // 參加的活動
    function joinEvent() {
        if(session()->has('LoggedUser')){
            $id = User::where('userId', session('LoggedUser'))->first()->userId;
            $joinEvent = userRecord::where('userId', $id)->where('type', 'join')->first();
            $db = User::find($id);
            $userJoin = $db -> event->where('type','join')->where('userId', $id);
            
            dd($userJoin);
        }
        return view('member.F1', compact('id', 'joinEvent'));
    }

    // 發起的活動
    function createEvent() {
        if(session()->has('LoggedUser')){
            $id = User::where('userId', session('LoggedUser'))->first()->userId;
            $createEvent = Event::where('userId', $id)->get(); // 發起的活動
        }
        return view("member.F2", compact('id', 'createEvent'));
    }

    // 已結束的活動
    function finishedEvent() {
        if(session()->has('LoggedUser')){
            $id = User::where('userId', session('LoggedUser'))->first()->userId;
            
        }
        return view("member.F3", compact('id'));
    }
    
    // 收藏的活動
    function collectEvent() {
        if(session()->has('LoggedUser')){
            $id = User::where('userId', session('LoggedUser'))->first()->userId;
            
        }
        return view("member.F4", compact('id'));
    }
    
    // 團員的回饋
    function memberComment() {
        if(session()->has('LoggedUser')){
            $id = User::where('userId', session('LoggedUser'))->first()->userId;
            
        }
        return view("member.F6", compact('id'));
    }
}
