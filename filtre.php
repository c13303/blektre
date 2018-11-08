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
    <link rel="stylesheet" type="text/css" href="style/blektre.css" />
    <script type="text/javascript" src="scripts/utils.js"></script>


    <style type="text/css">

    </style>
</head>
<body>
<?php
if(empty($debugg)) $debugg = null;
/* 
et tu devrais faire la meme chose pour 'filtre2.php' 
et encore c pas top, mais ca permet d'executer que des fichiers locaux
et pas des urls... ;) */

$v=$_GET['v'];
$rul='pages/'.$v.'.php';


if($v!=1 && !$debugg)
if(!in_array($v,$_SESSION['autorized'])) exit( 'Pas de retour, pas de regrets. <a href="http://blektre.5tfu.org">START OVER</a>');
$_SESSION['autorized']=array();



if ( ($rul=='.php') || (!is_file($rul)) )
{
	echo "BUG: ".$v;
	$rul='include/erreur.php';
}


require("include/connexion.php");
require("include/fonctions.php");

require($rul);

require("include/flash_params.php");
require("include/go.php");

?>


</div>
</body>