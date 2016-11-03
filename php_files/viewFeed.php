<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Sara Gas Booking</title>
<link rel="stylesheet" href="main.css" type="text/css"
	media="screen" />
<style>
input[type=submit] {
	border-radius: 5px;
	border: 0;
	width: 90px;
	height: 30px;
	font-family: Tahoma;
	background: #bbffbb;
}
</style>
</head>
<body>
	<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;">
			<div class="nav my-sticky-element">
				<div class="logo-holder">
					<span class="s main-logo"><img src="icon.jpg"
						width="80px" alt="images.jpg" /> <font size="25px">Sara
							Gas Booking</font></span>
				</div>
				<ul class="wrapper">
				<li><a href="http://localhost/Logout.php">Logout</a></li>
				<li><a href="http://localhost/DLogin.php">Home</a></li>
				<li><a href="http://localhost/viewFeed.php">Manage</a></li>
				<li>Feedbacks</li>
			</ul>
			</div>
		</div>
		<div class="full-col tac">
 			
			<?php include('viewF.php'); ?>
 		</div>
	</div>

</body>
</html>