<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
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
					<li><a href="caregiver.php">Caregiver</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="#">BMI</a></li>
				</ul>
			</nav>

		<!-- Home -->
			
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
							<header class="toptitle">
								<h1>BMI <strong>Calculator</strong></h1>
							</header>
							<form name=bmi id="bmiform">
								Weight (kg): <input type=text name=wg size=5 >
								Height (cm):<input type=text name=ht size=5 >
								Result: <input type="text" name=desc size=30 class=content readonly >
							</form>
							<input type=button onClick="calc()" class="button button-big" value="Calculate">
							<script language=javascript SRC="js/bmi.js">
							</script>
						</div>
					</div>
				</article>
			

		<!-- Work -->
			<div class="wrapper wrapper-style2">
				<article id="bloodsugar">
					<header>
						<h2>Navigation</h2>
						<span>Find Your Services Here</span>
					</header>
					<p><a href="bloodsugar.php" class="button button-big">Bloodsugar</a>
					<a href="history.php" class="button button-big">History</a></p>
					<p><a href="caregiver.php" class="button button-big">Caregiver</a>
					<a href="calendar.php" class="button button-big">Calendar</a></p>
					<p><a href="#" class="button button-big">BMI</a>
					<a href="contact.php" class="button button-big">Contact</a></p>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#portfolio" class="button button-big">Learn more</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper wrapper-style1">
				<article id="contact" class="container small">
					<header>
						<h2>Contact Your Caregiver</h2>
						<span>Send a message to your caregiver with this form.</span>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row half">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<a href="#" class="button form-button-submit">Send Message</a>
												<a href="#" class="button button-alt form-button-reset">Clear Form</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<footer>
					</footer>
				</article>
			</div>
	</body>
</html>