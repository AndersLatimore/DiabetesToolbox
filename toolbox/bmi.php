<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid | BMI</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<link href="css/jquery.keypad.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/jquery.plugin.js"></script>
		<script src="js/jquery.keypad.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
		<script>
			$(function () {
				$('#fWeight').keypad({prompt: 'Enter Height'});
				$('#fHeight').keypad({prompt: 'Enter Weight'});
			});
		</script>
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.html">Home</a></li>
					<li><a href="bloodsugar.php">Glucose</a></li>
					<li><a href="caregiver.php">Caregiver</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="bmi.php" class="active">BMI</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1">
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
							<header class="toptitle">
								<h1>BMI <strong>Calculator</strong></h1>
							</header>
							<div id="bmi_left">
							<form name=bmi id="bmiform">
								Weight (kg): <input type=text name=wg id="fWeight" size=5 > <!--onClick="toggleFocus('w')" -->
								Height (cm):<input type=text name=ht id="fHeight" size=5 ><!--onClick="toggleFocus('h')" readonly -->						
							</form>
							<input type=button onClick="calc()" class="button button-big" value="Calculate">
							</div> <!-- End of bmi_left -->
							<div id="bmi_right">
								BMI Value:
								<div id="resultStuff" name=desc size=30 class=content readonly align="center"> </div>
								<!--Category:<div id="resultStuff_Cat" name=desc size=30 class=content readonly align="center"> </div> -->
								
									Scale: <div id="resultStuff_scale" name=desc size=30 class=content readonly >
										<div id="starvation"> 
										Starvation = 0-14
										</div>
										<div id="underweight">
										Underweight = 15-18
										</div>
										<div id="normal">
										Normal = 19-25
										</div>
										<div id="overweight">
										Overweight = 25-30
										</div>
										<div id="obese">
										Obese = 30+	
										</div>
								
							</div> <!-- End of bmi_right -->
							</div>
							<script language=javascript SRC="js/bmi.js">
							</script>
						</div>
					</div>
			</div>
				</article>
	</body>
</html>