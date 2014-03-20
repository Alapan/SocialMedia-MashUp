<?php require 'fql.php';
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
			#map-canvas{
				height:90%;
			}
		</style>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
			var map;
                        function initialize(){
				var lat=<?php if(isset($_POST['fname'])){
						 echo json_encode($friend_locations[0]['current_location']['latitude']);
						}
						else{
							echo json_encode($ret_obj[0]['current_location']['latitude']);
						}
					?>;
				var long=<?php if(isset($_POST['fname'])){
						echo json_encode($friend_locations[0]['current_location']['longitude']);
						}
						else{
							echo json_encode($ret_obj[0]['current_location']['longitude']);
						}
					?>;
                                var mapOptions={
                                        center:new google.maps.LatLng(parseFloat(lat),parseFloat(long)),
                                        zoom:8
                                };
				map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
				var marker=new google.maps.Marker({
					position: new google.maps.LatLng(parseFloat(lat),parseFloat(long)),
					map: map,
					title: 'Your current location'
				});
			}
                        google.maps.event.addDomListener(window,'load',initialize);
                </script>

	</head>
	<body>
		<div id="map-canvas"/>
	</body>
</html>
