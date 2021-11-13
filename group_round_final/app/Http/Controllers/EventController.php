<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    function index($id) {
        $db = DB::table('event')->where('eventId','=',$id);
        $eventTitle = $db -> value('eventTitle');
        $eventContent = $db -> value('eventContent');
        $eventImg = $db -> value('eventImg');
        $DateTime = $db -> value('eventDateTime');
        $eventDateTime =  date('Y年m月d日',strtotime($DateTime));
        $eventDateTime1 =  date('H時i分',strtotime($DateTime));
        $eventDateTime2 =  date('m月d日 H:i',strtotime($DateTime));
        $weekarray=array("日","一","二","三","四","五","六");
        $weekday = $weekarray[date("w",strtotime($DateTime))];
        $eventCity = $db -> value('eventCity');
        $eventLocation = $db -> value('eventLocation');
        $peopleNumber = $db -> value('peopleNumber');
        $userGender = $db -> value('userGender');
        $eventTag = $db -> value('eventTag');
        $eventTag2 = $db -> value('eventTag2');
        $userId = $db -> value('userId');
        
        $viewModel = compact(
            "eventTitle", 
            "eventContent", 
            "eventImg", 
            "eventDateTime",
            "eventDateTime1",
            "eventDateTime2",
            "eventCity", 
            "eventLocation", 
            "peopleNumber", 
            "userGender",
            "eventTag", 
            "eventTag2", 
            "userId", 
            "weekday",
        );
        // dd($viewModel);
        return view("event.eventPageC", $viewModel);

    }
    function index1() {
        return view('event.holdEventC1');
    }
    function index2() {
        return view('event.holdEventC2');
    }
    function index3() {
        return view('event.holdEventC3');
    }
    function index4() {
        return view('event.holdEventC4');
    }

    function store1(Request $request)
    {
        $db = DB::table('event');
        $result = $db -> insert([
            "eventTag" => $request->array[0],
            "eventTag2" => $request->array[1],
        ]);
        
        // $event = new Event();
        // $event->eventTag = 2;
        // $event->eventTag2 = 3;
        // $result = $event->save();
        // // $event -> create($request -> all());
        return "holdevent2";
        // // $test = $request->array[0];
    }

    function store2(Request $request)
    {
        $db = DB::table('event');
        $last = $db -> orderByDesc('eventId') -> first() ->eventId;
        $result = $db -> where('eventId','=',$last) -> update([
            "eventTitle" => $request->title,
            "eventContent" => $request->content,
        ]);
        return redirect("/holdevent3");

    }
    function store3(Request $request)
    {
        $db = DB::table('event');
        $last = $db -> orderByDesc('eventId') -> first() ->eventId;
        $result = $db -> where('eventId','=',$last) -> update([
            "eventDateTime" => $request->time,
            "eventLocation" => $request->location,
            "peopleNumber" => $request->people,
            "userGender" => $request->gender,
        ]);

        return redirect("/holdevent4");

    }
}
