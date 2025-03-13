<?php
ini_set ("display_errors", E_ALL);
    include_once "Persona.php";

    $lista = [
        new Persona("Mengano", "1994-10-05", "","5650283514"),
        new Persona("David", "1995-01-08","","5658283514"),
        new Persona("Samuel", "1996-02-01","","5660283514"),
        new Persona("Vaca", "1999-10-05","", "5650283514"),
        new Persona("Dante", "2001-03-05","", "5654283514"),
        new Persona("Fabian", "2004-06-05","","5670283514"),
        new Persona("Dario", "2005-09-05","","5653283514"),
        new Persona("Tania", "2006-09-05","","5659283514"),
        new Persona("Tarantino", "2000-04-05","","4650283514"),
        new Persona("Fabricio", "2004-07-05","","5250283514"),
    ];

    $Fecha_nacim1 = new DateTime ("1994-10-05");
    $hoy = new DateTime();
    $edad1 = $hoy->diff($Fecha_nacim1);
    $edad1->y;

    $Fecha_nacim2 = new DateTime ("1995-01-08");
    $hoy = new DateTime();
    $edad2 = $hoy->diff($Fecha_nacim2);
    $edad2->y;  

    $Fecha_nacim3 = new DateTime ("1996-02-01");
    $hoy = new DateTime();
    $edad3 = $hoy->diff($Fecha_nacim3);
    $edad3->y;

    $Fecha_nacim4 = new DateTime("1999-10-05");
    $hoy = new DateTime();
    $edad4 = $hoy->diff($Fecha_nacim4);
    $edad4->y;

    $Fecha_nacim5 = new DateTime ("2001-03-05");
    $hoy = new DateTime();
    $edad5 = $hoy->diff($Fecha_nacim5);
    $edad5->y;

    $Fecha_nacim6 = new DateTime ("2004-06-05");
    $hoy = new DateTime();
    $edad6 = $hoy->diff($Fecha_nacim6);
    $edad6->y;

    $Fecha_nacim7 = new DateTime ("2005-09-05");
    $hoy = new DateTime();
    $edad7 = $hoy->diff($Fecha_nacim7);
    $edad7->y;

    $Fecha_nacim8 = new DateTime ("2006-09-05");
    $hoy = new DateTime();
    $edad8 = $hoy->diff($Fecha_nacim8);
    $edad8->y;

    $Fecha_nacim9 = new DateTime ("2000-04-05");
    $hoy = new DateTime();
    $edad9 = $hoy->diff($Fecha_nacim9);
    $edad9->y;

    $Fecha_nacim10 = new DateTime ("2004-07-05");
    $hoy = new DateTime();
    $edad10 = $hoy->diff($Fecha_nacim10);
    $edad10->y;
?>

<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Lista de personas</title>
   <style>
       td {
        background-color: cyan;
       }
    </style>
  </head>
  <body>
<h1>Lista de personas </h1>
<table border>
<thead>
</thead>
<tr>
        <th>Nombre</th>
        <th>FechadeNacimiento</th>
        <th>Edad Atual</th>
        <th>Telefono</th>
</tr>
<tbody>

<?php foreach($lista as $p): ?>
<tr>
        <td><?php echo $p->getNombre()?></td>
        <td><?php echo $p->getFecNac()?></td>
        <td><?php echo $p->getEdadAct()?></td>
        <td><?php echo $p->getTel()?></td>
</tr>
<?php endforeach?>
</tbody>
</table>
  </body>
</html>