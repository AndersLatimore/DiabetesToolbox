<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid | Bloodsugar</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/raphael.2.1.0.min.js"></script>
		<script src="js/justgage.1.0.1.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.html">Home</a></li>
					<li><a href="bloodsugar.php">Bloodsugar</a></li>
					<li><a href="#caregiver">Caregiver</a></li>
					<li><a href="#history">History</a></li>
					<li><a href="#calendar">Calendar</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#bmi">BMI</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1">
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
							<a href="bloodsugar.php" class="button">Back</a>
							<div id="gauge" class="200x160px"></div>
							<p>Your values are a bit high. Eat something sweet.</p>
						</div>
					</div>
				</article>
			</div>
			<script>
			  var g = new JustGage({
			    id: "gauge", 
			    value: 70, 
			    min: 0,
			    max: 150,
			    title: "Your Blood Sugar Levels"
			  }); 
			</script>

	</body>
</html>