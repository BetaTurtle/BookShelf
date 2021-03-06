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
	return View::make('test');
});

Route::get('/home', function()
{
	return View::make('home');
});

Route::get('/admin', function()
{
	return View::make('phpliteadmin');
});
Route::post('/admin', function()
{
	return View::make('phpliteadmin');
});

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to logout user
Route::get('logout', array('uses' => 'HomeController@doLogout'));




Route::get('register', function(){
 
return View::make('register');
 
});

Route::post('register_action', function()
{
        $obj = new RegisterController() ;
        return $obj->store();
});

Route::get('save/{princess?}', function($princess=1)
{
	if($princess==1) return "save whom?";
    return "Sorry, {$princess} is in another castle. :(";
});

Route::get('/current/url', function()
{
     return 'gupnp_root_device_get_relative_location(root_device)
     <form method="POST">

    <input type="hidden" name="foo" value="bar" />
    <input type="hidden" name="baz" value="boo" />

    <input type="submit" value="Send" />

</form>';
});

Route::get('/facebook', function()
{
//    $data = Input::all();
 //   var_dump($data);
	return View::make('forms/login');
});

Route::get('fb', array('uses' => 'FBControl@doInit'));