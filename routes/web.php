<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restocontroller;
use App\Http\Controllers\restoOneController;
 use App\Http\Controllers\formcontroller;
 use  App\Http\Controllers\regestcontroller;
 use App\Http\Controllers\itemcontroller;
 use App\Http\Controllers\logincontroller;
 use App\Http\Controllers\uploadfile;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get("/",[restocontroller::class,'index']);
route::get("/list",[restocontroller::class,'list']);
route::get('/add',[restoOneController::class,'inputdata']);
route::view('/regestform',"add");
route::view('/home',"home");
route::view("login","login");
route::post("login",[formcontroller::class,'login']);
route::view("regestration","regestration");
route::post("regestration",[regestcontroller::class,'regester']);
route::post('/regestform',[formcontroller::class,'add']);

route::get('/delete/{id}',[formcontroller::class,'delete']);

route::get('/edit/{id}',[formcontroller::class,'showdata']);
route::post('edit',[formcontroller::class,'editt']);
route::view("item","regesteritem");
route::post("item",[itemcontroller::class,'items']);

route::view("items","itemlist");
route::get("items",[itemcontroller::class,'loaditem']);
route::get("deletee/{id}",[itemcontroller::class,'delete']);

route::view("edititem","edititem");
route::get("editt/{id}",[itemcontroller::class,'showitem']);
route::post("editt/",[itemcontroller::class,'edit']);

route::post("login",[logincontroller::class,'show']);

route::view("upload","upload");
route::post("upload",[uploadfile::class,'upload']);

route::view("test","test");
//       group route
// route::group(['prefix'=>'admin'], function(){
//     route::get('/about',function(){
//         return "about admin";
//     });
 
// });