<?php
//Tableau ayant pour valeurs les entiers de 1 à 63
$tab=range(1,63);
print_r($tab);
echo "<br>";
//Tableau ayant pour valeurs les décimaux de 0 à 6.3


$arr=range(0,63);
foreach($arr as $index=>$valeur)
{
   // $tab[$index]=$tab[$index]/10;
    $arr[$index]=$valeur/10;

}
print_r($arr);
echo "<br>";
//Tableau dont les clés sont X et les valeurs sin(X)
foreach($arr as $index=>$valeur)
{
    $valeur= (string) $valeur;
   
    $tabsin[$valeur]= sin($valeur);
}
print_r($tabsin);