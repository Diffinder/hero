<?php
//connect to MySQL; note we’ve used our own parameters- you should use
//your own for hostname, user, and password
$connect = mysql_connect("localhost", "root", "") or
die ("Check your server connection.");
//create the main database if it doesn’t already exist
$create = mysql_query("CREATE DATABASE IF NOT EXISTS hero")
or die(mysql_error());
//make sure our recently created database is the active one
mysql_select_db("hero");
//create "movie" table
$student = "CREATE TABLE user (
U_ID int(100) NOT NULL AUTO_INCREMENT,
user_name varchar(255) NOT NULL,
pwd varchar(255) NOT NULL,
contact BIGINT(10) NOT NULL,
email varchar(255) NOT NULL,
PRIMARY KEY (U_ID)
)";
$results = mysql_query($student)
or die (mysql_error());

$student1 = "CREATE TABLE vendor_user (
V_ID int(100) NOT NULL AUTO_INCREMENT,
vendor_user_name varchar(255) NOT NULL ,
pwd varchar(255) NOT NULL,
contact BIGINT(10) NOT NULL ,
email varchar(255) NOT NULL ,
PRIMARY KEY (V_ID)
)";
$results1 = mysql_query($student1)
or die (mysql_error());

$books = "CREATE TABLE price (
O_ID varchar(100) NOT NULL,
service varchar(255) NOT NULL,
service_price int(100) NOT NULL
)";
$results = mysql_query($books)
or die(mysql_error());

$books1 = "CREATE TABLE vendor_order (
O_ID int(100) NOT NULL,
order_status varchar(255) NOT NULL,
view_status boolean NOT NULL default 1,
order_dd DATETIME NOT NULL,
PRIMARY KEY (O_ID)
)";
$results = mysql_query($books1)
or die(mysql_error());

echo "HERO Database successfully created!";

$sql = "INSERT INTO user(user_name,pwd,contact,email)VALUES('admin','admin123','8123885915','rakhe123kbl@gmail.com')";
if (isset($sql) && !empty($sql)) {
echo "<!--" . $sql . "-->";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());}
?>