<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("13bcs049db", $connection);
session_start();
$login_session='';
$user_check=$_SESSION['login_user'];
$user_type=$_SESSION['login_type'];
if($user_type == 'consumer'){
$ses_sql=mysql_query("select uname from consumer where uname='".$user_check."'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['uname'];
}
else{	
header('Location: http://localhost:8080/OnlineGasAgency/LogIn.jsp'); 
}
if($login_session != $user_check){
	header('Location: http://localhost:8080/OnlineGasAgency/LogIn.jsp');
}
mysql_close($connection); 
?>
