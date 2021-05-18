<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções 1</title>
</head>
<body>
    
<?php

function bemvindo()
{
    echo "Funções em PHP...";
}
bemvindo();

echo "<br><br>";

function sobrenome($firstName)
{
    echo $firstName . " Costa<br><br>";
}
sobrenome("Patrícia");

function dobro($num)
{
    return $num * 2;
}

function triplo($num)
{
    return $num * 3;
}

$a = 5;

echo "<p>dobro = " . dobro($a) . "</p>";
echo "<p>triplo = " . triplo($a) . "</p>";

?>

</body>
</html>