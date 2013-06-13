<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Guest & Host</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/video.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	</head>
	<script>
	$(document).ready(function() { $("video").click(); });
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40385079-1', 'herokuapp.com');
  ga('send', 'pageview');

</script>

<body>
		<video class="v" controls autoplay="autoplay"
		  preload="auto" width="100%" height="100%" poster="./img/intro.png">
		  <source src="http://guest-host-assets.s3.amazonaws.com/vid/footing.mp4" type='video/mp4'>
		  <source src="http://guest-host-assets.s3.amazonaws.com/vid/footing.ogv" type="video/ogg"/>
		  <source src="http://guest-host-assets.s3.amazonaws.com/vid/footing.webm" type='video/webm'>
		  <script>
		  setTimeout(function(){
			  window.location =
			  "footingzeega.php";}, 29000);
		  </script>
		</video>
                        
</body>

</html>
