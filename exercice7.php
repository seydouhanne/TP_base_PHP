<?php

$x = (int) readline("Donnez un nombre : ") ;
$i = 1; 
$s = 1;


for($i=1;$i<=$x;$i++){

   $s = $s*$i;
    
}

echo ($x." factoriel = ".$s);