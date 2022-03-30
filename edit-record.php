<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <form name="student" method="post">
        <label for="stu-id">Enter Student ID</label>
        <input type="text" name="stu-id" id="stu-id">
        <br>

        <?php
        include('connection.php');

        if(isset($_POST['submit'])) {
            $sid = $_POST['stu-id'];
            #echo $sid;
            $query = "SELECT * FROM crud_table WHERE stu_id = '$sid'";
            $exeQuery = mysqli_query($connection, $query);
            // $numQueryRows = mysqli_num_rows($exeQuery);
            // echo $numQueryRows;

            // if ($exeQuery) {
            //     echo "successfully loaded";
            // }
            while($data = mysqli_fetch_assoc($exeQuery)) {
        ?>
            <label for="stu-name">Enter Student Name</label>
            <?php
                echo "<input type='text' name='stu-name' value='" . $data['stu_name'] . "' id='stu-name'>";
            }
        }
        ?>
        <br>
        <input type="submit" name="submit" value="View Record">
    </form>

    
</body>
</html>