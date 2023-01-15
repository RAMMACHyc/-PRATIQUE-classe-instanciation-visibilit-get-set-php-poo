<?php
require_once "Perso.php";
$goku = new Perso(nom:"Goku", hp: 100, puissance: 10);
$vegeta = new Perso(nom:"Vegeta", hp: 90, puissance: 8);
$goku->hit();
echo $goku->__toString();
echo "<br>";
$vegeta->hit($goku->getPuissance());
echo $vegeta->__toString();