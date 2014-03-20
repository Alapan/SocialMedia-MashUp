
<?php
	require 'fbconfig.php';   // Include fbconfig.php file
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Network Application Frameworks - Group 2</title>
		<style type="text/css">
			#page{
				width:100%;
				height:2000px;
			}
			#leftcol{
				width:15%;
				height:2000px;
				float:left;
				background-color:#5FB404;
			}
			#maincol{
				width:60%;
				height:2000px;
				float:left;
				background-color:yellow;
			}
			#rightcol{
				width:25%;
				height:2000px;
				float:left;
				background-color:#5FB404;
			}
		</style>
	</head>
	<div id="fb-root"></div> 
	<body>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0]; 
				if (d.getElementById(id)) 
					return; 
				js = d.createElement(s); 
				js.id = id; 
				js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=539207986192438"; 
				fjs.parentNode.insertBefore(js, fjs); 
			}(document, 'script', 'facebook-jssdk'));
		</script>
	  
		<script>
			!function(d,s,id){
				var js,fjs=d.getElementsByTagName(s)[0];
				if(!d.getElementById(id)){
					js=d.createElement(s);
					js.id=id;
					js.src="http://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);
				}
			}(document,"script","twitter-wjs");
		</script>
		<div id="page">
			<div id="leftcol">
				<a href="main.html" target="_top">Home</a><br>
				<br>
				<br>
				<br>
				<a href="about_us.html" target="_top">About us</a><br>
				<br>
				<br>
				<br>
				<a href="work.html" target="_top">Work</a><br>
				<br>
				<br>
				<br>
				<a href="contact_us.html" target="_top">Contact us</a><br>
				<br>
				<br>
				<br>
			</div>
			<div id="maincol">
				<div align="center"><h3>Welcome to the official webpage of Group 2 of the Network Applications Frameworks course of Aalto University, School of Science</h3></div>
				<div align="center"><p>We are involved in design and implementation of service architectures both for fixed and mobile solutions</p><br></div>
				<div align="center"><td><img src="Images/social-media.jpg"></br></div>
				<p><div align="center">Different topics include web applications, interfaces to social media and other services and mobile services platforms</div></p>
				<br>
				<br>
				<div align="center">Watch some videos about Aalto University</div>
				<br>
				<div align="center"><iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLJJ2tnFVQ9wThR1E74Kl2CZGNc075L0BY" frameborder="1" allowfullscreen></iframe></div>
				<br>
				<br>
				<table>
					<form action="fbconfig.php" method="post" enctype="multipart/form-data">
						<tr><div align="center">Update your Facebook status from here!</div></tr>
						<tr>
							<div align="center">Status : <input type="text" name="status"><br>
							<input type="submit" name="submit" value="Submit"></div>
						</tr>>
					</form>
					<tr><div align="center">Join the Aalto University network! Like it on Facebook and follow it on Twitter! Subscribe also to the Youtube channel!</div></tr>
					<br>
					<br>
					<br>
					<tr>
						<td>
							<iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Faaltouniversity&amp;width=500&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:35px;" allowTransparency="true"></iframe>
						</td>
	   			 		<td>
							<a href="https://twitter.com/universityaalto" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @twitterapi</a>
						</td>
					</tr>
					<tr>
						<td>
							<script src="https://apis.google.com/js/platform.js"></script>
							<div class="g-ytsubscribe" data-channel="aaltouniversity"></div>
						</td>
					</tr>
				</table>
			</div>
			<div id="rightcol">
			<?php if ($user): ?>      <!--  After user login  -->
						<table>
							<tr>
								<td><b>Welcome, <?php echo $fbfullname; ?><b><td></td><img src="https://graph.facebook.com/<?php echo $user; ?>/picture"></td>
							</tr>
							<tr>
								  <td>You are currently living in <?php echo $user_info['location']['name']; ?></td>
							</tr>
						<tr>
							<td><a href="<?php echo $logoutUrl; ?>">Logout</td>
						</tr>
					</table>
					<p> <b> Some friends </b> </p>
					<textarea rows="10" cols="40">
						<?php
							for($x=0;$x<10;$x++){
								echo $friends_list['data'][$x]['name'];
							?>
							&#13;&#10;<?php
							}
						?>
					</textarea>
			    	<?php else: ?>     <!-- Before login --> 
					<table>
						<tr><td><a href="<?php echo $loginUrl; ?>">Login with Facebook</td></tr>
					</table>
			    	<?php endif ?>
				<br>
				<br>
				<br>
				<br>
				<a href="map.php" target="_top">View your current location on Google Maps</a><br>
				<table>
					<form action="map.php" method="post" enctype="multipart/form-data">
						<tr>Type a friend's location and find his/her current location on Google Maps</tr>
						<tr>
							<div align="left">Name of friend: <input type="text" name="fname" id="name"></div><input type="submit" name="submit" value="Submit">
						</tr>
					</form>
				</table>
				<br>
				<br>

				<table>
					<tr><div align='center'> Last News from the School of Science</div></tr>
					<tr><br></tr>
					<tr><div class="fb-post" data-href="https://www.facebook.com/photo.php?fbid=745586822141175&amp;set=a.529848603714999.126143.529779797055213&amp;type=1" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/photo.php?fbid=745586822141175&amp;set=a.529848603714999.126143.529779797055213&amp;type=1">Post</a> by <a href="https://www.facebook.com/aaltosci.masters" width="25%">Aalto University School of Science</a>.</div></div></tr>
				</table>
			</div>
		</div>
	</body>
</html>
