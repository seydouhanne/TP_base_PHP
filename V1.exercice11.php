<?php

$n = (int) readline("Donner le nombre de cheveaux partants");
$p = (int) readline("Donner le nombre de cheveaux joués");

$num = 1; 

for($i=2;$i<=$n;$i++)
{
    $num=$num*$i;

}
$X= 1;
for($i=2;$i<=$n-$p;$i++)
{
    $X=$X*$i;
}

$d2= 1;
for($i=2;$i<=$n-$p;$i++)
{
    $Y=$Y*$i;
}
echo("Dans l'ordre,une chance sur ".$num/$X."de gagner\n");
echo("Dans le desordre,une chance sur ".$num/$Y."de gagner\n");

?>
