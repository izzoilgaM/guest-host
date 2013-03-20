<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Guest & Host</title>
	<link 
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/jquery.videobackground.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.videobackground.js"></script>
	<script>
			$(document).ready(function() {
				$('dl').toggle();
				$('h2').bind('click', function(event) {
					event.preventDefault();
					$(this).next('dl').slideToggle(500, function() {
						$('.video-background').videobackground('resize');
					});
				});
				$('body').prepend('<div class="video-background"></div>');
				$('.video-background').videobackground({
					videoSource: ['vid/page.mp4',
						'vid/page.webm', 
						'vid/page.ogv'], 
					controlPosition: '#main',
					poster: 'vid/page.jpg',
					loadedCallback: function() {
						$(this).videobackground('mute', {controlPosition: '#main'});
					}
				});
			});
	</script>

</head>

<body>

<div class="video-background" style="height:978px;">
	<video preload="none" poster="vid/page.jpg" autoplay="autoplay" loop="loop">
		<source src="vid/page.mp4" type="video/mp4">
		<source src="vid/page.webm" type="video/webm">
		<source src="vid/page.ogv" type="video/ogg">
	</video>
</div>

<div id="page">
	<div id="page-group">
		<div id="header" class="header" role="banner">
		</div>
		<div id="content">
			<div id="main" role="main">
			<h1> jQuery Video Background plugin</h1>
			<p> Ah, there is text here</p>
			</div>


<!--

		<video id="vid" width:"270" height:"800" autoplay loop>
					<source src="vid/page.mp4" type="video/mp4"/>
					<source src="vid/page.ogv" type="video/ogg"/>
					<source src="vid/page.webm" type="video/webm"/>
				</video>
		
		<div id="pic"> </div>
		

		
		<a class="button" id="name" href="URLhere"></a>
		
-->
		
</div>

</body>

</html>
