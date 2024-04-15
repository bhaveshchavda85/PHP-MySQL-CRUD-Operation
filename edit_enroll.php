<?php
//first include config.php file for include connection code into this file
include ('config.php');
//get id from $_REQUEST[] array which we passed by url rewriting 
$id= $_REQUEST['id'];
//now create query string for insert data into students table
$qry = "select * from students where id=$id";
//now execute above query using mysqli_query() function
//if mysqli_query return failed then exit function is called and it's print error in string using 
//mysqli_error() function 
$result = mysqli_query($conn, $qry) or exit("Error in select data " . mysqli_error($conn));

$row = mysqli_fetch_array($result);
//now get single record form result and fill records value inside form using value attribute of input tag
?>
<form action="students_enroll_update.php" method="post">
    <table width="70%" border="1" align="center">
        <tr>
            <th align="center" colspan="2">
                <h1>Students Enrollment Form</h1>
            </th>
        </tr>
        <tr>
            <td align="center">
                <table width="30%" border="1">
                    <tr>
                        <td align="right" width="50%"><b>First Name</b></td>
                        <td>
                            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
                            <input type="text" name="fname" id="" value="<?php echo $row['fname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><b>City</b></td>
                        <td><input type="text" name="city" id="" value="<?php echo $row['city']; ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"><b>Class</b></td>
                        <td><input type="text" name="class" id="" value="<?php echo $row['class']; ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"><b>Age</b></td>
                        <td><input type="text" name="age" id="" value="<?php echo $row['age']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Enroll">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>