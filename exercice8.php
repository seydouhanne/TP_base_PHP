<?php
$i= 0;
$max= 0;

for($i=0;$i<20;$i++)  {


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

}

echo ("Le plus grand nombre est  : ".$max."\n");

echo ("il occupe la place numero  : ".$numero);
