<?php
$query = "select * from booking where consumerid in (select consumerid from consumer where dealer='".$user_check."')";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<table border="."1px"."style="."background-color: #FFF9F7;"."><tr><th>Booking ID</th><th>Consumer ID</th><th>Date</th><th>Status</th></tr>");
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