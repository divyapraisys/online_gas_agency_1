<?php
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
$query=mysql_query("select consumerid from consumer where uname='".$_SESSION['login_user']."'", $database);
$row = mysql_fetch_assoc($query);
$consno = $row['consumerid'];
$quer="select date from booking where consumerid='".$consno."' AND status='awaited'";
if ( !( $result = mysql_query( $quer, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
if(mysql_num_rows($result)>0){
$row = mysql_fetch_assoc($result);
$date = $row['date'];
print("<p>Today:".date('y-m-d').". You made a booking on ".$date);
$date1=date_diff(DateTime::createFromFormat('Y-m-d',date("y-m-d")),DateTime::createFromFormat('Y-m-d',date('y-m-d',strtotime($date.' + 3 days'))));
if($date1->format("%R")== '+' & $date1->format("%a")!= '0' )
print(".You have ". $date1->format("%R %a days")." to cancel your booking</p>");
}
mysql_close( $database );
?>