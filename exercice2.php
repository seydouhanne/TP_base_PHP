<?php

$x = random_int(10,20);
do {
$y = (int) readline('Donnez le nombre magique : ') ;

if($x== $y){
  echo("BRAVO");
  break;
}

if($y >20){
    echo("PLUS BAS \n");
    
  }
  

  if($y<10){
    echo("PLUS HAUT \n");;
    
  }
  
  
} while($x=$y) ; 




