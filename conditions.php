<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
    <style>
        div {
            width: 350px;
            height: 150px;
        }
        .red {
            background-color: red;
        }
        .blue {
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php
        /*
            if else condition
            if else if condition
            switch
        */

        // $age = 18;

        // if ( $age >= 18 ) {
        //     echo "You are eligible to vote";
        // } else {
        //     echo "You will have to wait for some more time";
        // }

        // $average = 44;

        // if ( $average >= 85 ) {
        //     echo "You have passed with distinction";
        // } else if (( $average >= 65 ) && ( $average < 85 )) {
        //     echo "You have passed with First Class";
        // } else if (( $average >= 45 ) && ( $average < 65 )) {
        //     echo "You have passed with Second Class";
        // } else {
        //     echo "You have Failed";
        // }
    ?>

    <?php
        #$color = "blue";

        #if ( $color == "red" ) { 
        ?>
            <!-- <div class="red"></div> -->
        
        <?php #} else if ( $color == "blue" ) { ?>

            <!-- <div class="blue"></div> -->

        <?php #}
    ?>

    <?php
        $language = "MySQL";

        switch ($language)
        {
            case "PHP":
                echo "Duration of ". $language ." is 4 Months";
                break;
                
            case "MySQL":
                echo "Duration of ". $language ." is 8 Months";
                break;

            default:
                echo "Nothing Selected";
        }
    ?>
    
    
</body>
</html>