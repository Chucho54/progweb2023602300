<?php
function suma($a,$b) {
    return $a+$b;
}



//Codigo que se ejuca inmediatamente
$a = $_GET["a"];
$b = $_GET["b"];
$c = suma(a: $a,b: $b);


?>
<html>

    <head>
        <title>
            Suma de dos números
        </title>
    </head>
    <body>
        <p> <?php echo $a?> + <?php echo $b?> = <?php echo $c?> </p>

    </body>
</html>