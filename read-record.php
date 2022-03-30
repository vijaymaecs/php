<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Record</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: "Helvetica Neue",Helvetica,Arial
        }
        table {
            width: 600px;
            margin: auto;
            border-collapse: collapse;
        }
        tr {
            height:40px;
        }
        td, th {
            border: 2px solid #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Student ID</td>
            <td>Student Name</td>
        </tr>
        <?php
            include('connection.php');
            $query = "SELECT * FROM crud_table";
            $exeQuery = mysqli_query($connection, $query);
            $grows = mysqli_num_rows($exeQuery);

            if ($grows > 0) {
                while($data = mysqli_fetch_array($exeQuery)) {
                    echo "<tr>";
                    echo "<td>" . $data['stu_id'] . "</td>";
                    echo "<td>" . $data['stu_name'] . "</td>";
                    echo "</tr>";
                }
            }

            echo $grows;
            
        ?>
    </table>
</body>
</html>