<!DOCTYPE HTML>
<html>
	<head>
		<title>Caregiver Toolbox For Diabetes Aid | Stefan Stefansson</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="chart/Chart.js"></script>
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
					<li><a href="caregiver_index.php">Home</a></li>
					<li><a href="#" class="active">Your Patients</a></li>
					<li><a href="message.php">Message</a></li>
					<li><a href="caregiver-calendar.php">Calendar</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
				<a href="patients.php" class="button">Back To Patients</a>
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/patients/face1.jpeg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1><strong>Anna Annasson</strong></h1>
							</header>
							<p><strong>Social Security Nr:</strong> 121202-7676
							<br>
							<strong>Age:</strong> 68
							<br>
							</p>
						</div>
						<a href="#contact" class="button">Send Message</a>
					</div>
				</article>
			</div>

		<!-- Main History content -->
			<div class="wrapper wrapper-style1">
				<article id="history" class="container small">
					<header>
						<h2>History</h2>
						<span>Find out what <strong>Anna's</strong> glucose levels have been over time.</span>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<canvas id="canvas" height="550" width="650"></canvas>
							</div>
						</div>
					</div>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper wrapper-style2">
				<article id="contact" class="container small">
					<header>
						<h2>Contact Anna</h2>
						<span>Send a message to <strong>Anna</strong> with this form.</span>
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
						<a href="#" class="go-top">Go Top</a>
					</footer>
				</article>
			</div>

		<script>
		var lineChartData = {
			labels : ["Week 8","Week 9","Week 10","Week 11","Week 12","Week 13","Week 14"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [3,5,12,5,7,4,15]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>
	</body>
</html>