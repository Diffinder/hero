<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
 $con = mysql_connect("localhost", "root", "abc");
mysql_select_db("hero");
 $query = "SELECT * FROM vendor_order WHERE view_status=1 order by O_ID DESC ";
 $query_result = mysql_query($query,$con)
  or die("Invalid query: " . mysql_error());

    $li_row=" ";
    while ($rw1 = mysql_fetch_array($query_result)) {
    $li_row.='<li><a href="/hero/docs/profile/vendor_detail.php?oid='.$rw1[O_ID].'"><i class="ion ion-ios7-people info"></i>';
    $li_row.=$rw1[O_ID]." - ".$rw1[CustID]." - ".$rw1[Bike];
    $li_row.='</a></li>';
    }
echo "data: $li_row\n\n";
flush();
?> 
