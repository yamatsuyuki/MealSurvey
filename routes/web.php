<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Normalusers\RegisterController;


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
Auth::routes();
Route::get('/', function () {
    return view('userlogin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/userregister', [App\Http\Controllers\HomeController::class, 'userregister'])->name('userregister');
Route::get('/userlogin', [App\Http\Controllers\MealControllers::class, 'userlogin'])->name('userlogin');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/newusercomplete',[App\Http\Controllers\MealControllers::class,'newusercomplete'])->name('newusercomplete');
Route::get('/newpass',[App\Http\Controllers\MealControllers::class,'newpass'])->name('newpass');


/*-------一般ユーザーページ*-------*/

/*ログインページ*/
Route::view('/normaluser/login', 'normaluser/login')->name('normaluserlogin');
Route::view('/normaluser/register', 'normaluser/register')->name('normalregister');
Route::post('/normaluser/register', [App\Http\Controllers\RegisterController::class,'register']);

Route::view('/contents/input', 'contents/input')->name('input');
Route::post('/output', [App\Http\Controllers\ContentController::class, 'save'])->name('save');





/*ログイン後ページ*/
Route::get('/newuser', [App\Http\Controllers\MealControllers::class, 'newuser'])->name('newuser');
Route::get('/usercheck', [App\Http\Controllers\MealControllers::class,'usercheck'])->name('usercheck');
Route::POST('/usercheck', [App\Http\Controllers\MealControllers::class,'usercheck'])->name('usercheck');
Route::get('/usertop', [App\Http\Controllers\MealControllers::class,'usertop'])->name('usertop');
Route::get('/userto', [App\Http\Controllers\MealControllers::class,'userto'])->name('userto');
Route::POST('/usertop', [App\Http\Controllers\MealControllers::class,'usertop'])->name('usertop');
Route::get('/newstop', [App\Http\Controllers\MealControllers::class, 'newstop'])->middleware(['auth'])->name('newstop');
Route::get('/menudetail/{id}/', [App\Http\Controllers\MealControllers::class,'detailmeal'])->name('newsdetail');
Route::post('/like/{mealId}',[LikeController::class,'favorite']);
Route::post('/unlike/{mealId}',[LikeController::class,'unfavorite']);
Route::get('/userlogout', [App\Http\Controllers\MealControllers::class,'userlogout'])->name('userlogout');
Route::get('/opinion', [App\Http\Controllers\MealControllers::class,'opinion'])->name('opinion');
Route::get('/weekmenu',[App\Http\Controllers\MealControllers::class,'menuweek'])->name('weekmenu');
Route::get('/menudetail/{id}/', [App\Http\Controllers\MealControllers::class,'menudetail'])->name('menudetail');

Route::get('/usernews', [App\Http\Controllers\MealControllers::class,'newsuser'])->name('usernews');
Route::get('/newsdetail/{id}/', [App\Http\Controllers\MealControllers::class,'detailnews'])->name('newsdetail');




/*-----------------------管理者ページ---------------------------------*/
Route::group(['middleware' => 'auth'], function () {
Route::get('/admintop', [App\Http\Controllers\MealControllers::class, 'touser'])->middleware(['auth'])->name('admintop');
Route::get('/registers', [App\Http\Controllers\MealControllers::class, 'registers'])->middleware(['auth'])->name('registers');
Route::get('/admintodaymenu/{id}/', [App\Http\Controllers\MealControllers::class,'mealdetail'])->name('admintodaymenu');
Route::post('/opinion/{id}/', [App\Http\Controllers\MealControllers::class,'mealdetail'])->name('admintodaymenu');

/*献立ページ*/
Route::get('/mealregister', [App\Http\Controllers\MealControllers::class, 'mealregister'])->middleware(['auth'])->name('mealregister');
Route::get('/mealcomplete',[App\Http\Controllers\MealControllers::class,'store'])->middleware(['auth'])->name('mealcomplete');
Route::post('/mealcomplete',[App\Http\Controllers\MealControllers::class,'store'])->middleware(['auth'])->name('mealcomplete');
Route::get('/mealeditconfirm/{id}', [App\Http\Controllers\MealControllers::class, 'mealupdate'])->middleware(['auth'])->name('mealeditconfirm');
Route::get('/mealeditcomplete',[App\Http\Controllers\MealControllers::class,'mealeditcomplete'])->middleware(['auth'])->name('mealeditcomplete');
Route::POST('/mealeditcomplete',[App\Http\Controllers\MealControllers::class,'mealeditcomplete'])->middleware(['auth'])->name('mealeditcomplete');
Route::post('/mealdelete/{id}/',[App\Http\Controllers\MealControllers::class,'mealdelete']);


/*ニュースページ*/
Route::get('/newsregister', [App\Http\Controllers\MealControllers::class, 'newsregister'])->middleware(['auth'])->name('newsregister');
Route::get('/newscomplete',[App\Http\Controllers\MealControllers::class,'newsstore'])->middleware(['auth'])->name('newscomplete');
Route::POST('/newscomplete',[App\Http\Controllers\MealControllers::class,'newsstore'])->middleware(['auth'])->name('newscomplete');
Route::get('/newseditconfirm/{id}', [App\Http\Controllers\MealControllers::class, 'update'])->middleware(['auth'])->name('newseditconfirm');
Route::POST('/newseditcomplete',[App\Http\Controllers\MealControllers::class,'newseditcomplete'])->middleware(['auth'])->name('newseditcomplete');
Route::post('/delete/{id}/',[App\Http\Controllers\MealControllers::class,'delete']);

Route::get('/mealedit', [App\Http\Controllers\MealControllers::class, 'meal'])->middleware(['auth'])->name('mealedit');
Route::get('/newsedit', [App\Http\Controllers\MealControllers::class, 'contact'])->middleware(['auth'])->name('newsedit');
Route::get('/useredit', [App\Http\Controllers\MealControllers::class, 'useredit'])->middleware(['auth'])->name('useredit');
Route::get('/pastmeal', [App\Http\Controllers\MealControllers::class, 'mealpast'])->middleware(['auth'])->name('pastmeal');
Route::get('/useredit',[App\Http\Controllers\MealControllers::class,'useredit'])->middleware(['auth'])->name('useredit');
Route::get('/usereditconfirm/{id}', [App\Http\Controllers\MealControllers::class, 'userupdate'])->middleware(['auth'])->name('usereditconfirm');
Route::POST('/usereditcomplete',[App\Http\Controllers\MealControllers::class,'usereditcomplete'])->middleware(['auth'])->name('usereditcomplete');
Route::POST('/userdelete/{id}/',[App\Http\Controllers\MealControllers::class,'userdelete']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
