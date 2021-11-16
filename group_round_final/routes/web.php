<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\HomepageController;

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
// homepage
// Route::get('homepage', [HomepageController::class, 'homepage'])->name('home');
Route::get('/', function(){
  return view('homepage');
})->name('home');
//   ------------

Route::get('login', [UserAuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn'); // alreadyLoggedIn是防止在已登入狀態下看到登入和註冊頁面
Route::get('register', [UserAuthController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('auth.create'); // 與註冊頁面的form action相同
// Route::get('register/succsee', [UserAuthController::class, 'success']); 註冊後跳轉
Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');

// profile相關換成小馬的member
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged'); // isLogged在Kernel裡接到 Middlewares/AuthCheck 未登入會拒絕訪問
//         換成其他名稱會出現 Bad Method Call 先用profile當會員中心

Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');
//   ------------
// member
Route::get('/member/{id}', "App\Http\Controllers\MemberController@index")->name( 'member.index' );
Route::get('/memberF1/{id}', "App\Http\Controllers\MemberController@joinEvent")->name( 'member.join' )->middleware('isLogged');
Route::get('/memberF2/{id}', "App\Http\Controllers\MemberController@createEvent")->name( 'member.create' )->middleware('isLogged');
Route::get('/memberF3/{id}', "App\Http\Controllers\MemberController@finishedEvent")->name( 'member.finished' )->middleware('isLogged');
Route::get('/memberF4/{id}', "App\Http\Controllers\MemberController@collectEvent")->name( 'member.collect' )->middleware('isLogged');
Route::get('/memberF6/{id}', "App\Http\Controllers\MemberController@memberComment")->name( 'member.comment' )->middleware('isLogged');

// 修改會員資料
Route::get('/memberF5/{id}', "App\Http\Controllers\MemberAlterController@index")->name( 'member.Alter' )->middleware('isLogged');
Route::resource('/MemberAlter', 'App\Http\Controllers\MemberAlterController');
//   ------------
// serch
/* Route::get('/mainpage', function(){
  return view('mainpageA');
});  // 首頁在這 */

Route::get('/mainpageB', function(){
  return view('mainpageB');
});  

Route::get('/eventlist', function(){
  return view('event/eventlist');
})->name('eventlist'); // 活動列表

Route::get('/searchme', function(){
  return view('search/searchme');
});

Route::get('/searchmetag1', function(){
  return view('search/searchmetag1');
});  

Route::get('/searchmetag2', function(){
  return view('search/searchmetag2');
});  

Route::get('/searchmetag3', function(){
  return view('search/searchmetag3');
});  

Route::get('/searchmetag4', function(){
  return view('search/searchmetag4');
});  

Route::get('/searchmetag5', function(){
  return view('search/searchmetag5');
});  

Route::get('/searchmetag6', function(){
  return view('search/searchmetag6');
});  

Route::get('/searchmetag7', function(){
  return view('search/searchmetag7');
});  

Route::get('/searchmetag8', function(){
  return view('search/searchmetag8');
});  
//   ------------
// event 要測試登入狀態時就把後面middleware的註解拿掉
Route::get('holdevent/{id}', 'App\Http\Controllers\EventController@index');
Route::get('holdevent1', 'App\Http\Controllers\EventController@index1')->name('eventcreate')->middleware('isLogged');
Route::get('holdevent2', 'App\Http\Controllers\EventController@index2')->middleware('isLogged');
Route::get('holdevent3', 'App\Http\Controllers\EventController@index3')->middleware('isLogged');
Route::get('holdevent4', 'App\Http\Controllers\EventController@index4')->middleware('isLogged');
Route::any('holdevent/store1', 'App\Http\Controllers\EventController@store1');
Route::any('holdevent/store2', 'App\Http\Controllers\EventController@store2');
Route::any('holdevent/store3', 'App\Http\Controllers\EventController@store3');
Route::post('event/join/{id}', 'App\Http\Controllers\EventController@join');
Route::post('event/cancel/{id}', 'App\Http\Controllers\EventController@cancel');
Route::post('event/like/{id}', 'App\Http\Controllers\EventController@like');

Route::get('event/edit1/{id}', 'App\Http\Controllers\EventController@edit1');
Route::get('event/edit2/{id}', 'App\Http\Controllers\EventController@edit2');
Route::get('event/edit3/{id}', 'App\Http\Controllers\EventController@edit3');
Route::get('event/edit4/{id}', 'App\Http\Controllers\EventController@edit4');
//   ------------
// feedback
Route::get('actFeed_____E', 'App\Http\Controllers\FeedbackController@index1')->middleware('isLogged');
Route::get('memberCommentF6', 'App\Http\Controllers\FeedbackController@index')->middleware('isLogged');
// Route::post('', 'App\Http\Controllers\FeedbackController@store');