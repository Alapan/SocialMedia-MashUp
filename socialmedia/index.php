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
                                height:3000px;
                        }
                        #maincol{
                                width:75%;
                                height:3000px;
                                float:left;
                                background-color:white;
                        }
                        #rightcol{
                                width:25%;
                                height:1500px;
                                float:left;
                                background-color:white;
                        }
                        #nav{
                                padding: 5px 10px;
                                background: orange;
                        }
			textarea{
				background-color:orange;
			}
                </style>
        </head>
        <div id="fb-root"></div> 
        <body>
                <script>
			<!--Code borrowed from "https://developers.facebook.com/docs/plugins/like-button" and "https://developers.facebook.com/docs/plugins/share-button"-->
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
			<!--Code borrowed from "https://dev.twitter.com/docs/follow-button"-->
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
		<!--Code borrowed from "https://google-developers.appspot.com/chart/interactive/docs/quick_start"-->
		
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script type="text/javascript">
			// Load the Visualization API and the piechart package.
                        google.load('visualization', '1.0', {'packages':['corechart']});

                        // Set a callback to run when the Google Visualization API is loaded.
                        google.setOnLoadCallback(drawChart);

			// This method is called after the API is loaded

                        function drawChart() {

                                // Create the data table.
                                var data = new google.visualization.DataTable();
                                data.addColumn('string', 'Degree Programme in School of Science');
                                data.addColumn('number', 'Number of admitted students for Fall 2013');
                                data.addRows([
                                        ['Engineering Physics and Mathematics - Advanced Energy Systems', 1],
                                        ['Engineering Physics and Mathematics - Engineering Physics', 1],
                                        ['Engineering Physics and Mathematics - Mathematics', 3],
                                        ['Brain and Mind', 4],
                                        ['Bioinformatics', 11],
                                        ['Foundations of Advanced Computing', 9],
                                        ['International Design Business Management', 15],
                                        ['Machine Learning and Data Mining', 29],
                                        ['Mobile Computing - Services and Security', 24],
                                        ['Physics of Advanced Materials', 3],
                                        ['Service Design and Engineering', 17],
                                        ['Service Management and Engineering', 7],
                                        ['Strategy', 5],
                                ]);

                                // Set chart options
                                var options = {'title':'No. of students admitted to each degree programme in the School of Science for Fall 2013',
                                        'width':1100,
                                        'height':1000
				};
 				// Instantiate and draw our chart, passing in some options.
                                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                                chart.draw(data, options);
                        }
                </script>

                <div id="page">
                        <div id="maincol">
                        <div id="nav">
                                <div align="right"><h3>Welcome to the official webpage of Group 2 of the Network Applications Frameworks course of Aalto University,</h3></div>
					<table>
                                        <tr><div align="center"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						<td>
						<!-- Code borrowed from "https://developers.facebook.com/docs/plugins/embedded-posts/"-->
                                                <iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Faaltouniversity&amp;width=500&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" 
                                                        scrolling="no" 
                                                        frameborder="1" 
                                                        style="border:none; overflow:hidden; width:500px; height:35px;" 
                                                        allowTransparency="true">
                                                </iframe>
					</td>
					<td></td>
					<td>
                                                <a href="https://twitter.com/universityaalto" 
                                                        class="twitter-follow-button" 
                                                        data-show-count="true" data-lang="en">Follow @twitterapi
                                                </a>
					</td>
                                        </div>
					<td>
						<script src="https://apis.google.com/js/platform.js"></script>
                                		<div class="g-ytsubscribe" data-channel="aaltouniversity"></div>
					</td>
					</tr>
                                        </table>
                                <p>
                                        <div align="center"><a href="index.php" target="_top"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="about_us.html" target="_top"><b>About us</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="work.html" target="_top"><b>Work</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="contact_us.html" target="_top"><b>Contact us</b></a></div>
                                </p>
				<div id="nav"></div>
                        </div>
                                <div align="center"><p>We are involved in design and implementation of service architectures for both fixed and mobile solutions.Different topics include
				web applications, interfaces to social media and other services, and mobile platforms.</p><br></div>
				<div align="center">Latest news about the School of Science</div><br>
				<div align="center"><div class="fb-post" data-href="https://www.facebook.com/photo.php?fbid=745586822141175&amp;set=a.529848603714999.126143.529779797055213&amp;type=1" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/photo.php?fbid=745586822141175&amp;set=a.529848603714999.126143.529779797055213&amp;type=1">Post</a> by <a href="https://www.facebook.com/aaltosci.masters" width="25%">Aalto University School of Science</a>.</div></div></div>
                                <br>
				<br>
				<table>
                                        <tr><div align="left"><b>About the School of Science</b></div></tr>
					<br>
                                        <tr><div align="left">The Aalto University School of Science started its operations on 1 January 2011. It is based on the Faculty of Information and Natural Sciences of the School of Science and Technology (former Helsinki University of Technology).
					The key asset of the School of Science is its high-quality research. The school is home to six  Centres of Excellence in Research selected by the Academy of Finland; two of them are coordinated by other universities. The School also performed well in the research assessment exercise carried out at Aalto University in 2009: the top five and altogether 9 of the top 18 departments were from the School of Science.
					The School of Science provides students with a variety of options from information networks to applied physics. We have four degree programmes in Finnish and altogether fourteen international Master's programmes in English with four programmes leading to an international double degree. 
					</tr><tr></tr><tr>
					The School of Science is responsible for the Aalto University common basic courses in mathematics, physics, computer science and engineering, industrial engineering and management.</div></tr>
                                </table>
                                <div id="chart_div" align="center"></div>
                        </div>			
                        <div id="rightcol" style="border:medium orange">
                        <div id="nav" align="left"><h3><b>School of Science</b></h3><br></div>
                        <div id="nav">	
				<!--<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channel="aaltouniversity"></div>-->
			</div>
                        <div id="nav"></div>
                        <div id="nav"></div>
                        <div id="nav"></div>
			<div id="nav"></div>
			<div id="nav"></div>
			<div id="nav"></div>
			<div id="nav"></div>
			<div id="nav"></div>
                        <?php if ($user): ?>      <!--  After user login  -->
                                <table>
                                        <tr></tr>
                                        <tr>
                                                <td><b>Welcome, <?php echo $fbfullname; ?><b></td>
						<td><img src="https://graph.facebook.com/<?php echo $user; ?>/picture"></td>
                                        </tr>
                                        <tr>
						<?php if($user_info['location']['name']):?>
                                                	<td>You are currently living in <?php echo $user_info['location']['name']; ?></td>
						<?php else:?>
							<td>Your current location is unknown.</td>
						<?php endif?>
                                        </tr>
                                        <tr>
                                                <td><a href="<?php echo $logoutUrl; ?>">Logout</td>
                                        </tr>
                               </table>
                               <p> <b> Some of your friends </b> </p>
                               <textarea readonly rows="10" cols="40">
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
                                <a href="map.php" target="_top">View your current location on Google Maps</a><br>
				<br>
				<br>
                                <table>
                                        <form action="map.php" method="post" enctype="multipart/form-data">
                                                <tr>Type a Facebook friend's name and find his/her current location on Google Maps</tr>
                                                <tr>
                                                        <div align="left">Name of friend: <input type="text" name="fname" id="name"></div><input type="submit" name="submit" value="Submit">
                                                </tr>
                                        </form>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<br>
					<br>
					<br>
					<form action="fbconfig.php" method="post" enctype="multipart/form-data">
                                                <tr><div align="left">Update your Facebook status from here!</div></tr>
						<tr></tr>
                                                <tr>
                                                        <div align="left"><textarea rows="10" cols="40" name="status"></textarea><br><br>
                                                        <input type="submit" name="submit" value="Submit"></div>
                                                </tr>

                                        </form>
                                </table>
                                <br>
                                <br>
				<div align="center">Watch a video about Aalto University</div>
                                <br>
                                <div align="center"><iframe width="450" height="315" src="//www.youtube.com/embed/videoseries?list=PLJJ2tnFVQ9wThR1E74Kl2CZGNc075L0BY" frameborder="1" allowfullscreen></iframe></div>

                        </div>
                </div>
        </body>
</html>

