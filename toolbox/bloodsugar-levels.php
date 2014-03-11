<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid | Glucose Levels</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/raphael.2.1.0.min.js"></script>
		<script src="js/justgage.1.0.1.min.js"></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
			<script>
				$(function() {
					$( "#datepicker" ).datepicker();
				});
			</script>
	</head>
	<body>
		<?php
	$tempvalue = $_POST['bloodValue'];
	if($tempvalue < 0){
		$tempvalue = 0;
	}
	else if($tempvalue > 40){
		$tempvalue = 40;
	}
	$bloodAnswer = array(
					"Insulincoma", 
					"Extremly low, risk of unconciousness", 
					"Risk of insulin-reaction or insulin-chock!", 
					"Your values are going down! Do someting!",
					"Normal - before meal",
					"Normal - after meal",
					"OK - after meal! (but it's max for diabetics...)",
					"Too high! Do someting!",
					"Toxic KETONS are building up in your body!",
					"High risk of serious elektrolyte disturbances!",
					"VERY high risk of DIABETES COMA!");
?>
		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.html">Home</a></li>
					<li><a href="bloodsugar.php" class="active">Glucose</a></li>
					<li><a href="caregiver.php">Caregiver</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="bmi.php">BMI</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1">
				<article class="container" id="top">
					<div class="row">
						<div class="8u">
							<a href="bloodsugar.php" class="button">Back</a>
							<p>Date: <input type="text" id="datepicker"></p>
							<div id="gauge" class="220x180px"></div>
							<p style="text-align:center;">
								<?php 
									 if($tempvalue <= 1){ echo $bloodAnswer[0]; }
									if($tempvalue > 1 && $tempvalue <= 2){ echo $bloodAnswer[1]; }
									if($tempvalue > 2 && $tempvalue <= 3){ echo $bloodAnswer[2]; }
									if($tempvalue > 3 && $tempvalue <= 4){ echo $bloodAnswer[3]; }
									if($tempvalue > 4 && $tempvalue <= 5.5){ echo $bloodAnswer[4]; }
									if($tempvalue > 5.5 && $tempvalue <= 8){ echo $bloodAnswer[5]; }
									if($tempvalue > 8 && $tempvalue <= 10){ echo $bloodAnswer[6]; }
									if($tempvalue > 10 && $tempvalue <= 15){ echo $bloodAnswer[7]; }
									if($tempvalue > 15 && $tempvalue <= 20){ echo $bloodAnswer[8]; }
									if($tempvalue > 20 && $tempvalue <= 33){ echo $bloodAnswer[9]; }
									if($tempvalue > 33 && $tempvalue <= 40){ echo $bloodAnswer[10]; }
								?>	
							</p>
						</div>
					</div>
				</article>
			</div>
			<script>
			  var temp = JSON.parse('<?php echo json_encode($tempvalue) ?>');
			  var g = new JustGage({
			    id: "gauge", 
			    value: temp, 
			    min: 0,
			    max: 40,
			    title: "Your Glucose Levels"
			  }); 
			</script>
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