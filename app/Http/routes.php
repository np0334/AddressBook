<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



   
   Route::get('/', function () {
      return view('homepage');
  })->name('home');
  //  Route::get('/', function () {
  //     return view('searchcontact');
  // });
   Route::get('/signupform', [
      'uses' => 'UserController@getsignupform',
      'as' => 'signupform'
   ]);
   Route::get('/signinform', [
      'uses' => 'UserController@getsigninform',
      'as' => 'signinform'
   ]);


  Route::post('/signup',[
    'uses' => 'UserController@postSignUp',
    'as' =>'signup'
  ]);
 
  Route::get('/dashboard',[
  	'uses' => 'UserController@getDashboard',
  	'as' => 'dashboard',
    'middleware' =>'auth'
  ]);
  Route::get('/addressbook',[
    'uses' => 'UserController@getAddressBook',
    'as' => 'addressbook',
    'middleware' =>'auth'
  ]);
  Route::get('/searchcontact',[
    'uses' => 'UserController@getSearchContact',
    'as' => 'searchcontact',
    'middleware' =>'auth'
  ]);

  Route::post('/signin',[
  	'uses' => 'UserController@postSignIn',
  	'as' => 'signin'
  ]);

  Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
  ]);
  Route::get('/homepage',[
    'uses' => 'UserController@getHomepage',
    'as' => 'homepage',
  ]);


