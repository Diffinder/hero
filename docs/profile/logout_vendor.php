<?php
unset($_SESSION['userid']);
unset($_SESSION['auth']);
header("location:login_vendor.php");

session_destroy();


?>
