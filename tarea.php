
<?php
$A=100;
$B=16;
$C=13;
$MAYOR=0;

if($A>$B && $B>$C){
    $MAYOR=$A;
}
elseif ($B>$A && $B>$C) {
    $MAYOR=$B;
}
elseif ($C>$A && $C>$B) {
    $MAYOR=$C;
}
echo "VALOR DE A ES: $A<br>";
echo "VALOR DE B ES: $B<br>";
echo "VALOR DE C ES: $C<br>";
echo ".....................";
?>







?>