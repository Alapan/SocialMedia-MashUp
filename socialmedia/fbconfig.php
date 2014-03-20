<?php error_reporting( E_ALL ); 
	require 'facebook-php-sdk-master/src/facebook.php';  // Include facebook SDK file
	$facebook = new Facebook(array(
	  	'appId'  => '539207986192438',   // Facebook App ID 
	  	'secret' => 'd19577827bb9ec1aadf91db91e72187b',  // Facebook App Secret
	  	'cookie' => true,    
	));
	$user = $facebook->getUser();
	if ($user) {
	  	try {
	    		$user_profile = $facebook->api('/me');
			$fbid = $user_profile['id'];           // To Get Facebook ID
			$fbuname = $user_profile['username'];  // To Get Facebook Username
			$fbfullname = $user_profile['name'];    // To Get Facebook full name
	  	} catch (FacebookApiException $e) {
	    		error_log($e);
	   		$user = null;
	  	}
	}
	if ($user) {
	  	$logoutUrl = $facebook->getLogoutUrl(array(
		'next' => 'http://group02.naf.cs.hut.fi/logout.php',  // Logout URL full path
		));
	} else {
	 	$loginUrl = $facebook->getLoginUrl(array(
			'scope'        => 'email,publish_stream,user_photos', // Permissions to request from the user
			'redirect_uri' => 'http://group02.naf.cs.hut.fi/index.php'			
		));
	}
	if($user){			  		// Information to pull about logged-in user
		$queries=array(
			array('method' => 'GET', 'relative_url' => '/'.$user),
			array('method' => 'GET', 'relative_url' => '/'.$user.'/home?limit=10'),
			array('method' => 'GET', 'relative_url' => '/'.$user.'/friends?limit=10'),
		);
	        try{
                	$batchResponse=$facebook->api('?batch='.json_encode($queries),'POST'); // batch requests over the Facebook Graph API  and POST to batch endpoint on the graph
        	}catch(Exception $e){
                	error_log($e);
        	}

        	//Return values are indexed in order of the original array, content is in ['body'] as a JSON string, which is decoded for use as a PHP array
        	$user_info=json_decode($batchResponse[0]{'body'},TRUE);
        	$feed=json_decode($batchResponse[1]{'body'},TRUE);
        	$friends_list=json_decode($batchResponse[2]{'body'},TRUE);

      	}
      	// Push information to Facebook by allowing user to post status from webpage
      	if(isset($_POST['status'])){
		try{
			$statusUpdate = $facebook->api("/$user/feed", 'post', array('message'=> $_POST['status']));
		}catch(FacebookApiException $e){
			error_log($e);
		}
	}
	
	
?>
