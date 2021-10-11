<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taskcontroller;

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
});
Route::get('/tasks', function () {
    $data=App\Models\Task::all();

    return view('tasks')->with('tasks',$data);
});
Route::post('/saveTask',[Taskcontroller::class,'store']);
/* Route::get('/con',[Mytest::class,'test']); */
 Route::post('/markascompleted/{id}',[Taskcontroller::class,'Taskascompleted']);  
 Route::get('/markasnotcompleted/{id}',[Taskcontroller::class,'notTaskcompleted']);
 Route::get('/deletetask/{id}',[Taskcontroller::class,'deleteTask']);
 Route::get('/updatetask/{id}',[Taskcontroller::class,'updateTaskview']);
 Route::post('/updatetasks',[Taskcontroller::class,'update']);