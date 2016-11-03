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
    height:30px;
    font-family: Tahoma;
    background: #f4f4f4;
}</style>
</head>

<body>
	<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;">
			<div class="nav my-sticky-element">
				<div class="logo-holder">
					<span class="s main-logo"><img src="images/icon.jpg" width="80px" alt="images.jpg"/>
				<font size="25px">Sara Gas Booking</font></span>
				</div>
				<ul class="wrapper">
					<li><a href="index.jsp">Home</a></li>
					<li>Login</li>
					<li><a href="RegisterIn.jsp">Register</a></li>
					<li><a href="Contact.jsp">Contact</a></li>
					<li><a href="Feedack.jsp">Feedback</a></li>
				</ul>
			</div>
		</div>
		<div class="full-col tac">
		</div>

	<div class="row contact-content" id="cc">

		<div class="full-col tac">
			<form action="http://localhost/Login.php" method="post" name="booking" id="booking">
				<p><font size=5px>Email id: </font><input type="text" style="height:25px" name="username" id="username"></p> 
				<p ><font size=5px>Password: </font><input type="password" style="height:25px" name="password" id="password"></p> 
			    <input type="submit" name="submit" id="submit" value="LOGIN">
			</form>
		</div>

	</div>
	</div>

</body>
</html>