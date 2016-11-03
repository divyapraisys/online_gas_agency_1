<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sara Gas Booking</title>
<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
<style>
input[type=submit] {
	border-radius: 5px;
	border: 0;
	width: 90px;
	height: 30px;
	font-family: Tahoma;
	background: #bddd76;
}
</style>
</head>
<body>
	<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;">
			<div class="nav my-sticky-element">
				<div class="logo-holder">
					<span class="s main-logo"><img src="icon.jpg" width="80px"
						alt="images.jpg" /> <font size="25px">Sara Gas Booking</font></span>
				</div>
				<ul class="wrapper">
					<li><a href="http://localhost/Logout.php">Logout</a></li>
					<li><a href="http://localhost/CLogin.php">Home</a></li>
					<li><a href="http://localhost/Profile.php">Profile</a></li>
					<li><a href="http://localhost:8080/OnlineGasAgency/Feedback.jsp">Feedback</a></li>
				</ul>
				<h3>
					Hi <i>
						<?php echo $login_session; ?>
					</i>
				</h3>
			</div>
		</div>

		<div class="full-col tac">
			<?php
			  include 'viewBook.php';
			  ?>
			<form action="http://localhost/CBook.php" method="post" name="booking"
				id="booking">
				<h5>You can cancel your booking within 3 days after booking.</h5>
				<input type="submit" name="submit"
					style="height: 40px; width: 120px" id="submit"
					value="Make my booking">
			</form>
		</div>
		<div class="row contact-content" id="cc">

		<div class="full-col tac">
			<form action="http://localhost/CanBook.php" method="post" name="booking"
				id="booking">
				<input type="submit" name="submit"
					style="height: 40px; width: 120px" id="submit"
					value="Cancel My Booking">
			</form>
		</div>

	   </div>
	</div>
</body>
</html>