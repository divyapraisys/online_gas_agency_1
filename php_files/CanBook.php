<?php
include('session.php');
$user=$_SESSION['login_user'];
$quer="select consumerid from consumer where uname='".$user."'";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $quer, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
$row = mysql_fetch_assoc($result);
$consid = $row['consumerid'];
$date=date('y-m-d');
$quer="select date from booking where consumerid='".$consid."' AND status='awaited'";
if ( !( $result = mysql_query( $quer, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
if(mysql_num_rows($result)==1){
$row = mysql_fetch_assoc($result);
$date = $row['date'];
print("<p>Today:".date('y-m-d').". You made a booking on ".$date);
$date1=date_diff(DateTime::createFromFormat('Y-m-d',date("y-m-d")),DateTime::createFromFormat('Y-m-d',date('y-m-d',strtotime($date.' + 3 days'))));
if($date1->format("%R")== '+' & $date1->format("%a")!= '0'){
$query="UPDATE booking SET status='canceled' WHERE consumerid='".$consid."'";
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
}
}
header("location: http://localhost/CLogin.php");
mysql_close( $database );
?>