<?php

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;

class FBControl extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function doInit(){
		session_start();
		FacebookSession::setDefaultApplication('422953697831758', 'c429dc4f7eb8d5b188e86d6dd16e172e');
		$helper = new FacebookRedirectLoginHelper('http://localhost:8000/fb');
		$loginUrl = $helper->getLoginUrl();

		try {
			$helper = new FacebookRedirectLoginHelper();
		  $session = $helper->getSessionFromRedirect();

		} catch(Exception $ex) {
			var_dump($ex);
		  // When validation fails or other local issues
		}
		if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();

  // print data
  echo  print_r( $graphObject, 1 );
} else {
  // show login url
  echo '<a href="' . $helper->getLoginUrl() . '">Login</a>';
}
	}

}