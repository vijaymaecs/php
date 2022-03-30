<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record - CRUD App</title>
</head>
<body>
    <form name="student" method="post">
        <label for="stu-id">Enter Student ID</label>
        <input type="text" name="stu-id" id="stu-id">
        <br>
        <label for="stu-name">Enter Student Name</label>
        <input type="text" name="stu-name" id="stu-name">
        <br>
        <input type="submit" name="submit" value="Submit Record">
    </form>
</body>
</html>

<?php

    include('connection.php');

    if(isset($_POST['submit'])) {
        #echo "Button Clicked...";

        $sid = $_POST['stu-id'];
        $stuname = $_POST['stu-name'];

        #echo $sid . $stuname;

        $query = "INSERT INTO crud_table (stu_id, stu_name) VALUES ($sid, '$stuname')";

        $exeQuery = mysqli_query($connection, $query);

        if(!$exeQuery) {
            echo "Unable to save record" . mysql_error($exeQuery);
        } else {
            echo "Record added successfully";
        }
    }

?>