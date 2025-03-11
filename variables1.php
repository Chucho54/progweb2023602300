<?php
        function suma0($divis,$a){
        return $divis+$a;
}


$x=2;
$y=4;
$divis=1/$x;
$a=($x+$y)/3;
$b=suma0($divis,$a);
$j= $b+(2*($x/$y));

function div($numerador,$denominador){
return $numerador/$denominador;
}

$x0=3;
$numerador=(0.5*$x0)+((3+$x0)/2)*(2*pow($x0,2));
$denominador=(2+3)*$x0;
$h=div($numerador,$denominador);

function suma3($dd,$jp00){
    return $dd+$jp00;
}
$v=pow((2*$x),2)+pow(3,2);
$dd=sqrt($v)/5;
$jp00=sqrt(pow($x,2));
$ft=suma3($dd,$jp00);



$fraccik=((1/2)+(1/4)+(1/8));
$frad= $fraccik*(pow($x,1/3));
$fracionarraiz=(sqrt($x)/2)+((3*pow($x,2))/4);
$inzinkkd=$frad/$fracionarraiz;

$sud=((pow($y,2)/2)+(1/(sqrt($y))));
$sufr=3+((1/2)*(pow($y,3)));
$res=sqrt($sud/$sufr);
        ?>

        <html>
        <head>
            <title> Expresiones </title>
    </head>
    <body>
        <p> <img src="incisoa.jpeg" alt="Imagen" width="280" height="70" style="vertical-align: middle;"> = <?php echo  $j; ?> </p>
        <p> <img src="incisob.jpeg" alt="Imagen" width="280" height="150" style="vertical-align: middle;"> = <?php echo $h; ?> </p>
        <p> <img src="incisoc.jpeg" alt="Imagen" width="280" height="150" style="vertical-align: middle;"> = <?php echo $ft; ?> </p>
        <p> <img src="incisod.jpeg" alt="Imagen" width="280" height="150" style="vertical-align: middle;"> = <?php echo number_format($inzinkkd,3); ?> </p>
        <p> <img src="incisoe.jpeg" alt="Imagen" width="270" height="130" style="vertical-align: middle;"> = <?php echo number_format($res,4); ?> </p>
      </body>
    </html>