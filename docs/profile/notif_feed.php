<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
 $con = mysql_connect("localhost", "root", "");
mysql_select_db("hero");
 $query = "SELECT * FROM feedback WHERE status=0";
 $query_result = mysql_query($query,$con)
  or die("Invalid query: " . mysql_error());
$num = mysql_num_rows($query_result);
echo "data: $num\n\n";
flush();
?> 
