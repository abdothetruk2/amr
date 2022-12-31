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
    return view('index');
});

Route::get("/espresso", function(){

    return view("espress");
});


Route::get("/robusta", function(){

    return view("robusta");
});



Route::get("/login  ", function(){

    return view("login");
});



Route::get("/signup", function(){

    return view("signup");
});

Route::get("/shop", function(){

    return view("shop");
});

Route::get("/prod", function(){

    return view("prod");
});


Route::get("/landing", function(){

    return view("landing");
});

Route::get("/about",function(){


    return view("about-us");
});


Route::get("/about-me",function(){


    return view ("about-me");
});



Route::get("/our-team",function(){


    return view ("our-team");
});



Route::get("/offer",function(){


    return view ("offer");
});


Route::get("/menu",function(){


    return view ("menu");
});



Route::get("/contact",function(){


    return view ("contact-us");
});
