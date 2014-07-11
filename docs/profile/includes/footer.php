<link rel="stylesheet" href="../../css/style.css">
<footer style="text-align:center;" class="footer">
Developed by BalaMurali@<a href="http://www.cdit.org">C-DIT,Trivandrum</a> - <?php 
echo date("F d").",".date("Y")
?>
</footer>
<?php
	// 5. Close connection
	mysql_close($connection);
?>