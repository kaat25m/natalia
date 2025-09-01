
<?php
$acu=0; //acumulado
$npares=0; //numero pares
$spares=0; //suma de pares
$nimpares=0; //contador de numeros impares
$simpares=0; //suma de impares
$i=1; //contador comienza en uno
while($i<=17){
    $acu+=$i;
if($i%2==0){
    $npares++;
    $spares+=$npares;
}
else{
    $nimpares++;
    $simpares+=$nimpares;
}
echo "El Número es: $i <br>";
$i++;

}
echo "El acumulado es: $acu <br>";
echo "Cantidad de numeros pares son: $npares <br>";
echo "Suma de pares son: $spares <br>";
echo "Cantidad numeros impares son: $nimpares <br>";
echo "Suma de impares son: $simpares <br>";

?>