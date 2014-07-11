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
//changed
$student = "CREATE TABLE user (
U_ID int(100) NOT NULL AUTO_INCREMENT,
user_name varchar(255) NOT NULL,
pwd varchar(255) NOT NULL,
contact BIGINT(10) NOT NULL,
email varchar(255) NOT NULL,
add_info varchar(255),
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


$feedback = "CREATE TABLE feedback (
f_ID int(100) NOT NULL AUTO_INCREMENT primary key,
feedback varchar(255) NOT NULL,
status int(100) NOT NULL default 1
)";
$results = mysql_query($feedback)
or die(mysql_error());


$add_usr = "CREATE TABLE vendor_order(
O_ID BIGINT(100) NOT NULL ,
Showroom varchar(255) NOT NULL,
Bike varchar(255) NOT NULL,
ser_type varchar(255) NOT NULL,
ser_mode varchar(255) NOT NULL,
ser_cat varchar(255) NOT NULL,
order_time DATETIME NOT NULL,
req_detail varchar(255) NOT NULL,
dd DATETIME NOT NULL,
CustID varchar(255) NOT NULL,
order_status varchar(255) NOT NULL,
view_status boolean NOT NULL default 1,
order_dd DATETIME NOT NULL,
add_info varchar(255) NOT NULL,
email varchar(255) NOT NULL,
phone BIGINT(10) NOT NULL,
addr varchar(255) NOT NULL,
serv_adv varchar(255) default 'No Advice!!',
inv_url varchar(100) default 'not_uploaded.html',
PRIMARY KEY (O_ID)
)";

$results = mysql_query($add_usr) or die (mysql_error());

echo "CDIT Database successfully created!";

$sql = "INSERT INTO user(user_name,pwd,contact,email)VALUES('admin','admin123','8123885915','rakhe123kbl@gmail.com')";
if (isset($sql) && !empty($sql)) {
echo "<!--" . $sql . "-->";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());}
?>
