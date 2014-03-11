<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid | Calendar</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src='calendar/lib/jquery-ui.custom.min.js'></script>
		<script src='calendar/fullcalendar/fullcalendar.min.js'></script>
		<link href='calendar/fullcalendar/fullcalendar.css' rel='stylesheet' />
		<link href='calendar/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />

		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
		<script>
			$(document).ready(function() {
			
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				
				$('#calendar').fullCalendar({
					editable: true,
					events: [
						{
							title: 'Sewing Hangout with the girls',
							start: new Date(y, m, 1)
						},
						{
							title: 'Long Nap',
							start: new Date(y, m, d-10),
							end: new Date(y, m, d-7)
						},
						{
							id: 999,
							title: 'Take Medicine',
							start: new Date(y, m, d-3, 18, 0),
							allDay: false
						},
						{
							id: 999,
							title: 'Measure Heart Rate',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false
						},
						{
							title: 'Date Night',
							start: new Date(y, m, d, 10, 30),
							allDay: false
						},
						{
							title: 'Lunch with Rut',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false
						},
						{
							title: 'Birthday Party; 107, way to go!',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false
						}
					]
				});
				
			});

		</script>
		<style>
			#calendar {
				width: 900px;
				margin: 0 auto;
				}

		</style>

	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.html">Home</a></li>
					<li><a href="bloodsugar.php">Glucose</a></li>
					<li><a href="caregiver.php">Caregiver</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="#" class="active">Calendar</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="bmi.php">BMI</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1">
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
							<p><label>Your Calendar</label></p>
							<div id='calendar'></div>
						</div>
					</div>
				</article>
			</div>
<<<<<<< HEAD
					<footer>
						<a href="#" class="go-top">Go Top</a>
					</footer>
				</article>
			</div>

=======
>>>>>>> FETCH_HEAD
	</body>
</html>