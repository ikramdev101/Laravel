<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(PostController::class)->group(function(){
    Route::get('/usersList','index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function (){
    return View('form');

});


Route:: get ('users/{id}',function ($id){
    if($id == 'ekram'){
return 'hellow admin ekram';
    } 
    else{
        return 'heelow  user '.$id;
    }
});
use Illuminate\Http\Request;

Route::post('/users', function(Request $Request){
    return response()->json($Request->all());
});


Route::get ('/user',function(){
    return view('user',[
        'users'=>[
        'developer ' => 'ekrram',
        'designer' => 'sami',
        'manager' => 'reda',
        'admin'=> 'ismail',
        ]
        
    ]);
});
Route::get('/home',function(){
    return view('homepage');
});
Route::get('/usersList',[PostController::class,'index']);
Route::get('/createPost',[PostController::class,'createPost']);