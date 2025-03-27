<?php
        function suma1($a,$b){
        return $a+$b;
}
function suma($d,$e){
        return $d+$e;
}
function dividie($a,$b,$d,$e){
        $resultadosum0=suma1($a,$b);
        $resultadosuma1=suma($d,$e);
        return $resultadosum0/$resultadosuma1;
}


#codigo que se ejecuta inmediatamente
$a = pow(4,2)/2 ;
$b = 1/sqrt(4);
$c = 3;
$e = 1/2*pow(4,3);
$d = dividie($a,$b,$d,$e);
$f = sqrt($c);
        ?>

        <html>
        <head>
            <title>Funciones</title>
    </head>
    <body>
        <p> <?php echo $f; ?> </p>
      </body>
    </html>


