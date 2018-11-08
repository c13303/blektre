<?php




$nom=$_GET['nom'];



$nom= preg_replace("[^a-zA-Zeeee ]", "", $nom);
echo $nom;
?>