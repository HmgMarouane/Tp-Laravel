<?php

use Illuminate\Support\Facades\Route;



Route::get('/',function(){
    return view('home');
});
Route::get('/contact',function(){
    return view('contact');
});

Route::post('/sendMsg',function(){
    $user = request();
    return view('form',['nom'=>$user->nom,'email'=>$user->email,'message'=>$user->message]);
})->name('submit');





