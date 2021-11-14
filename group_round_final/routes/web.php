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
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged'); // isLogged在Kernel裡接到 Middlewares/AuthCheck 未登入會拒絕訪問
//         換成其他名稱會出現 Bad Method Call 先用profile當會員中心

Route::get('logout', [UserAuthController::class, 'logout']);
//   ------------
// member
Route::get('/member/{id}', "App\Http\Controllers\MemberController@index")->name( 'member.index' );
Route::get('/memberF1/{id}', "App\Http\Controllers\MemberController@joinEvent")->middleware('isLogged')->name( 'member.join' );
Route::get('/memberF2/{id}', "App\Http\Controllers\MemberController@createEvent")->middleware('isLogged')->name( 'member.create' );
Route::get('/memberF3/{id}', "App\Http\Controllers\MemberController@finishedEvent")->middleware('isLogged')->name( 'member.finished' );
Route::get('/memberF4/{id}', "App\Http\Controllers\MemberController@collectEvent")->middleware('isLogged')->name( 'member.collect' );
Route::get('/memberF6/{id}', "App\Http\Controllers\MemberController@memberComment")->middleware('isLogged')->name( 'member.comment' );

// 修改會員資料
Route::get('/memberF5/{id}', "App\Http\Controllers\MemberAlterController@index")->name( 'member.Alter' )->middleware('isLogged');
Route::resource('/MemberAlter', 'App\Http\Controllers\MemberAlterController');
//   ------------
// serch
Route::get('/mainpage', function(){
  return view('mainpageA');
});  // 首頁在這

Route::get('/mainpageB', function(){
  return view('mainpageB');
});  

Route::get('/eventlist', function(){
  return view('event/eventlist');
}); 

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
// event
Route::get('holdevent/{id}', 'App\Http\Controllers\EventController@index')->middleware('isLogged');
Route::get('holdevent1', 'App\Http\Controllers\EventController@index1')->middleware('isLogged');
Route::get('holdevent2', 'App\Http\Controllers\EventController@index2')->middleware('isLogged');
Route::get('holdevent3', 'App\Http\Controllers\EventController@index3')->middleware('isLogged');
Route::get('holdevent4', 'App\Http\Controllers\EventController@index4')->middleware('isLogged');
Route::any('holdevent/store1', 'App\Http\Controllers\EventController@store1');
Route::any('holdevent/store2', 'App\Http\Controllers\EventController@store2');
Route::any('holdevent/store3', 'App\Http\Controllers\EventController@store3');
//   ------------
// feedback
// 建庠的路由要麻煩重設，因為"/"已經給首頁了
// controller也麻煩更新
Route::get('actFeed_____E', 'App\Http\Controllers\FeedbackController@index1')->middleware('isLogged');
Route::get('memberCommentF6', 'App\Http\Controllers\FeedbackController@index')->middleware('isLogged');
Route::post('', 'App\Http\Controllers\FeedbackController@store');