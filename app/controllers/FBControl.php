<?php

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\FacebookJavaScriptLoginHelper;

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
		//$loginUrl = $helper->getLoginUrl();
//$helper = new FacebookRedirectLoginHelper();
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}

		if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/1466922440213507/feed' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();

  // print data
  //var_dump($session);
  echo  json_encode($session->getToken());
} else {
  // show login url
	echo "booya";
	$helper = new FacebookRedirectLoginHelper("http://localhost:8000/fb");
  echo '<a href="' . $helper->getLoginUrl() . '">Login</a>';
}
	}

}