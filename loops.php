<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <!-- 

        for
        while
        do while
    
     -->

    <?php
        // $x;
        
        // for ( $x = 0; $x <= 15; $x++) {
        //     echo "$x <br>";
        // }

        // $a;
        // $x = 5;
        // $y = 20;

        // for ($a = 1; $a <= $y; $a++) {
        //     echo " $x * $a = " . $x * $a . "<br>";
        // }

        // $a = 21;
        // $x = 5;
        // $y = 20;

        // while ( $a <= $y ) {
        //     echo " $x * $a = " . $x * $a . "<br>";
        //     $a++;
        // }

        // do {
        //     echo " $x * $a = " . $x * $a . "<br>";
        //     $a++;
        // } while ( $a <= $y )


        $languages = array("HTML5", "CSS3", "Bootstrap", "JavaScript", "PHP", "Angular");

        #echo $languages[1];

        foreach ($languages as $lang) {
            echo ("- " . $lang . "<br>");
        }
    ?>
</body>
</html>