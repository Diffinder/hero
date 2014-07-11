<?php
unset($_SESSION['userid']);
unset($_SESSION['auth']);
header("location:login.php");

session_destroy();


?>
