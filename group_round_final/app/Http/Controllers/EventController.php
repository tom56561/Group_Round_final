<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\userRecord;
use App\Models\user;
use App\Models\tagList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    function index($id) {
        if(session()->has('LoggedUser')){
            $user = User::where('userId', session('LoggedUser'))->first()->userId;
        }
        $db = Event::find($id);
        // $db = DB::table('event')->where('eventId','=',$id);
        $eventTitle = $db -> eventTitle;
        $eventContent = $db -> eventContent;
        $eventImg = $db -> eventImg;
        $DateTime = $db -> eventDateTime;
        $eventDateTime =  date('Y年m月d日',strtotime($DateTime));
        $eventDateTime1 =  date('H時i分',strtotime($DateTime));
        $eventDateTime2 =  date('m月d日 H:i',strtotime($DateTime));
        $weekarray=array("日","一","二","三","四","五","六");
        $weekday = $weekarray[date("w",strtotime($DateTime))];
        $eventCity = $db -> eventCity;
        $eventLocation = $db -> eventLocation;
        $peopleNumber = $db -> peopleNumber;
        $userGender = $db -> userGender;
        $holduser = $db -> userId;
        $eventTag = $db -> tagList1 -> tag; //外鍵
        $eventTag2 = $db -> tagList2 -> tag; //外鍵
        $userName = $db -> user -> userName; //外鍵
        $userImg = $db -> user -> userImg; //外鍵
        $userJoin = $db -> userRecord->where('type','join'); //外鍵一對多
        $userLike = $db -> userRecord->where('type','like'); //外鍵一對多


        $viewModel = compact(
            "eventTitle", 
            "eventContent", 
            "eventImg", 
            "eventDateTime",
            "eventDateTime1",
            "eventDateTime2",
            "weekday",
            "eventCity", 
            "eventLocation", 
            "peopleNumber", 
            "userGender",
            "eventTag", 
            "eventTag2", 
            "userName", 
            "userImg", 
            "userJoin",
            "id",
            "userLike",
            "holduser",
            "user",
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

    function edit1($id){
        return "good";
    }

    function store1(Request $request)
    {
        // $db = DB::table('event');
        // $result = $db -> insert([
        //     "eventTag" => $request->array[0],
        //     "eventTag2" => $request->array[1],
        // ]);
        if(session()->has('LoggedUser')){
            $user = User::where('userId', session('LoggedUser'))->first()->userId;
        }
        $event = new Event();
        $event->userId = $user;
        $event->eventTag = $request->array[0];
        $event->eventTag2 = $request->array[1];
        $result = $event->save();
        // $event -> create($request -> all()); 
        return "holdevent2";
    }

    function store2(Request $request)
    {
        $imgName = $request->img->getClientOriginalName();
        $request->img->move(public_path('eventImg'),  $imgName);
        $last = DB::table('event') -> orderByDesc('eventId') -> first() ->eventId;
        // $result = $db -> where('eventId','=',$last) -> update([
        //     "eventTitle" => $request->title,
        //     "eventContent" => $request->content,
        // ]);
        $event=Event::find($last);
        $event->eventImg = $imgName;
        $event->eventTitle = $request->title;
        $event->eventContent = $request->content;
        $event->save();

        return redirect("/holdevent3");

    }
    function store3(Request $request)
    {
        $last = DB::table('event') -> orderByDesc('eventId') -> first() ->eventId;
        // $result = $db -> where('eventId','=',$last) -> update([
        //     "eventDateTime" => $request->time,
        //     "eventLocation" => $request->location,
        //     "peopleNumber" => $request->people,
        //     "userGender" => $request->gender,
        // ]);
        $event=Event::find($last);
        $event->eventDateTime = $request->time;
        $event->eventLocation = $request->location;
        $event->peopleNumber = $request->people;
        $event->eventCity = $request->city;
        $event->userGender = $request->gender;
        $event->save();

        return redirect("/holdevent4");
        
    }

    function join(Request $request, $id)
    {
        if(session()->has('LoggedUser')){
            $user = User::where('userId', session('LoggedUser'))->first()->userId;
        }
        $userRecord = new UserRecord();
        $userRecord -> userId = $user; 
        $userRecord -> eventId = $id;
        $userRecord -> type = "join";
        $userRecord->save();
        return redirect("event/$id");
    }

    function cancel(Request $request, $id)
    {
        if(session()->has('LoggedUser')){
            $user = User::where('userId', session('LoggedUser'))->first()->userId;
        }
        $matchThese = ['eventId' => $id, 'userId' => $user, 'type' =>'join'];
        UserRecord::where($matchThese)->delete();
        return redirect("event/$id");
    }

    function like(Request $request, $id)
    {
        if(session()->has('LoggedUser')){
            $user = User::where('userId', session('LoggedUser'))->first()->userId;
        }
        $result = 'error';
        $matchThese = ['eventId' => $id, 'userId' => $user, 'type' =>'like'];
        $like = UserRecord::where($matchThese)->first();
        if(isset($like)){
            UserRecord::destroy($like->id);
            $result = 'delete';
        }else{
            $userRecord = new UserRecord();
            $userRecord -> userId = $user;  //測試
            $userRecord -> eventId = $id;
            $userRecord -> type = "like";
            $userRecord->save();
            $result = 'success';
        }
        return $result;
    }

}
