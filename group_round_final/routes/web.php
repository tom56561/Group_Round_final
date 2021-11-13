<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [UserAuthController::class, 'login'])->middleware('alreadyLoggedIn'); // alreadyLoggedIn是防止在已登入狀態下看到登入和註冊頁面
Route::get('register', [UserAuthController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('auth.create'); // 與註冊頁面的form action相同
// Route::get('register/succsee', [UserAuthController::class, 'success']); 註冊後跳轉
Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');

// profile相關換成小馬的member
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged'); // isLogged在Kernel裡接到 Middlewares/AuthCheck 檢查有無登入狀態接這個
//         換成其他名稱會出現 Bad Method Call 先用profile當會員中心

Route::get('logout', [UserAuthController::class, 'logout']);
//   ------------
// member
Route::get('/member/{id}', "App\Http\Controllers\MemberController@index")->name( 'member.index' );
Route::get('/memberF1/{id}', "App\Http\Controllers\MemberController@joinEvent")->name( 'member.join' );
Route::get('/memberF2/{id}', "App\Http\Controllers\MemberController@createEvent")->name( 'member.create' );
Route::get('/memberF3/{id}', "App\Http\Controllers\MemberController@finishedEvent")->name( 'member.finished' );
Route::get('/memberF4/{id}', "App\Http\Controllers\MemberController@collectEvent")->name( 'member.collect' );
Route::get('/memberF6/{id}', "App\Http\Controllers\MemberController@memberComment")->name( 'member.comment' );

// 修改會員資料
Route::get('/memberF5/{id}', "App\Http\Controllers\MemberAlterController@index")->name( 'member.Alter' );
Route::resource('/MemberAlter', 'App\Http\Controllers\MemberAlterController');
//   ------------
// serch
Route::get('/searchme', function(){
    return view('searchme');
  });

  Route::get('/searchmetag1', function(){
    return view('searchmetag1');
  });  

  Route::get('/searchmetag2', function(){
    return view('searchmetag2');
  });  

  Route::get('/searchmetag3', function(){
    return view('searchmetag3');
  });  

  Route::get('/searchmetag4', function(){
    return view('searchmetag4');
  });  

  Route::get('/searchmetag5', function(){
    return view('searchmetag5');
  });  

  Route::get('/searchmetag6', function(){
    return view('searchmetag6');
  });  

  Route::get('/searchmetag7', function(){
    return view('searchmetag7');
  });  

  Route::get('/searchmetag8', function(){
    return view('searchmetag8');
  });  

  Route::get('/mainpage', function(){
    return view('mainpageA');
  });  

  Route::get('/mainpageB', function(){
    return view('mainpageB');
  });  

  Route::get('/eventlist', function(){
    return view('eventlist');
  });  
//   ------------
// event
Route::get('holdevent/{id}', 'App\Http\Controllers\EventController@index');
Route::get('holdevent1', 'App\Http\Controllers\EventController@index1');
Route::get('holdevent2', 'App\Http\Controllers\EventController@index2');
Route::get('holdevent3', 'App\Http\Controllers\EventController@index3');
Route::get('holdevent4', 'App\Http\Controllers\EventController@index4');
Route::any('holdevent/store1', 'App\Http\Controllers\EventController@store1');
Route::any('holdevent/store2', 'App\Http\Controllers\EventController@store2');
Route::any('holdevent/store3', 'App\Http\Controllers\EventController@store3');
//   ------------
// feedback
// 建庠的路由要麻煩重設，因為"/"已經給首頁了
// controller也麻煩更新