<!DOCTYPE html>
<html>
<head>
<title>Sara Gas Booking</title>
</head>
<body>
<?php
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$query = "insert into edit (email,mobile,address) values('".$email."','".$mobile."','".$address."')";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<h3>Address Update Registered.<a href="."http://localhost:8080/OnlineGasAgency/Profile.html".">Go Back To Profile.</a></h3>");
mysql_close( $database );
?>
</body>
</html>