<?php 
	require 'fbconfig.php';
?>

<html>
	<head>
		<style type="text/css">
                        html{
                                height:100%
                        }
                        body{
                                height:100%;
                                margin:0;
                                padding:0
                        }
                </style>
	</head>
	<body>
		<?php
			if($user){
				try{
					$fql='SELECT current_location.latitude,current_location.longitude FROM user WHERE uid= '.$user;
					$ret_obj=$facebook->api(array(
							'method'=>'fql.query',
							'query'=>$fql,
					));
					if(isset($_POST['fname'])){
						$friend_names_fql='SELECT name FROM user WHERE uid IN (SELECT uid2 FROM friend WHERE uid1=me())';
						$friend_names=$facebook->api(array(
									'method'=>'fql.query',
									'query'=>$friend_names_fql,
						));
						$n=sizeof($friend_names);
						$friend_id_fql='SELECT uid2 FROM friend WHERE uid1=me()';
						$friend_id=$facebook->api(array(
								'method'=>'fql.query',
								'query'=>$friend_id_fql,
						));
						for($x=0;$x<$n;$x++){
							if($_POST['fname']==$friend_names[$x]['name']){
								break;
							}
						}
						$id=$friend_id[$x]['uid2'];
						$friend_location_fql='SELECT current_location.latitude,current_location.longitude FROM user WHERE uid= '.$friend_id[$x]['uid2'];
						$friend_locations=$facebook->api(array(
								'method'=>'fql.query',
								'query'=>$friend_location_fql,
						));
					}
				}catch(FacebookApiException $e){
					error_log($e->getType());
					error_log($e->getMessage());
				}
			}else{
				$login_url = $facebook->getLoginUrl();	
				echo 'Please <a href="' . $login_url . '">login.</a>';
			}
		?>
	</body>
</html>
