<!DOCTYPE html>
<html>
<head>
<title>Sara Gas Booking</title>
</head>
<body>
<?php
$query = "select * from edit";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<table border="."1px"."><tr><th>EmailID</th><th>Mobile</th><th>New Address</th>");
while($row = mysql_fetch_row($result))
{
 print("<tr>");
 foreach($row as $key => $value)
   print("<td>".$value ."</td>");
 print("</tr>");
}	
print("</table>");
mysql_close( $database );
?>
  </body>
</html>