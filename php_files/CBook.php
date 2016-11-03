<!DOCTYPE html>
<html>
<head>
<title>Sara Gas Booking</title>
</head>
<body>
<?php
include('session.php');
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
$uname=$_SESSION['login_user'];
$status="awaited";
$date=date("y-m-d");
if ( !( $query = mysql_query( "select consumerid from consumer where uname='".$uname."'", $database ) ) )
        {
             print( "Could not execute query!" );
             die( mysql_error());
        }
$row = mysql_fetch_assoc($query);
$consno=$row['consumerid'];
            if ( !( $result = mysql_query( "insert into booking (consumerid,date,status) values('".$consno."','".$date."','".$status."')", $database ) ) )
            {
              print( "Could not execute query!" );
              die( mysql_error());
            }
            header("location: http://localhost/CLogin.php");
mysql_close( $database );
?>
  </body>
</html>