<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid | Glucose</title>
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
        <script type="text/javascript">
            function check()
            {
                var bloodvalue = document.getElementById("bloodValue").value;
                if(bloodvalue=='' || isNaN(bloodvalue))
                {
                    alert('Please enter a valid value.');
                    return false;
                }
            }
        </script>
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.html">Home</a></li>
					<li><a href="#bloodsugar" class="active">Glucose</a></li>
					<li><a href="caregiver.php">Caregiver</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="bmi.php">BMI</a></li>
				</ul>
			</nav>

			<div class="wrapper wrapper-style1">
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
							<header class="toptitle">
								<h1>Glucose <strong>checkup</strong></h1>
							</header>
							<form id="bloodsugarForm" name="bloodsugarForm" action="bloodsugar-levels.php" method="POST" onSubmit="return check();">
							<label>Fill in glucose value here: (no decimals for now...)</label>
							<input type="text" id="bloodValue" placeholder="Bloodsugar value" name="bloodValue" style="margin-bottom: 2%;">
							<p><input type="submit" class="button button-big" value="Submit" style="margin-left:0%;">
							</form>

						</div>
					</div>
				</article>
			</div>
		<!-- Contact -->
			<div class="wrapper wrapper-style2">
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
												<a href="#" class="button form-button-submit" >Send Message</a>
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
	</body>
</html>