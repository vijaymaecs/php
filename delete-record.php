<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>

<body>
    <form name="student" method="post">
        <label for="stu-id">Enter Student ID</label>
        <input type="text" name="stu-id" id="stu-id">
        <br>
        <input type="submit" name="submit" value="Delete Record">
    </form>

</body>

</html>

<?php

    include('connection.php');

    if(isset($_POST['submit'])) {
        #echo "Button Clicked...";

        $sid = $_POST['stu-id'];

        #echo $sid . $stuname;

        $query = "DELETE FROM crud_table WHERE stu_id = '$sid'";

        $exeQuery = mysqli_query($connection, $query);

        if(!$exeQuery) {
            echo "Unable to Delete record" . mysql_error($exeQuery);
        } else {
            echo "Record Deleted successfully";
        }
    }

?>