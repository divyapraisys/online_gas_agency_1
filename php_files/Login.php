<?php
session_start(); 
$username=$_POST['username'];
$password=$_POST['password'];
if ( !( $connection = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( ! mysql_select_db( "13bcs049db", $connection ) )
 die( "Could not open products database" );
if ( !( $query = mysql_query( "select type from credential where password='".$password."' AND email='".$username."'", $connection ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
$rows = mysql_num_rows($query);
$row = mysql_fetch_assoc($query);
$user = $row['type'];
echo $user;echo $rows;
if ($rows == 1) {
	$_SESSION['login_type']=$user;
	if($user == 'consumer'){
		echo $user;
		if ( !( $query = mysql_query( "select uname from consumer where email='".$username."'", $connection ) ) )
        {
             print( "Could not execute query!" );
             die( mysql_error());
        }
	    $row = mysql_fetch_assoc($query);
        $uname=$row['uname'];
		$_SESSION['login_user']=$uname; 
        header("location: http://localhost/CLogin.php"); 
	}else{
		if ( !( $query = mysql_query( "select cname from dealer where email='".$username."'", $connection ) ) )
        {
             print( "Could not execute query!" );
             die( mysql_error());
        }
	    $row = mysql_fetch_assoc($query);
        $uname=$row['cname'];
		$_SESSION['login_user']=$uname; 
        header("location: http://localhost/DLogin.php"); 
	}
}
else {
    header("location: http://localhost:8080/OnlineGasAgency/index.jsp"); 
	
}
mysql_close($connection); 
?>