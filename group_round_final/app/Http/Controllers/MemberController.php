<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citylist;
use App\Models\User_1;
use App\Models\TagList;
use App\Models\UserInterestTag;
use App\Models\Event;


class MemberController extends Controller
{
    function index($id) {
        $User = User_1::find($id);
        $createEvent = Event::where('userId', $id)->get(); // 發起的活動        
        $tag = mb_split(',', $User->interestTag); // 字串轉換成陣列
        // dd($tag);
        $cityList = Citylist::all();
        $tagList = TagList::all();
        return View ('member.index', compact('User', 'cityList', 'tagList', 'id', 'createEvent', 'tag'));
    }

    // 參加的活動
    function joinEvent($id) {
        return view('member.F1', compact('id'));
    }

    // 發起的活動
    function createEvent($id) {
        $createEvent = Event::where('userId', $id)->get(); // 發起的活動
        return view("member.F2", compact('id', 'createEvent'));
    }

    // 已結束的活動
    function finishedEvent($id) {
        return view("member.F3", compact('id'));
    }
    
    // 收藏的活動
    function collectEvent($id) {
        return view("member.F4", compact('id'));
    }
    
    // 團員的回饋
    function memberComment($id) {
        return view("member.F6", compact('id'));
    }
}
