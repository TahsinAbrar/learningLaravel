<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return "Hello! Welcome to the learning Web App with Laravel.";
});

Route::get('/about', function(){
    return "This is about page.";
});

Route::get('/contact', function(){
    return "This is contact page.";
});