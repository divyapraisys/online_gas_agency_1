<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sara Gas Booking</title>
<link rel="stylesheet" href="CSS/main.css" type="text/css"
	media="screen" />
<style>
input[type=submit] {
	border-radius: 5px;
	border: 0;
	width: 90px;
	height: 30px;
	font-family: Tahoma;
	background: #f4f4f4;
}
</style>
<script language="javascript" type="text/javascript">
	function check() {
		var l;
		if (document.getElementById("cosno").value == "") {
			alert("Please provide Consumer ID");
			document.getElementById("cosno").focus();
			return false;
		}

		if (document.getElementById("message").value == '') {
			alert("Please enter Message");
			document.getElementById("message").focus();
			return false;
		}
		
		return true;
	}
	
	</script>
</head>

<body>
	<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;">
			<div class="nav my-sticky-element">
				<div class="logo-holder">
					<span class="s main-logo"><img src="images/icon.jpg"
						width="80px" alt="images.jpg" /> <font size="25px">Sara
							Gas Booking</font></span>
				</div>
				<ul class="wrapper">
					<li><a href="http://localhost/Logout.php">Logout</a></li>
					<li><a href="http://localhost/CLogin.php">Home</a></li>
					<li><a href="http://localhost/Profile.php">Profile</a></li>
					<li><a href="Feedback.jsp">Feedback</a></li>
				</ul>
			</div>
		</div>
		<div class="full-col tac">
				<h3>Thank you for sharing your feedback with us.</h3>
		</div>
	</div>
	<div class="row intro">

		<div class="full-col">
			<h2>Book Your Cylinder</h2>
			<h5>Offering you the flexibility and convenience of booking your
				refill cylinder at anytime, from anywhere, when you are on the move,
				on a holiday or at home through multiple modes.</h5>
		</div>

	</div>
</body>
</html>