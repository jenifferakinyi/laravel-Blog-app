<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listing',[
        'heading'=> 'latest listing',
        'listings'=>[
            [
            'id'=>1,
            'title'=>'listing one',
            'description'=>'removing the welcome blade content'
        ],[
        'id'=>2,
        'title'=>'listing two',
        'description'=>'removing the welcome blade content'
        ]
        ]
    ]);
});
