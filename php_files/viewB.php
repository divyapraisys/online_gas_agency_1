<?php
$query = "select * from booking where status='awaited' and consumerid in (select consumerid from consumer where dealer='".$user_check."')";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<form id='f1' method='post' action='http://localhost/updateBook.php' ><table border="."1px"."style="."background-color: #FFF9F7;"."><tr><th></th><th>Booking ID</th><th>Consumer ID</th><th>Date</th><th>Status</th></tr>");
while($row = mysql_fetch_row($result))
{
 print("<tr>");
 print("<td><input type='radio' name='consid' id='consid' value='".$row[1]."'><input type='hidden' value='".$row[2]."' name='date'></td>");
 foreach($row as $key => $value)
   print("<td>".$value ."</td>");
 print("</tr>");
}	
print("</table><input type='submit' name='submit' value='update' ></form>");
mysql_close( $database );
?>