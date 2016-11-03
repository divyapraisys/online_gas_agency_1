<?php
$consid=$_POST['consid'];
$date=$_POST['date'];
$query = "update booking set status='delivered' Where consumerid='".$consid."' and date='".$date."'";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
header("location: http://localhost/Manage.php");
mysql_close( $database );
?>