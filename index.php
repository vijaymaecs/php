<?php
    $course = "Web Designing";
    $duration = 6.5;
    $books = false;
    $adobe = array("Photoshop", 10, "Illustrator", "Animate", "InDesign");
    echo $course;

    var_dump($adobe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with PHP</title>
</head>
<body>
    <h1>The Course you have joined is " <?php echo $course ?> ", the duration of the course is <?php echo $duration ?> Months</h1>
</body>
</html>