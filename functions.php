<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        .name {
            font-weight: bold;
            font-size: 32px;
        }
    </style>
</head>
<body>
    <?php
        #syntax

        /*
            function function_name() {
                all the code to be executed
            }
        */

        #call

        // function welcome() {
        //     echo "Hey and welcome to learning php";
        // }

        #how to call functions

        #welcome();

        #function with parameters


        // function welcome($name) {
        //     echo "Hi <span class='name'>" . $name . " </span>Welcome to learning PHP";
        // }

        // welcome("Abhinash");

        #function with 2 parameters

        // function addNumbers($x, $y) {
        //     echo "$x + $y = " . ($x + $y);
        // }

        // addNumbers(25, 15);

        function addNumbers($x, $y) {
            $result = ($x + $y);
            return $result;
        }

        addNumbers(25, 15);
    ?>
</body>
</html>