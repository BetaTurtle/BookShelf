

{{ Form::open(array(
    'action'       => 'HomeController@doLogin'
)) }}

  {{ Form::label('first_name', 'First Name',
                    array('id' => 'first_name')) }}
    {{ Form::text('first_name', 'Taylor Otwell') }}

     {{ Form::radio('panda_colour', 'red', true) }} Red
    {{ Form::radio('panda_colour', 'black', true) }} Black
    {{ Form::radio('panda_colour', 'white') }} White
{{ Form::close() }}


<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '422953697831758',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    // FB.api('/me', function(response) {
    //   console.log('Successful login for: ' + response.name);
    //   document.getElementById('status').innerHTML =
    //     'Thanks for logging in, ' + response.name + '!';
    // });

    FB.api(
    "/1466922440213507",
    function (response) {
    	console.log(response);
      if (response && !response.error) {
        /* handle the result */
      }
    }
);
  }

  function publishthis(){
  	console.log("publishing this");

FB.api(
    "/1466922440213507/feed",
    "POST",
    {
    "message": "test"
        
    },
    function (response) {
    	console.log(response);
      if (response && !response.error) {
        /* handle the result */
      }
    }
);

  	FB.api(
    "/1466922440213507/photos",
    "POST",
    {
    "url": "http://laravel.com/assets/img/logo-head.png",
    "message": "A test message",
    "access_token": "CAAGArJTqa04BACD6PRhZCGqLuj6hD500npKCJHOA0gQMWATliAdeZB76jRpkzPXQ1QoQ8nt64FII5ruhz3tVG5vblwdrK07I0r45H2EWtXXholOL95o5rTwPiuy8pAjQVNNeHBlBE86zfo8KNqJtuAeq7nkv35HG5MfSrlKpZCKK2c9LKv7MaKV4ZCJCVPzMRr6HlCkKsQZDZD"
    },
    function (response) {
    	console.log(response)
      if (response && !response.error) {
        /* handle the result */
      }
    }
);
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="manage_pages" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

<button onclick="publishthis()">CLick here </button>

</body>
</html>