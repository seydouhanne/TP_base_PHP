<?php
$i= 0;
$max= 0;
$nombre = null ;
do {
 $nombre = (int)readline("Donnez le nombre numéro ".($i+1)."  \n");
        
 if ($nombre>$max)
 {
     $max = $nombre;
     $numero = $i+1;

 }
 else
 {
     $max = $max;
 }        
$i++;
} while($nombre!=0);

echo ("Le plus grand nombre est  : ".$max."\n");

echo ("il occupe la place numéro  : ".$numero);