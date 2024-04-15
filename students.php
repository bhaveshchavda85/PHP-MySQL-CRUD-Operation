<form action="students_enroll.php" method="post">
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
                        <td><input type="text" name="fname" id=""></td>
                    </tr>
                    <tr>
                        <td align="right"><b>City</b></td>
                        <td><input type="text" name="city" id=""></td>
                    </tr>
                    <tr>
                        <td align="right"><b>Class</b></td>
                        <td><input type="text" name="class" id=""></td>
                    </tr>
                    <tr>
                        <td align="right"><b>Age</b></td>
                        <td><input type="text" name="age" id=""></td>
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
<hr>
<table width="100%" border="1" align="center">
    <tr>
        <th align="center" colspan="6">
            <h1>Students Enrollment Data</h1>
        </th>
    </tr>
    <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>CITY</th>
        <th>CLASS</th>
        <th>AGE</th>
        <th>ACTION</th>
    </tr>
    <?php
    //first include config.php file for include connection code into this file
    include ('config.php');
    //now create query string for insert data into students table
    $qry = "select * from students order by id desc";
    //now execute above query using mysqli_query() function and store return data into variable
    //if mysqli_query return failed then exit function is called and it's print error in string using 
    //mysqli_error() function 
    $result = mysqli_query($conn, $qry) or exit("Error in insert data " . mysqli_error($conn));
    //now set result to table using while loop for get row from result we use mysqli_fetch_array() function
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td>
                <a href="edit_enroll.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="students_enroll_delete.php?id=<?php echo $row['id']; ?>">Del</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
