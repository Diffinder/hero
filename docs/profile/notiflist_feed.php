<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
 $con = mysql_connect("localhost", "root", "");
mysql_select_db("hero");
 $query = "SELECT * FROM feedback WHERE status=0 order by f_ID DESC ";
 $query_result = mysql_query($query,$con)
  or die("Invalid query: " . mysql_error());

    $li_row=" ";
    while ($rw1 = mysql_fetch_array($query_result)) {
    $li_row.='<li><a href="/hero/docs/profile/feedview.php?fid='.$rw1['f_ID'].'"><h4><i class="ion fa-flag-o info"></i>&nbsp;&nbsp;&nbsp;';
    $li_row.=$rw1['f_ID']." - ".$rw1['feedback'];
    $li_row.='</h4></a></li>';
    }
echo "data: $li_row\n\n";
flush();
?> 
