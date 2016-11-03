<?php
$query = "select * from locchang where status='awaited'";
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
print("<form id='f1' method='post' action='http://localhost/updateT.php'><table border="."1px"."style="."background-color: #FFF9F7;"."><tr><th></th><th>Consumer ID</th><th>Status</th><th>New Address</th><th>TTV</th><th>DGCC</th><th>Proof of address</th>");
while($row = mysql_fetch_assoc($result))
{
 print("<tr>");
   print("<td><input type='radio' name='consid' value='".$row['consumerid']."'></td>");
   print("<td>".$row['consumerid'] ."</td>"."<td>".$row['status']."</td>"."<td>".$row['newaddress']."</td>");
   print("<td><a href='upload/".$row["document"]."' >doc</a></td>");
   print("<td><a href='upload/".$row["document1"]."' >doc</a></td>");
   print("<td><a href='upload/".$row["document2"]."' >doc</a></td>");
 print("</tr>");
}	
print("</table><input type='submit' name='submit' value='update'></form>");
mysql_close( $database );
?>