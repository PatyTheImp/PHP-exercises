<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    
    <?php

        $num = 0;

        while ($num <= 10)
        {
            if ($num == 10)
                echo $num;
            else
                echo $num . ", ";

            $num++;
        }

        echo "<br>";

        $x = 1;

        do
        {
            echo "<br>Número: $x";
            $x++;
        }
        while ($x <= 10);

        echo "<br><br>";

        for ($i = 1; $i <= 8; $i++)
            echo "$i ";

        echo "<br><br>";

        $marcas_auto = array("VW", "Audi", "BMW", "Tesla");
        
        foreach($marcas_auto as $marca)
            echo "<p style='color: purple;'> $marca </p>";

    ?>

</body>
</html>