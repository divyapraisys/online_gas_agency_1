<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sara Gas Booking</title>
<link rel="stylesheet" href="main.css" type="text/css"
	media="screen" />
</head>
<body>
	<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;">
			<div class="nav my-sticky-element">
				<div class="logo-holder">
					<span class="s main-logo"><font size="25px">Sara
							Gas Booking</font></span>
				</div>
				<ul class="wrapper">
					<li><a href="http://localhost:8080/OnlineGasAgency/index.jsp">Home</a></li>
				</ul>
				</div>
		</div>

		<div class="full-col tac">
			<p class="title">Book Your Gas</p>
<?php
$distri=$_POST['dist'];
$consno=$_POST['distno'];
$email=$_POST['demail'];
$pswd=$_POST['dpassword'];
$type='dealer';
$query = "insert into dealer (cname,dealerid,email) values('".$distri."','".$consno."','".$email."')";
$query1 = "insert into credential (email,password,type) values('".$email."','".$pswd."','".$type."')";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
if ( !( $result = mysql_query( $query1, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<h3>User Registered.</h3>");
mysql_close( $database );
?>
</div>

	</div>

  </body>
</html>