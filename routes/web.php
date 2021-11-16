<?php

use Illuminate\Support\Facades\Route;

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
    $systems=\App\Models\System::orderBy('OrderB')->where('visibility','1')->get();
    $headers=\App\Models\Header::all();

    return view('welcome')->with(compact(['systems','headers']));
});
Route::get('systemDetail/{id}',function ($id){
    $systems=\App\Models\System::where('id',$id)->first();
    

    
    return view('fronts.system-detail')->with(compact('systems'));
});
