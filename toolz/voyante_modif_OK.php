<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


<title>BLEKTRE</title>
<link rel="stylesheet" type="text/css" href="../style/blektre.css" />
<style type="text/css">

</style>
</head>

<body>


  <p align="center"><?php

include("../include/connexion.php");

$keyword=$_POST['keyword'];
$alias=$_POST['alias'];
$define=$_POST['define'];

requete('UPDATE pedia SET definition="'.$define.'" WHERE need="'.$keyword.'";');
echo 'Truc fait';



?>
    <a href="voyante_entree.php">INSERT/MODIF</a> / <a href="voyante_pedia.php">[afficher tout le dico] </a>