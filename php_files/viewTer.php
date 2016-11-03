<?php
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
$query=mysql_query("select consumerid from consumer where uname='".$_SESSION['login_user']."'", $database);
$row = mysql_fetch_assoc($query);
$consno = $row['consumerid'];
$quer="select status from locchang where consumerid='".$consno."' AND status='awaited'";
if ( !( $result = mysql_query( $quer, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
if(mysql_num_rows($result)>0){
$row = mysql_fetch_assoc($result);
$status = $row['status'];
print("<h5>The status for your last request is: ".$status."</h5>");
}
mysql_close( $database );
?>