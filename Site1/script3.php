<?php

/*
Exercice 3:

Le magasin PC-Maghreb vent des ordinateurs portables et souhaite avoir 

un programme qui calcule la remise sur le prix total PT des achats 

d'un client comme suit: 

i3 (2500 dh), i5(3200 dh), i7(4200 dh)

Si la quantité dépasse 6 PC, il y a remise de 5%	

1- Quels sont les paramètres passés dans la requette GET

2- Ecrire le script php


*/

$n = $_GET['n'];
$type = $_GET['type'];
$total = 0;

if($type=="i3") {
    $total = $n*2500;

}

if($type=="i5") {
    $total = $n*3200;

}

if($type=="i7") {
    $total = $n*4200;

}

if($n>6) {
    $total = $total*0.95;
}

echo "le total est ".$total;





?>