<?php
//first include config.php file for include connection code into this file
include('config.php');
//get selected record id using $_REQUEST array and set it to variable
$id=$_POST['id'];
//now create query string for delete record from students table
$qry="delete from students where id=$id";
//now execute above query using mysqli_query() function 
//if mysqli_query return failed then exit function is called and it's print error in string using 
//mysqli_error() function 
mysqli_query($conn,$qry) or exit("Error in delete data ".mysqli_error($conn));
//if query execute successfully then we redirect user to students.php page using hedaer() function.
header("location:students.php");

?>