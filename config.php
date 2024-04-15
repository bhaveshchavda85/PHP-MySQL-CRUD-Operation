<?php
$hostname="localhost"; //hostname or server name
$username="root";//username for access mysql database
$password="";// password of root user
$database="test"; //database name 
//create connection using PHP library function 
//for create connection we use mysqli_connect() funciton with above info.
$conn=mysqli_connect($hostname,$username,$password,$database) or exit("Error in connection");
?>