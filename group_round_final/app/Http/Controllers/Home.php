<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityList;
use App\Models\Event;
use App\Models\TagList;
use App\Models\User;
use App\Models\UserComment;
use App\Models\UserRecord;


class Home extends Controller
{

    public function index()
    {


        // $usercomment = usercomment::all();
        // return view('會員中心.web.memberCommentF6',compact('usercomment'));
        $usercom = UserComment::all();
        // $city = CityList::all();
        return view('會員中心.web.memberCommentF6', compact('usercom'));
      
        // return view('employees.index', compact('employeeList'));
    }
    public function index1()
    {


        // $usercomment = usercomment::all();
        // return view('會員中心.web.memberCommentF6',compact('usercomment'));
        // $usercom = UserComment::all();
        // $city = CityList::all();
        return view('1012活動說明+搜尋欄.html.actFeed_____E');
      
        // return view('employees.index', compact('employeeList'));
    }


    // public function create()
    // {
    //     return view("employees.create");
    // }


    public function store(Request $request)
    {
        $usecom = new usercomment();
        $usecom->feedback = $request->comment;
        $usecom->userId =1;
        $usecom->eventId = 1;
        $usecom->rate = $request->rate;
        
        $usecom->save();
        
        // $user = new user();
        // $user->userId = $request->userId;
        // $user->userName = $request->userName;
        // $user->userNickName = $request->userNickName;
        // $user->userPassword = $request->userPassword;
        // $user->userBirthday = $request->userBirthday;
        // $user->userCity = $request->userCity;
        // $user->userIntro = $request->userIntro;
        // $user->userTag = $request->userTag;
        // $user->userGenger = $request->userGenger;
        // $user->userImg = $request->userImg;
        // $user->save();
        
        // $eve = new event();
        // $eve->eventId = $request->eventId;
        // $eve->eventTitle = $request->eventTitle;
        // $eve->eventContent = $request->eventContent;
        // $eve->eventImg = $request->eventImg;
        // $eve->eventDateTime = $request->eventDateTime;
        // $eve->cityId = $request->cityId;
        // $eve->eventLocation = $request->eventLocation;
        // $eve->peopleNumber = $request->peopleNumber;
        // $eve->userGenger = $request->userGenger;
        // $eve->eventTag = $request->eventTag;
        // $eve->save();
        
        return redirect("/");
    }
    
    // public function show(Employee $employee)
    // {
        //     //
        // }


    // public function edit($id)
    // {
    //     $emp = Employee::find($id);
    //     return view('employees.edit', compact('emp'));
    // }



    // public function update(Request $request, $id)
    // {
    //     $emp = Employee::find($id);
    //     $emp->firstName = $request->firstName;
    //     $emp->lastName = $request->lastName;
    //     $emp->save();
    //     return redirect("/employees");
    // }

   
    // public function destroy(Employee $employee)
    // {
    //     //
    // }
}
