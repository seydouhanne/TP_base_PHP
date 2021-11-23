<?php 

$apayer = 0;
$arendre = 0;
$b10=0;
$b5 =0;

do {
    $prix = (int) readline("Quel est le prix de l'article : ");
    $apayer = $apayer+$prix;
}while($prix!=0);


echo("Total a payer : ".$apayer."\n");
do {
$montverse =(int)readline("Montant payé\n");
if($montverse<$apayer)
{
    echo("Montant insuffisant\n");
}
}while($montverse<$apayer);
$arendre = $montverse-$apayer;

while($arendre>=10){
    $b10++;
    $arendre = $arendre-10;

}

if($arendre>=5){
    $b5++;
    $arendre = $arendre-5;

}

echo("Nombre de billet de 10 euros:".$b10."\n");
echo("Nombre de billet de 5 euros:".$b5."\n");
echo("Nombre de pieces d' 1 euro:".$arendre."\n");
