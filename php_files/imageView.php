<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("13bcs049db") or die(mysql_error());
if(isset($_GET['image_id'])) {
$sql = "SELECT document FROM locchang WHERE document=" . $_GET['image_id'];
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);

echo $row["imageData"];
}
mysql_close($conn);
?>