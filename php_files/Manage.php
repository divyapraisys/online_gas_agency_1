<?php
include('Dsession.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Sara Gas Booking</title>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="main.css" type="text/css"
	media="screen" />

</head>

<body>
	
	<div class="contact photo-header border-top hero">

		<div class="nav my-sticky-element">
			<div class="logo-holder">
				<span class="s main-logo"><img src="icon.jpg"
					width="80px" alt="images.jpg" /> <font size="25px">Sara Gas
						Booking</font></span>
			</div>
			<ul class="wrapper">
				<li><a href="http://localhost/Logout.php">Logout</a></li>
				<li><a href="http://localhost/DLogin.php">Home</a></li>
				<li>Manage</li>
				<li><a href="http://localhost/viewFeed.php">Feedbacks</a></li>
			</ul>
			<h3>
				Hi
				<i><?php echo $login_session; ?></i>
			</h3>
		</div>
		<br>
		<div class="full-col tac">
				<p class="sub-title">Company Profile</p>
		</div>

	</div>
	<div class="row intro">
	<div class="full-col">
	<h3>Request For Tranfer of connection</h3>
		<?php include('viewT.php'); ?>
	</div>
	</div>
	<div class="row brand-grey">

	<div class="about left-col">
	<h3>Bookings still under process</h3>
		<?php include('viewB.php'); ?>
	</div>

	<div class="i-can right-col">
	<h3>Booking Records</h3>
		<?php include('viewB1.php'); ?>
	</div>

</div>
</body>
</html>