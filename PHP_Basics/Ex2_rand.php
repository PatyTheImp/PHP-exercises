<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rand</title>
</head>
<body>
    
    <?php

    $rand_red = rand(0, 255);
    $rand_green = rand(0, 255);
    $rand_blue = rand(0, 255);

    //Cores complementares 
    $rand_red_comp = 255 - $rand_red;
    $rand_green_comp = 255 - $rand_green;
    $rand_blue_comp = 255 - $rand_blue;

    echo 
        "<p>Cor RGB ({$rand_red}, {$rand_green}, {$rand_blue})</p>

        <style>

        body {
            background-color: rgb({$rand_red}, {$rand_green}, {$rand_blue});
            color: rgb({$rand_red_comp}, {$rand_green_comp}, {$rand_blue_comp});
        }

        </style>";

    ?>

    <style>

        p {
            font-family: Calibri;
            font-size: 36px;
            text-align: center; 
        }

    </style>

</body>
</html>