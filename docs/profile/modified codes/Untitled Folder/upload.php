<?php

$errmsg = "";
$con = mysql_connect("localhost", "root", "abc");
    mysql_select_db("hero");
    $query1 = "update vendor_order set inv_url='".$_REQUEST[whatsit].".pdf' WHERE O_ID=".$_REQUEST[whatsit];
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());

if ($errmsg == "") {
if ($_REQUEST[completed] == 1) {
        move_uploaded_file($_FILES['imagefile']['tmp_name'],$_REQUEST[whatsit].".pdf");
	$errmsg = "Uploaded successfully";
} else {
        $errmsg = "Form not completed";
}}
?>

<html>
<head>
<title>Pdf uploaded</title>
<body>
Operation status: <?= $errmsg ?><br>
<a href="vendor_index.php">Go Back to main page</a>
</body>
</html>
