<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Polar Partners</title>
	<link rel="stylesheet" type="text/css" href="./tyyli/tyyli.css">
</head>
<body>
<?php
	require('./kirjasto/funktiot.php');
	$tulos=kek();
	echo $tulos[0][0];
	echo $tulos[0][1];
	echo $tulos[0][2];
	echo $tulos[0][3];
?>
<br><br>

<div>Iteration: <span id="iteration"></span></div>

<video id="myVideo" autoplay height="520" width="900">
    <source type="video/mp4" src="./ezgif.mp4">
</video>
<!--<div>Iteration: <span id="iteration"></span></div>

<video width="320" height="240" id="myVideo" controls>
    <source type="video/mp4" src="./Asia_selva.mp4">
</video>-->
</body>
<script>
	var iterations = 1;

	document.getElementById('iteration').innerText = iterations;

	myVideo.addEventListener('ended', function () {    

		if (iterations < 2) {       

			this.currentTime = 0;
			this.play();
			iterations ++;
			
			document.getElementById('iteration').innerText = iterations;

		}   

	}, false);
</script>
</html>