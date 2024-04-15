<?php
//first include config.php file for include connection code into this file
include('config.php');
//get form data using $_POST array and set it to variable
$fname=$_POST['fname'];
$city=$_POST['city'];
$class=$_POST['class'];
$age=$_POST['age'];
//now create query string for insert data into students table
$qry="insert into students (fname,city,class,age)values('$fname','$city','$class','$age')";
//now execute above query using mysqli_query() function 
//if mysqli_query return failed then exit function is called and it's print error in string using 
//mysqli_error() function 
mysqli_query($conn,$qry) or exit("Error in insert data ".mysqli_error($conn));
//if query execute successfully then we redirect user to students.php page using hedaer() function.
header("location:students.php");
?>