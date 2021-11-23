<?php
$X = 1;
$Y = 1;

$n = (int)readline("Donner le nombre de chevaux partants");
$p = (int)readline("Donner le nombre de chevaux partants");

for($i=2;$i<=$p;$i++)
{
    $X= $X*($i+$n-$p);
    $Y = $Y*$i;
}

echo"Dans l'ordre,une chance sur".$X."de gagner";
echo"Dans l'ordre,une chance sur".$X/$Y."de gagner";