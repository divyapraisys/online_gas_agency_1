<?php
$message=$_POST['message'];
$consno=$_POST['cosno'];
$type=$_POST['type'];
$query = "insert into feedback (consumerid,type,message) values('".$consno."','".$type."','".$message."')";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
header("location: http://localhost:8080/OnlineGasAgency/TFeedack.jsp"); 
mysql_close( $database );
?>