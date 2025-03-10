<?php 
function fechaUSaLetra ($fecha) {
    $FechaLetra ="";
    $partes = explode("-",$fecha);
    $meses = ["Enero", "Febrero", "Marzo","Abril",
    "Mayo","Junio", "Julio",
    "Agosto","Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $fechaLetra = $partes[2]. "de" .
       $meses[ $partes[1]-1]."de". 
       $partes[0];
       return $fechaLetra;
}
$fecha = $_GET["fecha"];
$fechaLetra = fechaUSaLetra($fecha);
?>

<html>
    <hea>
    </hea>
    <body>
       <h1>Fechas</h1>
       <p>La fecha <?php echo $fecha?> en letra es <?php echo $fechaLetra?> </p> 
    </body>
</html>
