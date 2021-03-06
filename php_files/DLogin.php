<?php
include('Dsession.php');
?>
<!DOCTYPE html>
<html>
<head>   
    <title>Sara Gas Booking</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        <link rel="shortcut icon" type="x-icon" href="../favicon.ico" />
    <link rel="stylesheet" href="main.css" type="text/css" media="screen" />   
</head>
<body>

<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;"><div class="nav my-sticky-element">
			<div class="logo-holder">
				<span class="s main-logo"><img src="icon.jpg" width="80px" alt="images.jpg"/>
				<font size="25px">Sara Gas Booking</font></span>
			</div>			
			<ul class="wrapper">
				<li><a href="http://localhost/Logout.php">Logout</a></li>
				<li>Home</li>
				<li><a href="http://localhost/Manage.php">Manage</a></li>
			</ul>
			
				<h3>
					Hi
					<i><?php echo $user_check; ?></i>
				</h3>
		</div></div>

		<div class="full-col tac">
 			
			<p class="sub-title">Online Booking<br>for web</p>
			<p class="extra">Manage your customer online</p>
			<a href="Manage.jsp" class="btn btn-primary">View & Update Booking Records</a>
 		</div>

</div>

<div class="row intro">

	<div class="full-col">
	<h2>Book Your Cylinder</h2>
 	<h5>Offering you the flexibility and convenience of
 	 booking your refill cylinder at anytime, from anywhere,
 	  when you are on the move, on a holiday or at home
 	   through multiple modes.</h5>
	</div>

</div>

<div class="row brand-grey">

	<div class="about left-col">
		<h3>What can I do for you?</h3>
		<h5>Booking at your convenience</h5>
		<p class="sub-text">
			Online - <a href="Online.html">Click to Book</a><br>
            SMS - <a href="sms.html">Click to Know more</a><br>
            IVRS -<a href="others/DBTLPullInfo.pdf"> Click to Know more</a><br>
            Mobile app for Android & iphones - <a href="mobapp.html">Click to Know more</a><br>
		</p>
		<p class="sub-text">A Mobile application now available for LPG 
		consumers on Android and iphones with options to book Refill cylinder,
		 to register request for second cylinder, log a complaint, check the 
		 history of refill supplies received, to put a request for surrender
		  of connection and also rate your distributor.</p>

		<a href="www.googleplay.com" class="btn btn-secondary">Download App Now</a>
	</div>

	<div class="i-can right-col">
		<h3>You can</h3>
		<h5>...work the magic to:</h5>
		<ul class="sub-text tick-list">
			<li>Design and build you a super-cool website.</li>
			<li>Develop a responsive site to work across all devices and platforms.</li>
			<li>Improve the usability of our web &amp;/or mobile product.</li>
			<li>Reinnovate our current site or app.</li>
			<li>Enhance your brand appearance.</li>
			<li>...and lots more.</li>
		</ul>

		<a href="mailto:saragas16@gmail.com" class="btn btn-secondary">Just mail us your ideas</a>
	</div>

</div>
</body>
</html>