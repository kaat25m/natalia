<?php


$nombre="Santos Perez";
$ht=180; // HORAS TRABAJADAS 
$ph=20; // PAGO POR HORA
$he=0; // HORA EXTRA 
$phe=0; // PAGO POR HORA EXTRA 
$neto=0; // NETO

if($ht>160){ // SI HORAS TRABAJADAS ES MAYOR A 180
    $he=$ht-160;
    $phe=($ph*1.50)*$he;
    $neto=160*$ph+$phe;

}
else{
    $neto=$ph*$ht;
}
// Imprimir
/*
echo "Nombre es: $nombre<br>";
echo "Horas trabajadas $ht<br>";
echo "pago por Hora $ph<br>";
echo ".............................<br>";

echo "Hora extra es: $he <br>";
echo "pago por Horas extras es: $phe <br>";
echo "Sueldo neto es: $neto<br>";

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>mi paginat</title>
    <link rel="stylesheet" href="estilos5.css">
</head>
<body>

<table>
    <tr>
        <th colspan="2"> Reporte de Pago </th> 
    </tr>
  <tr>

    <td>Nombre:</td>
    <td><?= $nombre ?></td>
  </tr>

   <tr>

    <td>Horas trabajadas:</td>
    <td><?= $ht ?></td>
  </tr>

    <tr>

  <td>Pago por Hora</td>
  <td>S/.<?= $ph ?></td>
  </tr>

  <tr>

  <td>Horas Extra</td>
  <td><?= $he ?></td>
  </tr>

  <td>Pago por Hora Extra</td>
  <td><?= $phe ?></td>
  </tr>

  <td class="total"> Sueldo Neto</td>
  <td><?= $neto ?></td>
  </tr>
      
</table>
<br>

<p>

</p>



</body>
</html>