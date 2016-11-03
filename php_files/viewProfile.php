<!DOCTYPE html>
<html>
<head>
<title>Sara Gas Booking</title>
</head>
<body>
<?php
$query = "select * from consumer where uname='".$_SESSION['login_user']."'";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<table border="."1px"." style="."background-color: #FFF9F7;".">");
print("<tr><th>DETAILS</th></tr>");
$row = mysql_fetch_assoc($result);
print("<tr><td align="."left".">Username  : ".$row['uname']."</td></tr>");
print("<tr><td align="."left".">EmailID   : ".$row['email']."</td></tr>");
print("<tr><td align="."left".">Address   : ".$row['address']."</td></tr>");
print("<tr><td align="."left".">ConsumerID: ".$row['consumerid']."</td></tr>");
print("<tr><td align="."left".">Mobile    : ".$row['mobile']."</td></tr>");
print("</table align="."left".">");
mysql_close( $database );
?>
  </body>
</html>