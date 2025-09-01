<?php 
// DECLARAR LAS VARIABLES 
$nota1 = 10;       // nota1
$nota2 = 17;  //nota 2
$nota3 = 12;    //nota3
$nota4 = 19;   //nota4

$cond="";
$mayor=0;
$menor=21;
$ACU=0;


// Calcular acumulado (suma de las notas)
$ACU=($nota1+$nota2+$nota3+$nota4);
// calcular el promedio final)
$promedio=$ACU/4;

//Verificar si aprueba o reprueba
if($promedio>=13){
    $cond="APROBADO";
}
else{
    $cond="REPROBADO";
}

// Hallar mayor nota
if($nota1>$nota2 && $nota1>$nota3 && $nota1>$nota4){
    $mayor=$nota1;
}
elseif($nota2>$nota1 && $nota2>$nota3 && $nota2>$nota4){
    $mayor=$nota2;
}
elseif($nota3>$nota1 && $nota3>$nota2 && $nota3>$nota4){
    $mayor=$nota3;
}
else{
    $mayor=$nota4;
}

// hallar menor nota
if($nota1<$nota2 && $nota1<$nota3 && $nota1<$nota4){
    $menor=$nota1;
}
elseif($nota2<$nota1 && $nota2<$nota3 && $nota2<$nota4){
    $menor=$nota2;
}
elseif($nota3<$nota1 && $nota3<$nota2 && $nota3<$nota4){
    $menor=$nota3;
}
else{
    $menor=$nota4;
}

// Mostrar resultados
echo "Nota1: $nota1 <br>";
echo "Nota2: $nota2 <br>";
echo "Nota3: $nota3 <br>";
echo "Nota4: $nota4 <br>";

echo ".................................<br>";
echo "ACUMULADO DE LAS NOTAS: $ACU <br>";
echo "PROMEDIO FINAL : $promedio <br>";
echo "MAYOR NOTA: $mayor<br>";
echo "menor NOTA: $menor<br>";
echo "CONDICION ES:$cond<br>";
?>