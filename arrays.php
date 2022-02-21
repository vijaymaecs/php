<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Arrays</title>
</head>
<body>
    <?php
        // standard array

        // $languages = array("HTML5", "CSS3", "Bootstrap", "JavaScript", "PHP", "Angular");

        // $al = count($languages);

        // echo $al . "<br>";

        // echo $languages[0] . "<br>";
        // echo $languages[1] . "<br>";
        // echo $languages[2] . "<br>";
        // echo $languages[3] . "<br>";
        // echo $languages[4] . "<br>";
        // echo $languages[5] . "<br>";

        // associative array

        $languages = array("HTML5" => 30, "CSS3" => 40, "Bootstrap" => 15, "JavaScript" => 35, "PHP" => 60, "Angular" => 120);

        echo " It Takes " . $languages['HTML5'] . " days to complete HTML5";

    ?>
</body>
</html>