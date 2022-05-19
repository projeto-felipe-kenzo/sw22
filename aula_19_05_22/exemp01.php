<?php
$numeros = [1,12,50,1.2];
//echo $numeros[2];
$qtde = count($numeros);

//contador
$total = 0;
for($i=0; $i<4; $i++){
    echo "Indice = $i ==> $numeros[$i] <br>";
    $total = $total + $numeros[$i];
}
echo "<hr>";
echo "soma total é $total <br>";
$media = $total/$qtde;
echo "a média é $media";
?>