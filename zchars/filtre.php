<?php session_start(); header('Content-Type: text/html; charset=iso-8859-1'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" >
<head>
    <title>Blektre</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta name="description" content="Simulateur de vraie vie: BLektre" />
    <meta name="keywords" content="Simulateur de vraie vie: BLektre" />
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="robots" content="index, follow" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../style/blektre.css" />
    <script type="text/javascript" src="scripts/utils.js"></script>
    <style type="text/css">

    </style>
</head>
<body>


<div class="colmask doublepage">
	<div class="colleft">
	  <div class="col1">
	 <div id="whole">
<?php

/* 
et tu devrais faire la meme chose pour 'filtre2.php' 
et encore c pas top, mais ca permet d'executer que des fichiers locaux
et pas des urls... ;) */

$v=$_POST['v'].'.php';

if (($v=='.php') || (!is_file($v)))
{
	echo "BUG: ".$v;
	$v='../include/erreur.php';
}


require("../include/connexion.php");
require("../include/fonctions.php");

$ids=$_POST['ids'];
$nom=$_SESSION['nom'];
$noma=$_SESSION['noma'];
$pid=$_SESSION['pid'];
$sess_hapen = $_SESSION['hapen'];

   
$entree='';
$entree2='';

$fplace=$_SESSION['fplace'];
unset($_SESSION['hapen']);

if(!$v) erreur('wtf are u trying to do');
require($v);
require('go.php');

exit;


?>
</div>
      </div>
	  <div class="col2">
	
	  </div>
  </div>
</div>
</body>
</html>
